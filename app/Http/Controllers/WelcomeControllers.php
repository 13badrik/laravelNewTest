<?php
/**
 * Created by PhpStorm.
 * User: Rustam
 * Date: 09.02.2016
 * Time: 15:07
 */

namespace App\Http\Controllers;


class WelcomeControllers extends Controller
{
    public function index(){
        return view('welcome');
    }

}