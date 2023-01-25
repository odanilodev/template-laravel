@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Início</a></li>
                <li class="breadcrumb-item"><a href="#">Cadastro de Funcionários</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xl-12">
                            <form action="" method="POST">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="birth_date" name="birth_date">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Cargo</label>
                                        <input type="text" class="form-control" id="role" name="role">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Empresa</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                </div>

                                <div class="submit-section" align="center">
                                    <button type="submit" class="btn btn-primary submit-btn">Salvar</button>
                                </div>

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