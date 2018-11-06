<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class HeloController extends Controller
{
    public function getIndex($me)
    {
        
        return view('helo', ['message' => $me]);
    }

}