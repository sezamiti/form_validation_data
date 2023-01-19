
@extends('layouts.app')
@section('register')
{{--    <ul>--}}
{{--        @foreach($errors->all() as $message)--}}
{{--            <li>{{$message}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}

    <form action="/register" method="post" enctype="multipart/form-data" class="was-validated">
        @csrf
        <div class="container">
            <div class="wrap">
                <h1>Регистрация</h1>
                <div class="row align-items-center gap-3">

                    <div class="row ">
                        <div class="col">
                            <label>Наименование организации</label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="КГУ СШ №24" required name="nameOrganization" value="{{old('nameOrganization')}}">
                        </div>
                        @if($errors->has('nameOrganization'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('nameOrganization')}}
                            </div>
                        @endif

                        <div class="col">
                            <label>Юридический адрес</label>
                            <input type="text" class="form-control" placeholder="КГУ СШ №24" required name="legalAdress" value="{{old('legalAdress')}}">
                        </div>
                        @if($errors->has('legalAdress'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('legalAdress')}}
                            </div>
                        @endif
                        <div class="col">
                            <label>Почтовый индекс</label>
                            <input type="text" class="form-control" placeholder="Иванов Иван Иванович" required
                                   name="postcode" value="{{old('postcode')}}">
                        </div>
                        @if($errors->has('postcode'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('postcode')}}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Номер телефона организации</label>
                            <input type="text" class="form-control" placeholder="+ 777-777-77-77" required
                                   name="number" value="{{old('number')}}">
                        </div>
                        @error('number')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="col">
                            <label>Электронная почта (организации)</label>
                            <input type="email" class="form-control" placeholder="Ivanov@mail.kz" required name="email" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror


                        <div class="col">
                            <label>Название банка</label>
                            <input type="text" class="form-control" required name="bankName" value="{{old('bankName')}}">
                        </div>
                        @error('bankName')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="row">
                        <div class="col">
                            <label>БИН</label>
                            <input type="text" class="form-control" required name="bin" value="{{old('bin')}}">
                        </div>
                        @error('bin')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="col">
                            <label>БИК</label>
                            <input type="text" class="form-control" required name="bik" value="{{old('bik')}}">
                        </div>
                        @error('bik')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="col">
                            <label>ИИК</label>
                            <input type="text" class="form-control" required name="iik" value="{{old('iik')}}">
                        </div>
                        @error('iik')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Ответственное лицо</label>
                            <input type="text" class="form-control" required name="responsPerson" value="{{old('responsPerson')}}">
                        </div>
                        @error('responsPerson')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="col">
                            <label>Телефон ответственного лица</label>
                            <input type="text" class="form-control" required name="responsnumber" value="{{old('responsnumber')}}">
                        </div>
                        @error('responsnumber')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="col">
                            <label>E-mail ответственного лица</label>
                            <input type="text" class="form-control" required name="responsemail" value="{{old('responsemail')}}">
                        </div>
                        @error('responsemail')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Фамилия Имя Отчество(Руководителя)</label>
                            <input type="text" class="form-control" required placeholder="Иванов Иван Иванович"
                                   name="name" value="{{old('name')}}">
                        </div>
                        @error('name')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="col">
                            <label>Желаемое название доменного имени в зоне edu.kz</label>
                            <input type="text" class="form-control" required name="domain" value="{{old('domain')}}">
                        </div>
                        @error('domain')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                </div>
                <div class='row mt-4'>
                    <div class="col-8">
                        <input type="file" name="file" value="{{old('file')}}"/>
                        @error('file')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <a href="/message" class="col-4 ">
                        <button type="submit" class="btn btn-warning btn-lg">Регистрация</button>
                    </a>
                </div>
            </div>
        </div>
    </form>
@endsection
