<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    
  
    public function databaseConncection(){

           $database= DB::Connection()->getDatabaseName();
           return $database ;
    }

    


}
