<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\redirect;
use App\Http\Controllers\view;

class GymController extends Controller
{   
    //for showing one gym
    public function show($Gym_id){
        $gym = Gym::where('Gym_id', $Gym_id)->first();
        return view('gymIndividual', compact('gym'));
    }

    public function list(){
        return view ('/gymAll', array('gyms'=>Gym::all()) );
    }



    public function create(){
    return view ('addGym');
    }

    public function store(Request $req){
        $name= $req-> name; 
        $description= $req-> description;
        $location= $req-> location;
        $opening_hours= $req-> opening_hours;
        $contact= $req-> contact;

        $gym= new \App\Models\Gym;
        $gym-> name = $name;
        $gym-> description =$description;
        $gym->location =$location;
        $gym->opening_hours = $opening_hours;
        $gym-> contact = $contact;

        $gym-> save();

        return ('Gym has been added successfully'); //redirect to somewhere


    }

}
