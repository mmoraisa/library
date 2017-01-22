<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
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
            $table->string('name_PT')->unique();
            $table->string('name_US')->unique();
            $table->string('description_PT');
            $table->string('description_US');
            $table->string('cover_url_PT');
            $table->string('cover_url_US');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id','book_category_fk')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedInteger('author_id');
            $table->foreign('author_id','book_author_fk')->references('id')->on('authors')->onDelete('cascade');

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
        Schema::dropIfExists('books');
    }
}
