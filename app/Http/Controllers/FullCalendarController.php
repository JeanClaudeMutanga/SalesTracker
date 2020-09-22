<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;


class FullCalendarController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('fullcalendar')->with('events',$events);
      
    }

    public function create(Request $request)
    {  
       
    }
     
 
    public function update(Request $request)
    {   
        
    } 
 
 
    public function destroy(Request $request)
    {
        
    } 
}
