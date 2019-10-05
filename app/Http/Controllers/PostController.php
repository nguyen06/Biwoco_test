<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request){
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
        try {
            $Info = Storage::disk('public')->exists('output.json') ? json_decode(Storage::disk('public')->get('output.json')) : [];

            $data = $request->only(['name', 'email', 'message','subject']);

            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');

            array_push($Info,$data);

            Storage::disk('public')->put('output.json', json_encode($Info));

            return "success stored";

        } catch(Exception $e) {

            return ['error' => true, 'message' => $e->getMessage()];

        }

    }
}
