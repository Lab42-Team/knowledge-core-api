<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
