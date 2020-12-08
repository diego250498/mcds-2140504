@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>
                <i class="fa fa-plus"></i>
                Adicionar Usuarios
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i>
                            Escritorio
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">
                            <i class="fa fa-users"></i>
                            Módulo Usuarios
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-plus"></i>
                        Adicionar Usuarios
                    </li>
                </ol>
            </nav>

            <!--@if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                @endforeach
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif-->

            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name')
                                    is-invalid @enderror" name="name" value="{{ old('name') }}"
                                    placeholder="@lang('general.label-name')" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email')
                                    is-invalid @enderror" name="email" value="{{ old('email') }}"
                                    placeholder="@lang('general.label-email')">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="phone" type="number" class="form-control @error('phone')
                                    is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                    placeholder="@lang('general.label-phone')">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="birthdate" type="date" class="form-control @error('birthdate')
                                    is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}"
                                    placeholder="@lang('general.label-birthdate')">

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <select name="gender" id="gender" class="form-control @error('gender')
                                    is-invalid @enderror">
                                    <option value="">Seleccione el Género...</option>
                                    <option value="Female" @if(old('gender') == 'Female') selected @endif>
                                        @lang('general.select-female')</option>
                                    <option value="Male" @if(old('gender') == 'Male') selected @endif>
                                        @lang('general.select-male')</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="address" type="text" class="form-control @error('address')
                                    is-invalid @enderror" name="address" value="{{ old('address') }}"
                                    placeholder="@lang('general.label-address')">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <div class="text-center my-3">
                                <img src="{{ asset('imgs/no-photo.png') }}" class="img-thumbnail" id="preview"
                                    width="120px">
                            </div>
                            <div class="custom-file">
                                <input type="file" id="photo" class="custom-file-input @error('photo')
                                    is-invalid @enderror" id="photo" name="photo" accept="image/*">
                                <label class="custom-file-label" for="customFile">
                                    <i class="fa fa-upload"></i>
                                    Foto
                                </label>
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password')
                                    is-invalid @enderror" name="password"
                                    placeholder="@lang('general.label-password')">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="@lang('general.label-confirm')">
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-larapp btn-block text-uppercase">
                                    @lang('general.btn-save')
                                    <i class="fa fa-save"></i>
                                </button>
                        </div>
                    </form>

        </div>
    </div>
@endsection
