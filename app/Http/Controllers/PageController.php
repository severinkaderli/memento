<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller {


    public function home() {
        if(Request::user()) {
            return redirect('cardpacks');
        }

        return view('pages.home');
    }

    public function about() {

        return view('pages.about');
    }
}
