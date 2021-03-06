<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InfoAPI extends Controller
{
    /** The page for the documentation of the api
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
public function info(){
    if (Auth::check()){
        return view('UsoDeApi',['user' => Auth::user()]);
    } else {
        return redirect()->intended('inicio');
    }
}
}
