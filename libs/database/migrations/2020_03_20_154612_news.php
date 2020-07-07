<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->text('news_title');
            $table->text('news_slugtitle');
            $table->longText('news_summary');
            $table->tinyInteger('news_feature');
            $table->date('news_date');
            $table->integer('news_views');
            $table->string('news_img');
            $table->longText('news_content');
            $table->integer('news_users')->unsigned();
            $table->foreign('news_users')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->integer('news_sub')->unsigned();
            $table->foreign('news_sub')
                  ->references('sub_id')
                  ->on('sub_categories')
                  ->onDelete('cascade');
            $table->integer('news_cate')->unsigned();
            $table->foreign('news_cate')
                  ->references('cate_id')
                  ->on('categories')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('news');
    }
}
