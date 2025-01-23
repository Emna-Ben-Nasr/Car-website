<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //home page
    public function home()
    {
        // return View::make("home.home", [
        //     "name" => "emna",
        //     "surname" => "ben nasr"

        // ]);
        return view("home.home");
        //->with("name", "emna")
        //->with("surname", "emnarfg");
    }


}
