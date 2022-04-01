<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('pgsql')->table('personal_profiles')->insert([
           'pic'=>'https://www.w3schools.com/howto/img_avatar.png',
           'nrc_name'=>'NRC',
           'nick_name'=>'NRC',
           'age'=>'20',
           'height_feet'=>'5',
           'height_inches'=>'5',
           'address'=>'address',
           'country_code'=>'+959',
           'phone_number'=>'123456789',
           'about_report'=>'about_report',
           'consent_to_responsibility'=>'true',
           'report_state'=>'report_state',
           'last_updated'=>'2020-01-01 00:00:00',
           'moderated_by_id'=>'moderated_by_id',
           'report_division'=>'report_division',
           'reported_by_id'=>'reported_by_id',
           'skin_color'=>'brown',
           'physical_appearance'=>'haha',
           'facebook_username'=>'haha',
           'telegram_username'=>'hello'
        ]);
    }
}
