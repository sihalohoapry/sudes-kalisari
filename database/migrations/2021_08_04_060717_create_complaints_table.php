<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->date('date')->nullable();
            $table->string('photo')->nullable();    
            $table->string('letter_status');    

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
        Schema::dropIfExists('complaints');
    }
}
