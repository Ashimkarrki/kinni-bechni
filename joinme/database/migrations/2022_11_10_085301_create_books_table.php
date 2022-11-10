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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authorName');
            $table->string('category');
            $table->string('description');
            $table->string('edition'); 
            $table->string('faculty');
            $table->string('name');
            $table->float('price');
            $table->date('created_at');
            $table->date('updated_at');
            $table->integer('stock');
            $table->string('subjectName');
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
        Schema::dropIfExists('books');
    }
};
