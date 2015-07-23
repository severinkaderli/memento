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
     * @param $id
     * @return bool
     */
    public function store()
    {
       // $cardpack = Cardpack::findOrFail($id);
        $card = new Card(Request::all());
        $cardpack = Cardpack::findOrFail($_REQUEST["cardpack_id"]);
        $cardpack -> cards() -> save($card);
        return redirect('cardpacks/' . $_REQUEST["cardpack_id"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $card = Card::findOrFail($id);

        //Check if card belongs to current user
        if($card->cardpack->user->id == Auth::id()) {
            $card -> delete();
        }
    }
}
