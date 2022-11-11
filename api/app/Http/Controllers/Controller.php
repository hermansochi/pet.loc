<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Api Documentation",
 *      description="REST API for pet projects / REST API для тренировочных проектов",
 *      @OA\Contact(
 *          email="hermansochi@ya.ru"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="API Server"
 * )
 *
 * @OA\Tag(
 *     name="OrgUser",
 *     description="API Endpoints of organization users / Эндпоинты для получения информации о сотрудниках"
 * )
 *
 * @OA\Schema(
 *     title="Links",
 *     description="Links / Ссылки",
 *     @OA\Xml(name="Links"),
 *     @OA\Property(
 *             property="Links",
 *             type="object",
 *             example={
 *                "first": "http://127.0.0.1:8000/api/users?page=1",
 *                "last": "http://127.0.0.1:8000/api/users?page=1",
 *                "prev": null,
 *                "next": null,
 *             },
 *     ),
 * )
 **/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
