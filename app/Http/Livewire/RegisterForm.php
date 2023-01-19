<?php

namespace App\Http\Livewire;

use App\Models\Register;
use Livewire\Component;
use Illuminate\Contracts\Validation\Validator;

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
        'nameOrganization' => 'required|regex:/[0-9a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
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
        'file' => 'file|mimes:pdf',

    ];

    protected $messages = [
        'nameOrganization.required' => 'Заполните поле :attribute.',
        'nameOrganization.regex' => 'Значение поля неверно. Поле может содержать только цифровые символы символы латиницы, кирилицы, казахские символы и символы «» , . \ - # № @ & (). Пример: ТОО RS Solutions',

        'legalAdress.required' => 'Заполните поле :attribute.',
        'legalAdress.regex' => 'Значение поля неверно. Поле может содержать только цифровые символы символы латиницы, кирилицы, казахские символы и символы «» , . \ - # № @ & (). Пример: ТОО RS Solutions',
        'postcode.required' => 'Необходимо заполнить :attribute.',
        'postcode.numeric' => 'Значение «» должно быть числом.',

    ];



    protected $validationAttributes = [
        'nameOrganization' => 'Название организации ',
        'legalAdress' => 'Юридический адрес',
        'postcode' => 'Почтовый индекс',
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
