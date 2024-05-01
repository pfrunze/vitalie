<?php

namespace App\Http\Controllers;


class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session(['locale' => $locale]);

        return view('welcome');
    }
}
