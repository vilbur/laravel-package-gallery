<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryKeywordPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_keyword_pivot', function (Blueprint $table) {
            $table->integer('gallery_id')->unsigned()->index();
            $table->foreign('gallery_id')->references('id')->on('gallery')->onDelete('cascade');
            $table->integer('gallery_keyword_id')->unsigned()->index();
            $table->foreign('gallery_keyword_id')->references('id')->on('gallery_keywords')->onDelete('cascade');
            $table->primary(['gallery_id', 'gallery_keyword_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gallery_keyword_pivot');
    }
}
