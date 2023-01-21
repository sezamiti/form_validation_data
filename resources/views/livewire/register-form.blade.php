<form wire:submit.prevent="submit" class="needs-validation" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="wrap">
            <h1>Регистрация</h1>
            <div class="row align-items-center gap-3">

                <div class="row ">
                    <div class="col">
                        <label>Наименование организации</label>
                        <input type="text"
                               class="form-control @error('nameOrganization') is-invalid @else is-valid @enderror"
                               placeholder="КГУ СШ №24" wire:model="nameOrganization"
                               value="{{old('nameOrganization')}}">
                        @if($errors->has('nameOrganization'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('nameOrganization')}}
                            </div>
                        @endif
                    </div>

                    <div class="col">
                        <label>Юридический адрес</label>
                        <input type="text"  class="form-control @error('legalAdress') is-invalid @else is-valid @enderror" placeholder="КГУ СШ №24"  wire:model="legalAdress"
                               value="{{old('legalAdress')}}">
                        @if($errors->has('legalAdress'))
                            <div class="text-danger pb-1 small">
                                {{$errors->first('legalAdress')}}
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <label>Почтовый индекс</label>
                        <input type="text"  class="form-control @error('postcode') is-invalid @else is-valid @enderror" placeholder="Иванов Иван Иванович"
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
                        <input type="text"  class="form-control @error('number') is-invalid @else is-valid @enderror" placeholder="+ 777-777-77-77"
                               wire:model="number" value="{{old('number')}}">
                        @error('number')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Электронная почта (организации)</label>
                        <input type="email"  class="form-control @error('email') is-invalid @else is-valid @enderror" placeholder="Ivanov@mail.kz" wire:model="email"
                               value="{{old('email')}}">
                        @error('email')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="col">
                        <label>Название банка</label>
                        <input type="text"  class="form-control @error('bankName') is-invalid @else is-valid @enderror" wire:model="bankName" value="{{old('bankName')}}">
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
                        <input type="text"  class="form-control @error('bin') is-invalid @else is-valid @enderror" wire:model="bin" value="{{old('bin')}}">
                        @error('bin')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>БИК</label>
                        <input type="text"  class="form-control @error('bik') is-invalid @else is-valid @enderror" wire:model="bik" value="{{old('bik')}}">
                        @error('bik')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>ИИК</label>
                        <input type="text"  class="form-control @error('iik') is-invalid @else is-valid @enderror" wire:model="iik" value="{{old('iik')}}">
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
                        <input type="text"  class="form-control @error('responsPerson') is-invalid @else is-valid @enderror" wire:model="responsPerson"
                               value="{{old('responsPerson')}}">
                        @error('responsPerson')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Телефон ответственного лица</label>
                        <input type="text"  class="form-control @error('responsnumber') is-invalid @else is-valid @enderror" wire:model="responsnumber"
                               value="{{old('responsnumber')}}">
                        @error('responsnumber')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>E-mail ответственного лица</label>
                        <input type="text"  class="form-control @error('responsemail') is-invalid @else is-valid @enderror" wire:model="responsemail"
                               value="{{old('responsemail')}}">
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
                        <input type="text"  class="form-control @error('name') is-invalid @else is-valid @enderror" placeholder="Иванов Иван Иванович"
                               wire:model="name" value="{{old('name')}}">
                        @error('name')
                        <div class="small text-danger pb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Желаемое название доменного имени в зоне edu.kz</label>
                        <input type="text"  class="form-control @error('domain') is-invalid @else is-valid @enderror" wire:model="domain" value="{{old('domain')}}">
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
                    <input type="file" wire:model="file" value="{{old('file')}}" accept="application/pdf"/>
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

