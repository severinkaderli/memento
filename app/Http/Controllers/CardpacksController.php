<?php

namespace App\Http\Controllers;

use Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cardpack;

class CardpacksController extends Controller
{

    public function index() {
        $cardpacks = Auth::user() -> cardpacks() -> latest() -> get();
        return view('cardpacks.index', compact('cardpacks'));
    }

    public function show($id) {
        $cardpack = Cardpack::find($id);
        return $cardpack;
    }

    public function create() {

        return view('cardpacks.create');
    }

    /**
     * Creates a new cardpack
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store() {

        $cardpack = new Cardpack(Request::all());
        Auth::user() -> cardpacks() -> save($cardpack);
        return redirect('cardpacks');
    }
}
