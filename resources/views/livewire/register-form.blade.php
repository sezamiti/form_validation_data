<form wire:submit.prevent="submit">
    <div class="container">
        <div class="wrap">
            <h1>Регистрация</h1>
            <div class="row align-items-center gap-3">

                <div class="row ">
                    <div class="col">
                        <label>Наименование организации</label>
                        <input type="text"
                               class="form-control"
                               placeholder="КГУ СШ №24"  wire:model="nameOrganization" value="{{old('nameOrganization')}}">
                        @if($errors->has('nameOrganization'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('nameOrganization')}}
                            </div>
                        @endif
                    </div>

                    <div class="col">
                        <label>Юридический адрес</label>
                        <input type="text" class="form-control" placeholder="КГУ СШ №24" wire:model="legalAdress"
                               value="{{old('legalAdress')}}">
                        @if($errors->has('legalAdress'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('legalAdress')}}
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <label>Почтовый индекс</label>
                        <input type="text" class="form-control" placeholder="Иванов Иван Иванович"
                               wire:model="postcode" value="{{old('postcode')}}">
                        @if($errors->has('postcode'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('postcode')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Номер телефона организации</label>
                        <input type="text" class="form-control" placeholder="+ 777-777-77-77"
                               wire:model="number" value="{{old('number')}}">
                        @error('number')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Электронная почта (организации)</label>
                        <input type="email" class="form-control" placeholder="Ivanov@mail.kz" wire:model="email"
                               value="{{old('email')}}">
                        @error('email')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="col">
                        <label>Название банка</label>
                        <input type="text" class="form-control" wire:model="bankName" value="{{old('bankName')}}">
                        @error('bankName')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label>БИН</label>
                        <input type="text" class="form-control" wire:model="bin" value="{{old('bin')}}">
                        @error('bin')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>БИК</label>
                        <input type="text" class="form-control" wire:model="bik" value="{{old('bik')}}">
                        @error('bik')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>ИИК</label>
                        <input type="text" class="form-control" wire:model="iik" value="{{old('iik')}}">
                        @error('iik')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label>Ответственное лицо</label>
                        <input type="text" class="form-control" wire:model="responsPerson" value="{{old('responsPerson')}}">
                        @error('responsPerson')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Телефон ответственного лица</label>
                        <input type="text" class="form-control" wire:model="responsnumber" value="{{old('responsnumber')}}">
                        @error('responsnumber')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>E-mail ответственного лица</label>
                        <input type="text" class="form-control" wire:model="responsemail" value="{{old('responsemail')}}">
                        @error('responsemail')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label>Фамилия Имя Отчество(Руководителя)</label>
                        <input type="text" class="form-control" placeholder="Иванов Иван Иванович"
                               wire:model="name" value="{{old('name')}}">
                        @error('name')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Желаемое название доменного имени в зоне edu.kz</label>
                        <input type="text" class="form-control" wire:model="domain" value="{{old('domain')}}">
                        @error('domain')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
            </div>
            <div class='row mt-4'>
                <div class="col-8">
                    <input type="file" wire:model="file" value="{{old('file')}}"/>
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


    <button type="submit" class="btn btn-primary">Save Contact</button>
</form>
