<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Services',
            'Services' =>['1','2','3']

        );
        
    }

}  
