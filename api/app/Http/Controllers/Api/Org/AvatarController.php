<?php

namespace App\Http\Controllers\Api\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Org\OrgUser;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


/**
 * @group Organization employee directory management
 * 
 */

class AvatarController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * 
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
     * Employee avatar
     * 
     * Return employee avatar jpg image.
     * Вернет фото сотрудника в формате jpg.
     * 
     * @unauthenticated
     * 
     * @urlParam id string required employee uuid / uuid сотрудника . Example: 976b48f0-7fd3-4d03-82ce-395ddeafe5d5
     * @response 200 scenario="Operation successful" JPG IMAGE
     * @response 422 scenario="Validation error" {"message": "id validation error", "errors": "976b48f0-7fd3-4d03-82ce-395dde111afe5d4 not valid uuid"}
     * @response 404 scenario="Employee not found" {"message": "404 not found", "errors": "Employee with id  976b48f0-7fd3-4d03-82ce-395ddeafe5d4 not found"}
     * @response 404 scenario="Avatar not found" {"message": "404 not found", "errors": "Avatar not found"}
     * 
     * @param  \Illuminate\Http\Request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if (!Str::isUuid($id)) {
            return response([
                'message' => 'id validation error',
                'errors' => $id . ' not valid uuid'
            ], 422);

        }
        
        try {
            $user = OrgUser::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'message' => '404 not found',
                'errors' => 'Employee with id ' . $id . ' not found'
            ], 404);
        }
 
        if (!$user->thumbnail or (!Storage::disk('avatars')->exists($user->thumb_name))) {
            return response([
                'message' => '404 not found',
                'errors' => 'Avatar not found'
            ], 404);
        }

        $avatar= Storage::disk('avatars')->get($user->thumb_name);
        return response($avatar, 200)->header('Content-Type', 'image/jpeg');
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
