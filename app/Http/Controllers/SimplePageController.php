<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/5/17
 * Time: 1:33 PM
 * License: Public Domain
 */

namespace App\Http\Controllers;


class SimplePageController extends Controller{

    public function __construct(){

    }

    public function about(){
        return view('about');
    }

    public function terms(){
        return view('terms');
    }

    public function privacy(){

        return view('privacy');
    }
}