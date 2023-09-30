<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        //imagine we loaded data from the database
        $ourName = 'Charles';

        return view('homepage', ['name' => $ourName, 'catname' => 'Ming Ming']);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
