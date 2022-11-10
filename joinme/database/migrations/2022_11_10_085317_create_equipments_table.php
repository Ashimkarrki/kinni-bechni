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
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('description');
            $table->string('faculty');
            $table->string('name');
            $table->float('price');
            $table->integer('stock');
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('subCategory');
            $table->string('fileName1');
            $table->string('fileName2')->nullable();
            $table->string('fileName3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
};
