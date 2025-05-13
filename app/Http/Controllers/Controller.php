<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function about()
    {
        return view('about.vision_mission');
    }
}
