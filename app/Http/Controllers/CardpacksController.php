<?php

namespace App\Http\Controllers;

use Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cardpack;
use App\Card;

class CardpacksController extends Controller
{

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index() {
        if(!Request::user()) {
            return redirect('/');
        }

        $cardpacks = Auth::user() -> cardpacks() -> latest() -> get();
        return view('cardpacks.index', compact('cardpacks'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id) {
        $cardpack = Cardpack::find($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }

        return view('cardpacks.show', compact('cardpack'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function create() {
        if(!Request::user()) {
            return redirect('/');
        }

        return view('cardpacks.create');
    }

    /**
     * Stores a new cardpack in the database
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store() {

        $cardpack = new Cardpack(Request::all());
        Auth::user() -> cardpacks() -> save($cardpack);
        return redirect('cardpacks');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }
        return view('cardpacks.edit', compact('cardpack'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id) {
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }
        $cardpack -> update(Request::all());

        return redirect('cardpacks');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }
        $cardpack -> delete();

        return redirect('cardpacks');
    }

    public function import($id){

    }

    /**
     * @param $id
     */
    public function export($id){
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }

        return $cardpack;
    }
    
    public function learn($id){
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }

        if(isset($_REQUEST["finished"])) {
            $finished = explode(',', $_REQUEST["finished"]);
        } else {
            $finished = [0];
        }

        if(isset($_REQUEST['card_id'])) {
            array_push($finished, $_REQUEST['card_id']);
        }
        //Get random cards
        $card = Card::orderByRaw("RAND()")
                -> where('cardpack_id', $id)
                -> whereNotIn('id', $finished)
                -> limit(1)
                -> get();

        //Get Current Card number
        if(isset($_REQUEST["cardnumber"])) {
            $cardnumber = intval($_REQUEST["cardnumber"]) + 1;
        } else {
            $cardnumber = 1;
        }

        //Get complete number of cards
        $numberOfCards = count($cardpack -> cards);

        //Check if there are any card left
        if(count($card) == 0) {
            return redirect('cardpacks');
        }

        if(isset($_REQUEST["singleCard"]) && $_REQUEST["singleCard"] == true) {
            return view('cards._single', ['cardpack' => $cardpack, 'card' => $card[0], 'finished' => $finished, 'cardnumber' => $cardnumber, 'numberOfCards' => $numberOfCards]);

        } else {
            return view('cardpacks.learn', ['cardpack' => $cardpack, 'card' => $card[0], 'finished' => $finished, 'cardnumber' => $cardnumber, 'numberOfCards' => $numberOfCards]);

        }
    }
}
