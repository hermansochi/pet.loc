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
     *      path="/orguser",
     *      operationId="getOrgUserList",
     *      tags={"OrgUser"},
     *      summary="Get list of organization users / Возвращает список сотрудников",
     *      description="Returns list of organization users / Возвращает список сотрудников в JSON коллекции с метаданными",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation / Успех",
     *          @OA\JsonContent(
     *             oneOf={
     *                 @OA\Schema(ref="#/components/schemas/OrgUser"),
     *             },
     *         )
     *      ),
     *     )
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
