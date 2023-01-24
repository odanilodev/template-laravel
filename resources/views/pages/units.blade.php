
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div><a href="{{route('form/units')}}">Link para Cadastro</a></div>
        
        <div class="row">

            @foreach($units as $items)

            <div class="col-xl-4 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                               <img style="max-width: 210px;" src="{{asset('assets/images/units/barbearia.jpg')}}">
                            </div>
                            <div class="col-xl-6">
                                <div class="row  mt-xl-0 mt-4">
                                    <div class="col-md-12">
                                        <h4 class="card-title">{{$items->name}}</h4>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu olor</span>
                                        <ul class="card-list mt-4">
                                            <li><span class="bg-blue circle"></span>Account<span>20%</span></li>
                                            <li><span class="bg-success circle"></span>Services<span>40%</span></li>
                                            <li><span class="bg-warning circle"></span>Restaurant<span>15%</span></li>
                                            <li><span class="bg-light circle"></span>Others<span>15%</span></li>
                                        </ul>
                                        <div><a href="{{route('units/edit', ['id' => $items->id])}}">Link para Editar</a></div>

                                        <div><a href="{{route('units/destroy', ['id' => $items->id])}}">Link para Deletar</a></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

          

   
        </div>
    </div>
</div>
@endsection
