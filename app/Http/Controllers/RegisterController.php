<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function data(Request $request){
        $formData = new Register();

        $formData->name = $request->input('name');
        $formData->organazation = $request->input('organazation');
        $formData->country = $request->input('country');
        $formData->title = $request->input('title');
        $formData->message = $request->input('message');
        $formData->contact = $request->input('contact');
        $formData->imogi = $request->input('imogi');
        $formData->save();

        return redirect()->back()->withInput();
    }
}
