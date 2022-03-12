<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function home()
    {
        //some settings
        $random_images = array(
            'http://icons.iconarchive.com/icons/zairaam/bumpy-planets/256/07-jupiter-icon.png',
            'http://www.princeton.edu/~willman/planetary_systems/Sol/Saturn/Saturn.gif',
            'http://www.solstation.com/stars/venus.gif',
            'https://mars.nasa.gov/images/flckrEclipse-full2.jpg'
        );

        $cover_image = 'http://www.androidguys.com/wp-content/uploads/2016/01/summer-sunset-293095.jpg';

        return view('home')->with(compact('random_images', 'cover_image'));
    }
}
