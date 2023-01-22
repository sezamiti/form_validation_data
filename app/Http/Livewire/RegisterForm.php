<?php

namespace App\Http\Livewire;

use App\Mail\SendingMessage;
use App\Models\Register;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterForm extends Component
{
    use WithFileUploads;



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
        'legalAdress' => 'required|regex:/[0-9a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'postcode' => 'required|numeric',
        'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        'email' => 'required|email',
        'bankName' => 'required|regex:/[0-9a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'bin' => 'required|digits:12',
        'bik' => 'required|min:8',
        'iik' => 'required|min:20',
        'responsPerson' => 'required|regex:/[a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'responsnumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        'responsemail' => 'required|email',
        'name' => 'required|regex:/[a-zA-Zа-яА-ЯЁёҚқӘәҺһІіҢңҒғҰұӨө\s]/ui',
        'domain' => 'required|regex:/^(?!\-)(?:(?:[a-zA-Z\d][a-zA-Z\d\-]{0,61})?[a-zA-Z\d]\.){1,126}(?!\d+)[a-zA-Z\d]{1,63}$/',
        'file' => 'mimes:pdf|max:2048',

    ];

    protected $messages = [
        'nameOrganization.required' => 'Заполните поле :attribute.',
        'nameOrganization.regex' => 'Значение поля неверно. Поле может содержать только цифровые символы символы латиницы, кирилицы, казахские символы и символы «» , . \ - # № @ & (). Пример: ТОО RS Solutions',

        'legalAdress.required' => 'Заполните поле :attribute.',
        'legalAdress.regex' => 'Значение поля неверно. Поле может содержать только цифровые символы символы латиницы, кирилицы, казахские символы и символы «» , . \ - # № @ & (). Пример: ТОО RS Solutions',
        'postcode.required' => 'Необходимо заполнить :attribute.',
        'postcode.numeric' => 'Значение «:input» должно быть числом.',
        'number.required' => 'Необходимо заполнить «:attribute.».',
        'number.numeric' => 'Значение «:input» должно быть числом.',
        'number.regex' => 'Значение «:input» должно быть числом.',
        'email.required' => 'Необходимо заполнить «:attribute».',
        'email.email' => 'Значение «:input» не является правильным email адресом.',
        'bankName.required' => 'Необходимо заполнить «:attribute».',
        'bankName.regex' => 'Значение поля неверно. Поле может содержать только символы латиницы, кирилицы, казахские символы',
        'bin.required' => 'Необходимо заполнить «:attribute».',
        'bin.digits' => 'Необходимо заполнить «БИН 12 цифр*.',
        'bik.required' => 'Необходимо заполнить «:attribute».',
        'bik.min' => 'Значение «:input*» должно содержать минимум 8 символа.',
        'bik.digits' => 'Значение «:input*» должно содержать минимум 8 символа.',
        'iik.required' => 'Необходимо заполнить «:attribute».',
        'iik.min' => 'Значение «:attribute» должно содержать минимум 20 символа.',
        'responsPerson.required' => 'Необходимо заполнить «:attribute».',
        'responsPerson.regex' => 'Значение поля неверно. Поле может содержать только символы латиницы, кирилицы, казахские символы. Пример: Иванов Иван Иванович',
        'responsnumber.required' => 'Необходимо заполнить «:attribute».',
        'responsnumber.regex' => 'Значение «:input*» должно быть числом.',
        'responsemail.required' => 'Необходимо заполнить «:attribute».',
        'responsemail.email' => 'Значение «» не является правильным email адресом.',
        'name.required' => 'Необходимо заполнить «:attribute».',
        'name.regex' => 'Значение поля неверно. Поле может содержать только символы латиницы, кирилицы, казахские символы. Пример: Иванов Иван Иванович',
        'domain.required' => 'Необходимо заполнить «желаемое название домена в зоне edu.kz , например: название организации.edu.kz*».',
        'domain.regex' => 'Необходимо заполнить «желаемое название домена в зоне edu.kz , например: название организации.edu.kz*».',
        'file.required' => 'вставьте pdf файл',
        'file.mimes' => 'нужен файл pdf',
        'file.max' => 'Не удалось загрузить следующие файлы: :input слишком большой. Размер не должен превышать 2.00 МиБ.',

    ];

    protected $validationAttributes = [
        'nameOrganization' => 'Название организации ',
        'legalAdress' => 'Юридический адрес',
        'postcode' => 'почтовый индекс',
        'number' => 'телефон ответственного лица',
        'email' => '«Е –mail ответственного лица',
        'bankName' => 'Название банка',
        'bin' => 'БИН 12 цифр ',
        'iik' => 'ИИК KZ (20 значный счет)',
        'bik' => 'БИН 8 цифр',
        'responsPerson' => 'ФИО (ответственного лица)',
        'responsnumber' => 'телефон ответственного лица',
        'responsemail' => 'Е –mail ответственного лица',
        'name' => 'ФИО (Руководителя)',
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $validatedData = $this->validate();

        Register::create($validatedData);

        Mail::to('sezam@mail.kz')->send(new SendingMessage($this->nameOrganization,$this->legalAdress,$this->postcode,$this->number,$this->email,$this->bankName,$this->bin,$this->iik,$this->bik,$this->responsPerson,$this->responsnumber,$this->responsemail,$this->name ,$this->domain,$this->file  ));


        return redirect()->to('/message');

    }



    public function render()
    {


        return view('livewire.register-form');
    }
}
