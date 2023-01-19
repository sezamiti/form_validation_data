<?php

namespace App\Http\Livewire;

use App\Models\Register;
use Livewire\Component;

class RegisterForm extends Component
{
    public $nameOrganization;
    public $legalAdress;
    public $postcode;
    public $number;
    public $email;
    public $bankName;
    public $bin;
    public $bik;
    public $iik;
    public $responsPerson;
    public $responsnumber;
    public $responsemail;
    public $name;
    public $domain;
    public $file;


    protected $rules = [
        'nameOrganization' => 'required|regex:/[a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'legalAdress' => 'required|regex:/[a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'postcode' => 'required|numeric',
        'number' => 'required|numeric',
        'email' => 'required|email',
        'bankName' => 'required|regex:/[a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'bin' => 'required|digits:12',
        'bik' => 'required|digits:8',
        'iik' => 'required|digits:20',
        'responsPerson' => 'required|regex:/[a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'responsnumber' => 'required|numeric',
        'responsemail' => 'required|email',
        'name' => 'required|regex:/[а-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'domain' => 'required|alpha_dash',
        'file' => 'required|file',
    ];




    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Register::create($validatedData);

        return redirect()->to('/message');
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
