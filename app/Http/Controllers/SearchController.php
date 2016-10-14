<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller {
	public function search(Request $request) {
		$error = ['error' => 'Hasil tidak ditemukan'];
		if ($request->has('q')) {
			$post = Product::search($request->get('q'))->get();

			return $post->count() ? $post : $error;
		}
		return $error;
	}
}
