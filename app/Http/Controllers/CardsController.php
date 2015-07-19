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
    public function store($id)
    {
       // $cardpack = Cardpack::findOrFail($id);
        $card = new Card(Request::all());
        $cardpack = Cardpack::findOrFail($id);
        $cardpack -> cards() -> save($card);
        return redirect('cardpacks/' . $id);
    }

    public function delete($id)
    {
        $toDelete = explode(',', $_REQUEST['toDelete']);
        for($i=0; $i<count($toDelete); $i++) {
            $card = Card::find($toDelete[$i]);

            //Check if card belongs to current user
            if($card->cardpack->user->id == Auth::id()) {
                $card -> delete();
            }

        }

        return redirect('cardpacks/' . $id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
