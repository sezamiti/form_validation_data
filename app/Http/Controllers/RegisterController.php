<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function data(Request $request){
        $formData = new Register();

        $formData->nameOrganization = $request->input('nameOrganization');
        $formData->legalAdress = $request->input('legalAdress');
        $formData->postcode = $request->input('postcode');
        $formData->number = $request->input('number');
        $formData->email = $request->input('email');
        $formData->bankName = $request->input('bankName');
        $formData->bik = $request->input('bik');
        $formData->responsPerson = $request->input('responsPerson');
        $formData->responsnumber = $request->input('responsnumber');
        $formData->responsemail = $request->input('responsemail');
        $formData->name = $request->input('name');
        $formData->domain = $request->input('domain');
        $formData->file = $request->input('file');
        $formData->save();
        

        dd($formData);

        return redirect()->back()->withInput();
    }
}
