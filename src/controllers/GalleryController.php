<?php namespace Vilbur\Gallery\Controllers;

use App\Http\Controllers\Controller;
use Vilbur\Gallery\Models\Gallery;

class GalleryController extends Controller {

    public function testView() {
		return \View::make('Gallery::view');
   }

	/**
	*/
	public function getAllGalleries()
	{
		return Gallery::all()->toArray();
	}
}