<?php

use Illuminate\Database\Seeder;
use Vilbur\Gallery\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		if(!Gallery::all()->first())
			factory(Gallery::class, 1)->create();
    }
}
