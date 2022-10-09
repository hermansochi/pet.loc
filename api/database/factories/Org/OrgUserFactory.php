<?php

namespace Database\Factories\Org;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrgUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(['male', 'female']);
        $thumb = false;
        $thumbName = null;

        if (rand(1,100) < 97) {
            if ($gender === 'male') {
                $mansFileNames = unserialize(Storage::disk('avatars')->get('mans.name'));
                //dd($mansFileNames);
                $thumbName = $mansFileNames[array_rand($mansFileNames)];
            } else {
                $womansFileNames = unserialize(Storage::disk('avatars')->get('womans.name'));
                //dd($womansFileNames);
                $thumbName = $womansFileNames[array_rand($womansFileNames)];
            }
            $thumb = true;
        }

        $fname = $this->faker->firstName($gender);
        $lname = $this->faker->lastName($gender);
        $mname = $this->faker->middleName($gender);

        $name = self::Translit($lname);
        $name .= '.';
        $name .= self::Translit(mb_substr($fname, 0, 1));

        $month = $this->faker->randomElement([
            '01' , '02', '03', '04' , '05', '06', '07' , '08', '09', '10' , '11', '12'
        ]);

        $days = date('t', mktime(0, 0, 0, (int)$month, 1, 2022));

        $day = (string) $this->faker->numberBetween(1, (int) $days);

        if (mb_strlen($day) === 1) {
            $day = '0' . $day;
        }
        
        $title = $this->faker->randomElement([
            'Клоун',
            'Переворачиватель пингвинов',
            'Комик, юморист',
            'Менеджер по клинингу',
            'Президент',
            'Промоутер',
            'Депутат, политик',
            'Мерчендайзер',
            'Калькулятор',
            'Коксоразгрузчик',
            'Младший помощник веб-программиста',
            'Капельмейстер',
            'Лакировщик глобусов',
            'Вздымщик',
            'Люковой',
            'Круговоротчик',
            'Машинист холодильника',
            'Монтажник позитива',
            'Монтажник негатива',
            'Мойщик мокрых отходов',
            'Навальщик основ',
            'Намазчик спичечных коробок',
            'Наполнитель приборов жидкостями',
            'Сомелье',
            'Обкатчик клюквы',
            'Оператор башенного крана',
            'Оператор станка',
            'Бухгалтер',
            'Главный бухгалтер',
            'Пастух',
            'Архитектор',
            'Главный инженер проекта',
            'Вытаскиватель скрепок',
            'Агроном аэродрома',
            'Артист ритуальных услуг',
            'Бегунщик смесительных бегунков',
            'Верховой доменной печи',
            'Гибщик труб',
            'Главный коньячный мастер',
            'Давильщик',
            'Демонстратор пластических поз',
            'Долбежник',
            'Долбежник',
            'Завивальщик спиралей',
            'Заготовщик черни',
            'Зубополировщик',
            'Изготовитель зубочисток',
            'Инженер-лесопатолог',
            'Испытатель бумажных мешков',
            'Моторист механической лопаты',
            'Оператор главного пульта управления',
            'Порционист лао-ча',
            'Раздирщик пакетов',
            'Разрисовщик обоев',
            'Сливщик-разливщик',
            'Сушильщик дощечек',
            'Электрослесарь подземный'
        ]);

        $department = $this->faker->randomElement([
            'Администрация',
            'Служба персонала',
            'Юридическая служба',
            'Инженерная служба',
            'Административно-хозяйственная служба',
            'Служба безопасности',
            'Внутренний аудит',
            'Служба информационных технологий',
            'Служба слаботочных систем',
            'Управление бухгалтерского учета',
            'Финансовая служба',
            'Отдел продаж',
            'Отдел закупок',
            'Отдел маркетинга',
            'Отдел по связям с общественностью',
            'Планово-экономический отдел',
            'Отдел продаж',
            'Коммерческий отдел',
            'Отдел налогового учета',

        ]);

        $company = $this->faker->randomElement([
            'ООО "РогаРадио"',
            'ООО "Рога и копыта"',
            'ООО "БумПрофи"',
            'ООО "Бумалопа трейдинг"',
            'ООО "Вилюна экспресс"',
            'ООО "Нарита и сын"',
            'ООО "Рогофей"',
            'ООО "Рогатрон"',
        ]);

        $city = $this->faker->randomElement([
            'Сочи',
            'Краснодар',
            'Москва',
            'Владивосток',
        ]);

        return [
            'name' => $name . '.' . $this->faker->uuid(),
            'hide' => false,
            'thumbnail' => $thumb,
            'thumb_name' => $thumbName,
            'gender' => ($gender === 'male') ? 'm' : 'f',
            'first_name' => $fname,
            'last_name' => $lname,
            'middle_name' => $mname,
            'birthday' => $day . '.' . $month,
            'email' => $name . '@example.ru',
            'cn' => $lname . ' ' . $fname . ' ' . $mname,
            'telephone'=> $this->faker->numerify('####'),
            'mobile' => '989' . $this->faker->numerify('#######'),
            //$table->string('description')->nullable();
            'title' => $title,
            'department' => $department,
            'company' => $company,
            'city' => $city
        ];
    }

    private static function Translit($string) 
    { 
      $table = array( 
                  'А' => 'A', 
                  'Б' => 'B', 
                  'В' => 'V', 
                  'Г' => 'G', 
                  'Д' => 'D', 
                  'Е' => 'E', 
                  'Ё' => 'YO', 
                  'Ж' => 'ZH', 
                  'З' => 'Z', 
                  'И' => 'I', 
                  'Й' => 'J', 
                  'К' => 'K', 
                  'Л' => 'L', 
                  'М' => 'M', 
                  'Н' => 'N', 
                  'О' => 'O', 
                  'П' => 'P', 
                  'Р' => 'R', 
                  'С' => 'S', 
                  'Т' => 'T', 
                  'У' => 'U', 
                  'Ф' => 'F', 
                  'Х' => 'H', 
                  'Ц' => 'C', 
                  'Ч' => 'CH', 
                  'Ш' => 'SH', 
                  'Щ' => 'CSH', 
                  'Ь' => '', 
                  'Ы' => 'Y', 
                  'Ъ' => '', 
                  'Э' => 'E', 
                  'Ю' => 'YU', 
                  'Я' => 'YA', 
                  'а' => 'a', 
                  'б' => 'b', 
                  'в' => 'v', 
                  'г' => 'g', 
                  'д' => 'd', 
                  'е' => 'e', 
                  'ё' => 'yo', 
                  'ж' => 'zh', 
                  'з' => 'z', 
                  'и' => 'i', 
                  'й' => 'j', 
                  'к' => 'k', 
                  'л' => 'l', 
                  'м' => 'm', 
                  'н' => 'n', 
                  'о' => 'o', 
                  'п' => 'p', 
                  'р' => 'r', 
                  'с' => 's', 
                  'т' => 't', 
                  'у' => 'u', 
                  'ф' => 'f', 
                  'х' => 'h', 
                  'ц' => 'c', 
                  'ч' => 'ch', 
                  'ш' => 'sh', 
                  'щ' => 'csh', 
                  'ь' => '', 
                  'ы' => 'y', 
                  'ъ' => '', 
                  'э' => 'e', 
                  'ю' => 'yu', 
                  'я' => 'ya',
                  ' ' => '_' 
      ); 
   
      $output = str_replace( 
          array_keys($table), 
          array_values($table),$string 
      ); 
   
      return $output; 
    }
}
