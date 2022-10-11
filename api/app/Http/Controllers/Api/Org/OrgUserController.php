<?php

namespace App\Http\Controllers\Api\Org;

use App\Http\Controllers\Controller;
use App\Http\Resources\Org\OrgUserCollection;
use App\Http\Resources\Org\OrgUserResource;
use App\Models\Org\OrgUser;
use Illuminate\Http\Request;

/**
 * @group Organization employee directory management
 *
 * APIs for managing organization employee directory /
 * API для управления справочником сотрудников организации
 * <aside class="success">Описание полей см. в эндпоинте org/users</aside>
 */
class OrgUserController extends Controller
{
    /**
     * Display a listing of the organization users.
     * Возвращает всех сотрудников организации массивом в объекте data, метаинформацией в объекте meta, ссылками в
     * объекте links.
     *
     * @unauthenticated
     *
     * @urlParam page integer Response page number / Номер страницы. Example: 1
     * @responseField id The uuid of the organization user / ID сотрудника в формате UUID.
     * @responseField name The uniq name of the organization user / Уникальное имя сотрудника.
     * @responseField hide If eq true then don't show the employee / Если true то не показывать сотрудника.
     * @responseField thumbnail If eq true show avatar, otherwise show default avatar / Если true то показать
     *          фото профиля, в противном случае показать дефолтное фото.
     * @responseField gender m - male, f - female, u - unknown / Пол: m - мужчина, f - женщина, u - неизвестен.
     * @responseField first_name Employee name / Имя сотрудника.
     * @responseField last_name Employee last name / Фамилия сотрудника.
     * @responseField middle_name Employee middle name / Отчество сотрудника.
     * @responseField birthday Date of birth in the format dd.mm / Дата рождения в формате dd.mm
     * @responseField email email / Адрес электронной почты.
     * @responseField cn LDAP common name / LDAP cn. В общем случай ФИО.
     * @responseField telephone Internal or additional phone number in nnnn format / Внутренний или
     *          дополнительный номер телефона в формате nnnn.
     * @responseField mobile Cell phone number in the format nnnnnnnnnn / Номер мобильного телефона
     *          в формате nnnnnnnnnn.
     * @responseField title Employee position / Должность сотрудника.
     * @responseField department Employee's department / Структурное подразделение сотрудника.
     * @responseField company Employee's company / Компания.
     * @responseField city Employee's city / Город.
     * @responseField created_at Creation date (UTC) / Дата создания записи (UTC).
     * @responseField updated_at Modification date (UTC) / Дата изменения записи (UTC).
     * @apiResourceCollection 200 App\Http\Resources\Org\OrgUserCollection
     * @apiResourceModel App\Models\Org\OrgUser paginate=2
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new OrgUserCollection(OrgUser::paginate(50));
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
     * Employee info by ID
     *
     * Return the Employee info by uuid. /
     * Вернет информацию о сотруднике по uuid.
     *
     * @unauthenticated
     *
     * @urlParam id string required employee uuid / uuid сотрудника . Example: 976b48f0-7fd3-4d03-82ce-395ddeafe5d5
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new OrgUserResource(OrgUser::findOrFail($id));
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
