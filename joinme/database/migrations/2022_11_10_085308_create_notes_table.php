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
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('description');
            $table->string('faculty');
            $table->string('name');
            $table->float('price');
            $table->date('created_at');
            $table->integer('stock');
            $table->date('updated_at');
            $table->string('fileName1');
            $table->string('fileName2')->nullable('true');
            $table->string('fileName3')->nullable('true');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
