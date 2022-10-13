<?php

use App\Http\Controllers\Api\Org\OrgUserController;
use App\Http\Controllers\Api\Org\QRCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::prefix('org')->group(function () {
        Route::apiResource('users', OrgUserController::class)
            ->only(['index', 'show'])
            ->parameters(['users' => 'id']);
        Route::apiResource('qrcodes', QRCodeController::class)
            ->only(['show'])
            ->parameters(['qrcodes' => 'id']);
    });

    /**
     * Healthcheck
     *
     * Проверяет что контейнер с backend работоспособен. Если все нормально, то возвращает
     * status code 200 в ответе. Любой другой код говорит о неработоспособности сервиса.
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     *
     * @response 200 scenario="Service is healthy" {"status": "down", "services": {"database": "down"},
     * "employees": {"total": 1000, "per_page": 100}}
     * @responseField status The status of this API (`up` or `down`).
     * @responseField services Map of each downstream service and their status (`ping time` or `down`).
     * @responseField employees total - How many employees in DB, per_page - How much to give to the api per page
     */
    Route::get('/healthcheck', function () {
        function ping($host, $port, $timeout)
        {
            $tB = microtime(true);
            $fP = fsockopen($host, $port, $errno, $errstr, $timeout);
            if (! $fP) {
                return 'down';
            }
            $tA = microtime(true);

            return round((($tA - $tB) * 1000), 0).' ms';
        }

        return [
            'status' => 'up',
            'services' => [
                'database' => ping('api-postgres', 5432, 10),
            ],
            'employees' => [
                'total' => config('app.employees_total'),
                'per_page' => config('app.employees_per_page'),
            ],
        ];
    });
});
