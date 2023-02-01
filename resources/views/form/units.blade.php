
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Início</a></li>
                <li class="breadcrumb-item"><a href="#">Cadastro de Empresas</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xl-12">
                            <form method="POST" action="{{ route('units/store') }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nome da Empresa:</label>
                                        <input type="text" class="form-control" name="name" id="nome">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">CEP:</label>
                                        <input type="text" class="form-control" name="cep" id="cep">
                                    </div>
                                    <div class="mb-3 col-md-4 col-6">
                                        <label class="form-label">Rua:</label>
                                        <input type="text" class="form-control" name="street" id="rua">
                                    </div>
                                    <div class="mb-3 col-md-2 col-6">
                                        <label class="form-label">N°:</label>
                                        <input type="text" class="form-control" name="number" id="numero">
                                    </div>
                                
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Bairro:</label>
                                        <input type="text" name="district" class="form-control" id="bairro">
                                    </div>

                                    <div class="mb-3 col-md-4 col-6">
                                        <label class="form-label">Cidade:</label>
                                        <input type="text" name="city" class="form-control" id="cidade">
                                    </div>

                                    <div class="mb-3 col-md-2 col-6">
                                        <label class="form-label">Estado:</label>
                                        <input type="text" name="state" class="form-control" id="estado">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Complemento:</label>
                                        <input type="text" name="complement" class="form-control">
                                    </div>
                                
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Responsável:</label>
                                        <input type="text" class="form-control" name="responsible">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Telefone de contato:</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>

                                    <div class="mb-3 col-md-4 form-group">
                                        <label class="form-label">Foto da Empresa:</label>
                                        <input type="file" class="form-control inputFile" name="image">
                                    </div>
                                </div>
                               
                                <button class="btn btn-primary" type="submit">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')

@endsection
@endsection
