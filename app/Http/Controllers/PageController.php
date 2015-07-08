<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function home(Request $request) {
        if(!$request->user()) {
            return redirect('register');
        }

        return view('pages.home');
    }

    public function about() {
        $data = [];
        $data["first"] = "Severin";
        $data["last"] = "Kaderli";
        $data["names"] = array("severin", "kaderli", "test");
        return view('pages.about', $data);
    }
}
