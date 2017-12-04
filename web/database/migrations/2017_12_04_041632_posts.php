<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Posts.
 *
 * @author  The scaffold-interface created at 2017-12-04 04:16:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('posts',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title');
        
        $table->integer('user_id');
        
        $table->longText('content');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
