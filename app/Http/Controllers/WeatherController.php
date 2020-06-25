<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Weather;

class WeatherController extends Controller
{
    
    /**
     * Display the weather (on the main page)
     *
     * @return \Illuminate\Http\Response
     */
    public function display(){
        $weather = Weather::orderBy('created_at','desc')->first();

        return  view('home')
        ->with('weather',$weather);
    }  


}
