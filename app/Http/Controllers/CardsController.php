<?php

namespace App\Http\Controllers;

use Request;


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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
