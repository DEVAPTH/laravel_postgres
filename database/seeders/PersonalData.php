<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonalData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('pgsql_second')->table('personal_details')->insert([
            'pic'=>'https://www.w3schools.com/howto/img_avatar.png',
            'nrc_name'=>'Sai Thi Ha',
            'nick_name'=>'Wa Toke',
            'age'=>'19',
            'height_feet'=>'6',
            'height_inches'=>'6',
            'address'=>'Yangon',
            'country_code'=>'1101',
            'phone_number'=>'0977777894',
            'about_report'=>'about_report',
            'consent_to_responsibility'=>'true',
            'last_updated'=>'2020-03-02 00:00:00',
            'skin_color'=>'brown',
            'physical_appearance'=>'So Big body',
            'facebook_username'=>'Sai Thi Ha',
            'telegram_username'=>'Sai Thi Ha'
         ]);
    }
}
