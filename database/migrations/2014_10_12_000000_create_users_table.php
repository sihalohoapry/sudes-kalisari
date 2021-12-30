<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('job')->nullable();
            $table->string('address')->nullable();
            $table->string('rt')->nullable();
            $table->string('religion')->nullable();
            $table->string('place_of_born')->nullable();
            $table->date('born')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('education')->nullable();
            $table->string('status')->nullable();
            $table->string('photo_ktp')->nullable();
            $table->string('roles')->default('USER');


            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
