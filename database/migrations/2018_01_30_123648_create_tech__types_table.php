<?php

use Illuminate\{Database\Migrations\Migration,Database\Schema\Blueprint,Support\Facades\Schema};

class CreateTechTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('store')->create('tech__types', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('tech__types');
    }
}
