<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriageCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage_certificates', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('status_marry');
            $table->string('name_marry')->nullable();
            $table->string('place_of_born_marry')->nullable();
            $table->date('born_marry')->nullable();
            $table->string('gander_marry')->nullable();
            $table->string('job_marry')->nullable();
            $table->string('religion_marry')->nullable() ;  
            $table->string('address_marry')->nullable();  
            $table->string('nik_marry')->nullable();
            $table->string('photo_ktp')->nullable();
            $table->string('photo_ktp_marry')->nullable();
            $table->string('status_pengajuan')->default('Menunggu');

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
        Schema::dropIfExists('marriage_certificates');
    }
}
