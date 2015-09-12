<?php

namespace App\Http\Controllers;

use Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cardpack;
use App\Card;

class CardsController extends Controller
{


    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function store(\Illuminate\Http\Request $request) {

        $this->validate($request, [
            'frontside' => 'required',
            'backside' => 'required'
        ]);

        $card = new Card(Request::all());
        $cardpack = Cardpack::findOrFail($_REQUEST["cardpackid"]);
        $cardpack -> cards() -> save($card);
        return view('cards._table', compact('cardpack'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function destroy() {

        $idArray = $_REQUEST["ids"];
        Card::destroy($idArray);

        $cardpack = Cardpack::findOrFail($_REQUEST["cardpackid"]);
        return view('cards._table', compact('cardpack'));
    }
}
