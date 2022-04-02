<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s3_dog_reports', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->string('nrc_name');
            $table->string('nick_name');
            $table->integer('age');
            $table->integer('height_feet');
            $table->integer('height_inches');
            $table->text('address');
            $table->integer('country_code');
            $table->integer('phone_number');
            $table->text('about_report');
            $table->boolean('consent_to_responsibility');
            $table->string('report_state');
            $table->date('last_updated');
            $table->string('moderated_by_id');
            $table->string('report_division');
            $table->string('reported_by_id');
            $table->string('skin_color');
            $table->text('physical_appearance');
            $table->string('facebook_username');
            $table->string('telegram_username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s3_dog_reports');
    }
};
