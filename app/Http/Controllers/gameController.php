<?php

namespace App\Http\Controllers;
use App\Models\Character;

use Illuminate\Http\Request;

class gameController extends Controller
{
    //
    public function showTop(){
        $characters = Character::all()->toArray();
        return view('game.top')->with('characters', $characters);
    }

    /**
     * アンパンマンゲーム
     * 
     * @return view
     */
    public function anpanmanGame() {
        $characters = \DB::table('characters')->inRandomOrder()->take(7)->get()->toArray();
        $characters1 = $characters;
        $characters2 = $characters;
        $characters = array_merge($characters1,$characters2);
        // shuffle($characters1);
        // shuffle($characters2);
        shuffle($characters);
        // return view('game.anpanman')->with([
        //     'characters1' => $characters1,
        //     'characters2' => $characters2
        // ]);

        return view('game.anpanman')->with('characters', $characters);
    }
}
