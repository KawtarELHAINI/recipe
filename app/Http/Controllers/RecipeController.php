<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{ 
  public function add(){
    return view('add');
  }
    public function store(Request $request){
       $incomingFields = $request->validate([
        'name' => 'required',
        'description'=> 'required',
        'user_id' => 'nullable',
       ]);
       
     $incomingFields['name'] = strip_tags($incomingFields['name']);
     $incomingFields['description'] = strip_tags($incomingFields['description']);
     Recipe::create($incomingFields);
     return redirect('/ ');
    }
}
