<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicileLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicile_letters', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->nullable();
            $table->string('citizen')->nullable();
            $table->string('photo_kk')->nullable();
            $table->string('letter_interests')->nullable();
            $table->string('status_letter')->default('MENUNGGU');

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
        Schema::dropIfExists('domicile_letters');
    }
}
