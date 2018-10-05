<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('gallery', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug'	)->nullable();
			$table->string('title'	)->nullable();
			$table->string('summary'	)->nullable();
			$table->text('description'	)->nullable();
			$table->string('image', 512	)->nullable();
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
        Schema::dropIfExists('gallery');
    }
}
