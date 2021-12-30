<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village_news', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->integer('users_id')->nullable();
            $table->longText('news_content')->nullable();
            $table->string('slug')->nullable();
            $table->date('date')->nullable();
            $table->string('photo')->nullable();

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
        Schema::dropIfExists('village_news');
    }
}
