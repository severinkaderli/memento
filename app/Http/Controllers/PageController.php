<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller {


    public function home(Request $request) {
        if(!$request->user()) {
            return redirect('register');
        } else {
            return redirect('cardpacks');
        }
    }

    public function about() {

        return view('pages.about');
    }
}
