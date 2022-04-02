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
        Schema::connection('pgsql_second')->create('person_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('skin_color');
            $table->text('address');
            $table->string('photo');
            $table->text('distinctive_mark');
            $table->text('crime');
            $table->string('facebook_url');
            $table->string('phone');
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
        Schema::dropIfExists('person_profiles');
    }
};
