<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unique();
            $table->string('author');
            $table->string('title');
            $table->string('content');
            $table->string('photo');
            $table->string('size');
            $table->timestamps();
        });

//         Schema::table('posts', function (Blueprint $table) {
//             $table->unsignedBigInteger('user_id');

//             $table->foreign('user_id')->references('name')->on('users');
// });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
