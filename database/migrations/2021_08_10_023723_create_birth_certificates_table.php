<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth_certificates', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('day_of_born')->nullable();
            $table->string('place_of_born')->nullable();
            $table->date('born')->nullable();
            $table->time('time_of_born')->nullable();
            $table->string('name_father')->nullable();
            $table->string('name_mother')->nullable();
            $table->string('son_of')->nullable();
            $table->string('name_son')->nullable();
            $table->string('letter_interests')->nullable();
            $table->string('photo_ktp_father')->nullable();
            $table->string('photo_ktp_mother')->nullable();
            $table->string('status')->default('MENUNGGU');

            $table->softDeletes();
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
        Schema::dropIfExists('birth_certificates');
    }
}
