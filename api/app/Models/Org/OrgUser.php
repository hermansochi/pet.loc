<?php

namespace App\Models\Org;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

/**
 * @OA\Schema(
 *     title="OrgUser",
 *     description="Organization user / Сотрудник организации",
 *     @OA\Xml (name="OrgUser"),
 *     @OA\Property(
 *             property="id",
 *             description="Uniq organization user ID / Уникальный ID сотрудника в формате UUID",
 *             type="uuid",
 *             example="976b48f0-7fd3-4d03-82ce-395ddeafe5d6"
 *     ),
 *     @OA\Property(
 *             property="name",
 *             type="string",
 *             description="Uniq organization user name / Уникальное имя сотрудника",
 *             maxLength=255,
 *             example="Sorokina.F.cb64ffcc-7336-3050-80f6-a6d51abfb053"
 *     ),
 *     @OA\Property(
 *             property="hide",
 *             type="boolean",
 *             description="If eq true - don't show user / Если true - то не показывать сотрудника",
 *             example=true
 *     ),
 *     @OA\Property(
 *             property="thumbnail",
 *             type="boolean",
 *             description="If eq false - show default user avatar / Если false - то сотрудник без аватара, показать дефолтный",
 *             example=false
 *     ),
 *     @OA\Property(
 *             property="first_name",
 *             type="string",
 *             maxLength=50,
 *             description="User first name / Имя сотрудника",
 *             example="Иван"
 *     ),
 *     @OA\Property(
 *             property="last_name",
 *             type="string",
 *             maxLength=50,
 *             description="User last name / Фамилия сотрудника",
 *             example="Иванов"
 *     ),
 *     @OA\Property(
 *             property="middle_name",
 *             type="string",
 *             maxLength=50,
 *             description="User middle name / Отчество сотрудника",
 *             example="Иванович"
 *     ),
 *     @OA\Property(
 *             property="birthday",
 *             type="string",
 *             maxLength=10,
 *             description="Birthday without year dd.mm / День рождения сотрудника без года dd.mm",
 *             example="25.01"
 *     ),
 *     @OA\Property(
 *             property="email",
 *             type="email",
 *             maxLength=10,
 *             description="user email / Электронная почта сотрудника",
 *             example="my.email@example.ru"
 *     ),
 *     @OA\Property(
 *             property="cn",
 *             type="string",
 *             maxLength=255,
 *             description="Common name (LDAP attrib) / В общем случае ФИО сотрудника",
 *             example="Иванов Иван Иванович"
 *     ),
 *     @OA\Property(
 *             property="telephone",
 *             type="string",
 *             maxLength=20,
 *             description="Internal phone number / Внутренний или добавочный телефонный номер",
 *             example="7777"
 *     ),
 *     @OA\Property(
 *             property="mobile",
 *             type="string",
 *             maxLength=20,
 *             description="Cellular phone number. 10 digits. / Мобильный телефонный номер. 10 цифр без префиксов 8 или +7",
 *             example="9899001010"
 *     ),
 *     @OA\Property(
 *             property="title",
 *             type="string",
 *             maxLength=255,
 *             description="Position / Должность",
 *             example="Переворачиватель пингвинов"
 *     ),
 *     @OA\Property(
 *             property="department",
 *             type="string",
 *             maxLength=255,
 *             description="Department / Отдел",
 *             example="Бухгалтерия"
 *     ),
 *     @OA\Property(
 *             property="company",
 *             type="string",
 *             maxLength=255,
 *             description="Company / Организация",
 *             example="ООО Рога и копыта"
 *     ),
 *     @OA\Property(
 *             property="created_at",
 *             type="string",
 *             format="date-time",
 *             description="Initial creation timestamp / Таймштамп создания записи",
 *             example="2022-10-04T13:10:25.000000Z"
 *     ),
 *     @OA\Property(
 *             property="updated_at",
 *             type="string",
 *             format="date-time",
 *             description="ULast update timestamp / Таймштамп изменения записи",
 *             example="2022-10-04T13:10:25.000000Z"
 *     )
 * )
 */
class OrgUser extends Model
{
    use HasFactory, Uuids;

    protected $table = 'org_users';

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
