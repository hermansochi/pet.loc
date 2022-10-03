<?php

namespace Database\Factories\Org;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $fname = $this->faker->firstName($gender);
        $lname = $this->faker->lastName($gender);
        $mname = $this->faker->middleName($gender);

        $name = self::Translit($lname);
        $name .= '.';
        $name .= self::Translit(mb_substr($fname, 0, 1));

        $company = $this->faker->randomElement([
            'ООО "РогаРадио"',
            'ООО "Рога и копыта"',
            'ООО "БумПрофи"',
            'ООО "Вилюна экспресс"',
            'ООО "Нарита и сын"',
            'ООО "Рогофей"',
            'ООО "Рогатрон"',
        ]);

        return [
            'name' => $name,
            'hide' => false,
            'thumbnail' => false,
            'firstname' => $fname,
            'lastname' => $lname,
            'middlename' => $mname,
            //$table->string('birthday', 10)->nullable();
            'email' => $name . '@example.ru',
            'cn' => $lname . ' ' . $fname . ' ' . $mname,
            'telephone'=> $this->faker->numerify('####'),
            'mobile' => '989' . $this->faker->numerify('#######'),
            //$table->string('description')->nullable();
            //$table->string('title')->nullable();
            //$table->string('department')->nullable();
            'company' => $company
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
