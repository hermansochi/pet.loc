<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthcheckController extends Controller
{
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

    private function ping($host, $port, $timeout)
    {
        $tB = microtime(true);
        $fP = fsockopen($host, $port, $errno, $errstr, $timeout);
        if (!$fP) {
            return 'down';
        }
        $tA = microtime(true);
        
        return round((($tA - $tB) * 1000), 0) . ' ms';
    }

    public function Healthcheck()
    {
        return [
            'status' => 'up',
            'services' => [
                'database' => $this->ping('api-postgres', 5432, 10),
                'storage' => $this->ping('mini', 9000, 10),
            ],
            'employees' => [
                'total' => config('app.employees_total'),
                'per_page' => config('app.employees_per_page'),
            ],
        ];
    }
}
