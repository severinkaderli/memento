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

    /**
     * @param $id
     */
    public function export($id){
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }

        return $cardpack;
        return redirect('cardpacks');
    }

    public function learn($id){
        $cardpack = Cardpack::findOrFail($id);
        if($cardpack -> user -> id != Auth::id()) {
            return redirect('cardpacks');
        }

        $testarray = [10];
        //Get random cards
        $card = Card::orderByRaw("RAND()")
                -> where('cardpack_id', $id)
                -> whereNotIn('id', $testarray)
                -> get();

        return $card;
    }
}
