
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Form</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Form Input</a></li>
            </ol>
        </div>
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xl-12">
                            <form method="POST" action="{{route('units/update', ['id' => $unit->id])}}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nome:</label>
                                        <input type="text" placeholder="De um nome para o estabelecimento:" value="{{ $unit->name }}" class="form-control" name="name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">CEP:</label>
                                        <input type="text" value="{{ $unit->cep }}" class="form-control" name="cep" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Complemento</label>
                                        <input type="text" name="complement" value="{{ $unit->complement }}" placeholder="" class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Endere??o:</label>
                                        <input type="text" value="{{ $unit->address }}" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Responsavel</label>
                                        <input type="text" class="form-control" value="{{ $unit->responsible }}" name="responsible">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Telefone de contato</label>
                                        <input type="text" class="form-control" value="{{ $unit->phone }}" name="phone">
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
