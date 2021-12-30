<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesslicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesslicenses', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('slug');
            $table->string('business_name');
            $table->string('business_type');
            $table->string('business_address');
            $table->string('business_activity');
            $table->string('photo_ktp');
            $table->string('status')->default('MENUNGGU'); // DITERIMA / DITOLAK

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
        Schema::dropIfExists('businesslicenses');
    }
}
