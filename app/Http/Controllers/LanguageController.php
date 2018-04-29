<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class LanguageController extends Controller
{
    function english()
    {
        session(['my_locale' => 'en']);
        return redirect()->back();
    }

    function french()
    {
        session(['my_locale' => 'fr']);
        return redirect()->back();
    }
}
