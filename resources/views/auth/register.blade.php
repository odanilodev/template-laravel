
@extends('layouts.app')
@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <div class="text-center mb-3">
                                <a href="index.html"><img src="{{ URL::to('assets/images/logo-full.png') }}" alt=""></a>
                            </div>
                            <h4 class="text-center mb-4">Crie a sua conta</h4>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Nome Completo</strong></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Digite seu nome completo">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Email</strong></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Digite seu melhor e-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                               
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Senha</strong></label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Crie sua senha de acesso">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Repita a Senha</strong></label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Repita sua senha">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Já tem uma conta? <a class="text-primary" href="{{route('login')}}">Logar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
