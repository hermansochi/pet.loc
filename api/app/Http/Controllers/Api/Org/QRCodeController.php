<?php

namespace App\Http\Controllers\Api\Org;

use App\Http\Controllers\Controller;
use App\Models\Org\OrgUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * @group Organization employee directory management
 */
class QRCodeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Employee QR Code vCard
     *
     * Return QRCode svg image with encoded Employee vCard.
     * Вернет QRCode изображение в формате svg с закодированым контактом сотрудника
     *
     * @unauthenticated
     *
     * @urlParam id string required employee uuid / uuid сотрудника . Example: 976b48f0-7fd3-4d03-82ce-395ddeafe5d5
     * @response 200 scenario="Operation successful" <?xml version="1.0" encoding="UTF-8"?><svg ....>...</svg>
     * @response 422 scenario="Validation error" {"message": "id validation error", "errors": "976b48f0-7fd3-4d03-82ce-395dde111afe5d4 not valid uuid"}
     * @response 422 scenario="Validation error" {"message":"The selected style is invalid.","errors":{"style":["The selected style is invalid."]}}
     * @response 404 scenario="Employee not found" {"message": "404 not found", "errors": "Employee with id  976b48f0-7fd3-4d03-82ce-395ddeafe5d4 not found"}
     *
     * @param  \Illuminate\Http\Request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if (! Str::isUuid($id)) {
            return response([
                'message' => 'id validation error',
                'errors' => $id.' not valid uuid',
            ], 422);
        }
        // Query parameters
        $validated = $request->validate([
            //Image size. / Размер изображения. Example: 600
            'size' => 'integer|between:10,800',
            //QR code style. square | dot | round. 'square' by default. / Стиль QR кода. Example: round
            'style' => [Rule::in(['square', 'dot', 'round'])],
            //QR code eye style. square | circle. 'square' by default. / Стиль QR кода. Example: circle
            'eye' => [Rule::in(['square', 'circle'])],
            //Foreground red color in RGBA model. Default: 0/ Красная составляющая цвета. Example: 128
            'r' => 'integer|between:0,255',
            //Foreground green color in RGBA model. Default: 0 / Зеленая составляющая цвета. Example: 128
            'g' => 'integer|between:0,255',
            //Foreground blue color in RGBA model. Default: 0/ Синия составляющая цвета. Example: 128
            'b' => 'integer|between:0,255',
            //Transparency (Alpha) in RGBA model. Default: 100/ Прозрачность (Альфа-канал) цвета. Example: 100
            'a' => 'integer|between:0,255',
            //Background red color in RGBA model. Default: 255/ Красная составляющая фонового цвета. Example: 32
            'br' => 'integer|between:0,255',
            //Background green color in RGBA model. Default: 255 / Зеленая составляющая фонового цвета. Example: 32
            'bg' => 'integer|between:0,255',
            //Background blue color in RGBA model. Default: 255 / Синяя составляющая фонового цвета. Example: 32
            'bb' => 'integer|between:0,255',
            //Background transparency (Alpha) in RGBA model. Default: 0/ Прозрачность (Альфа-канал) фона. Example: 0
            'ba' => 'integer|between:0,255',
        ]);

        $validated['size'] = (array_key_exists('size', $validated)) ? $validated['size'] : 200;
        $validated['style'] = (array_key_exists('style', $validated)) ? $validated['style'] : 'square';
        $validated['eye'] = (array_key_exists('eye', $validated)) ? $validated['eye'] : 'square';
        $validated['r'] = (array_key_exists('r', $validated)) ? $validated['r'] : 0;
        $validated['g'] = (array_key_exists('g', $validated)) ? $validated['g'] : 0;
        $validated['b'] = (array_key_exists('b', $validated)) ? $validated['b'] : 0;
        $validated['a'] = (array_key_exists('a', $validated)) ? $validated['a'] : 100;
        $validated['br'] = (array_key_exists('br', $validated)) ? $validated['r'] : 255;
        $validated['bg'] = (array_key_exists('bg', $validated)) ? $validated['g'] : 255;
        $validated['bb'] = (array_key_exists('bb', $validated)) ? $validated['b'] : 255;
        $validated['ba'] = (array_key_exists('ba', $validated)) ? $validated['a'] : 0;

        //dd($validated['r'], $validated['g'], $validated['b'], $validated['a']);

        try {
            $user = OrgUser::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'message' => '404 not found',
                'errors' => 'Employee with id '.$id.' not found',
            ], 404);
        }

        $vCard = 'BEGIN:VCARD'.PHP_EOL.'VERSION:3.0'.PHP_EOL;
        $vCard .= 'N:'.$user->last_name.';'.$user->first_name.PHP_EOL;
        $vCard .= 'TEL;TYPE=work,VOICE:88001234567,'.$user->telephone.PHP_EOL;
        $vCard .= 'TEL;TYPE=cell,VOICE:+7'.$user->mobile.PHP_EOL;
        $vCard .= 'EMAIL:'.$user->email.PHP_EOL;
        $vCard .= 'TITLE:'.$user->title.PHP_EOL;
        $vCard .= 'ORG:'.$user->company.PHP_EOL;
        $vCard .= 'END:VCARD';

        $QRCode = QrCode::size($validated['size'])
            ->style($validated['style'])
            ->eye($validated['eye'])
            ->color($validated['r'], $validated['g'], $validated['b'], $validated['a'])
            ->backgroundColor($validated['br'], $validated['bg'], $validated['bb'], $validated['ba'])
            ->encoding('UTF-8')
            ->generate($vCard);

        return response($QRCode, 200)->header('Content-Type', 'image/svg+xml');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
