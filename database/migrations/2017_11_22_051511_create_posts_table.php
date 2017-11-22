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
            $table->string('title');
            $table->text('content');
<<<<<<< HEAD:database/migrations/2017_11_22_054158_create_posts_table.php
            $table->text('name');
=======
            $table->increments('id');
>>>>>>> parent of e50297c... 新增兩個資料表:database/migrations/2017_11_22_051511_create_posts_table.php
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
        $table ->string('title') ->change(); 
        $table ->dropColumn('is_feature') ;
        Schema::dropIfExists('posts');
    }
}
