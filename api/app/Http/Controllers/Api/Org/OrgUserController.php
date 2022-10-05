<?php

namespace App\Http\Controllers\Api\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Org\OrgUser;
use App\Http\Resources\Org\OrgUserCollection;

class OrgUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/org/users",
     *      operationId="getAllOrgUser",
     *      tags={"OrgUsers"},
     *      summary="Get all organization users / Возвращает всех сотрудников",
     *      description="Returns all organization users with pagination / Возвращает список сотрудников в JSON коллекции с метаданными c разбивкой по страницам",
     *      @OA\Parameter(
     *          name="page",
     *          in="query",
     *          description="The page number / Номер страницы",
     *          required=false,
     *          @OA\Schema(
     *              type="integer",
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation / Успех",
     *          @OA\JsonContent(
     *                 type="array",
     *                 @OA\Items(
     *                      ref="#/components/schemas/OrgUser"
     *                 ),
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="User not found / Сотрудник не найден",
     *          @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                     ref="#/components/schemas/OrgUser"
     *                 ),
     *             )
     *          )
     *       ),
     * )
     */
    public function index()
    {
        //
        return (new OrgUserCollection(OrgUser::paginate()));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
