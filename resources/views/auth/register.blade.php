@extends('layouts.master')

@section('content')
<div class="container">
    <main>
        <section>
            <div class="forma">
                <h1 id="main-cadastro">{{ __('Cadastro de Cliente') }}</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <label class="cadastro-label">{{ __('Nome Completo:') }}</label> 
                    <div class="col-md-10">
                        <input id="nome" type="text" class="form-control cadastro-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  <label class="cadastro-label">{{ __('E-Mail:') }}</label> 
                  <div class="col-md-10">
                        <input id="login-email" type="email" class="form-control cadastro-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                    </div>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror<br>

                    <div class="form-group row">                    
                        <label class="cadastro-label" for="password" >{{ __('Digite sua Senha') }}</label>
                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control cadastro-senha @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      
                    </div>

                    <div class="form-group row">
                          <label for="password" class="cadastro-label">{{ __('Confirme a Senha') }}</label>

                        <div class="col-md-10">
                            <input id="password-confirm" type="password" class="form-control cadastro-senha" name="password_confirmation" required autocomplete="new-password">
                        </div> 
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-4">
                
                            <button type="submit" class="btn btn-primary" id="cadastrar" name="cadastrar">
                                {{ __('Cadastrar') }}
                            </button>
                        </div>
                    </div>
            </div>
        </section>
    </main>
</div>
@endsection
