<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Org\OrgUser;

class OrgUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_users')->insert([
            'id' => '976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            'name' => 'Alexandrov.H.976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            'hide' => false,
            'thumbnail' => true,
            'gender' => 'm',
            'first_name' => 'Герман',
            'last_name' => 'Александров',
            'middle_name' => 'Евгеньевич',
            'birthday' => '25.01',
            'email' => 'hermansochi@ya.ru',
            'cn' => 'Александров Герман Евгеньевич',
            'telephone' => '6677',
            'mobile' => '9899001010',
            'description' => 'Секретное поле',
            'title' => 'Web developer',
            'department' => 'Dream team',
            'company' => 'Looking for a job',
            'city' => 'Сочи',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
        OrgUser::factory()->count(500)->create();
    }
}
