<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request){
        //return($request->all());
       $this->validate($request,[
            'name' => 'required|min:2|max:35',
            'email' => 'required|email',
            'contact' => 'required',
            'subject' => 'required|min:5|max:500',
            'message' => 'required'
        ],[
            'name.required' => ' The name field is required.',
            'name.min' => ' The name must be at least 2 characters.',
            'name.max' => ' The name may not be greater than 35 characters.',
            'subject.required' => ' The subject field is required.',
            'subject.min' => ' The subject must be at least 5 characters.',
            'subject.max' => ' The subject may not be greater than 500 characters.',
        ]);

        // successfully validation, send it vao file co dinh dang JSON
        Storage::disk('public')->put('output.json', response()->json($request));

    }
}
