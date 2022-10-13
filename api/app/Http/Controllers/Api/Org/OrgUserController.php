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
     * Make new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('id.is.uuid')->only('show');
    }

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
     * @return \App\Http\Resources\Org\OrgUserCollection
     */
    public function index()
    {
        //
        return new OrgUserCollection(OrgUser::paginate(config('app.employees_per_page')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request): void
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
     * @response 200 scenario="Operation successful" {"data":
     *      { "id": "976b48f0-7fd3-4d03-82ce-395ddeafe5d5",
     *      "name": "Alexandrov.H.976b48f0-7fd3-4d03-82ce-395ddeafe5d5",
     *      "hide": false,
     *      "thumbnail": true,
     *      "gender": "m",
     *      "first_name": "Герман",
     *      "last_name": "Александров",
     *      "middle_name": "Евгеньевич",
     *      "birthday": "25.01",
     *      "email": "hermansochi@ya.ru",
     *      "cn": "Александров Герман Евгеньевич",
     *      "telephone": "6677",
     *      "mobile": "9899001010",
     *      "title": "Web developer",
     *      "department": "Dream team",
     *      "company": "Looking for a job",
     *      "city": "Сочи",
     *      "created_at": "2022-10-11T12:19:10.000000Z",
     *      "updated_at": "2022-10-11T12:19:10.000000Z" }
     * }
     *
     * @response 422 scenario="Validation error" { "message": "id validation error", "errors": "111 not valid uuid" }
     *
     * @response 404 scenario="Employee not found" {"message": "404 not found", "errors": "Employee with id  976b48f0-7fd3-4d03-82ce-395ddeafe5d4 not found"}
     *
     * @param  string  $id
     * @return \App\Http\Resources\Org\OrgUserResource
     */
    public function show(string $id)
    {
        try {
            $user = OrgUser::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'message' => '404 not found',
                'errors' => 'Employee with id '.$id.' not found',
            ], 404);
        }

        return new OrgUserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id): void
    {
        //
    }
}
