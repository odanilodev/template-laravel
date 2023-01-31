@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="d-grid gap-2 mb-5 add-employee">
            <a href="{{ route('form/units')}}" class="btn btn-primary" type="button"><i class="bi bi-plus add-icon"></i>Cadastrar Novo</a>
        </div>

        <div class="row">

            @foreach($units as $items)

            

                <div class="col-md-6 col-sm-12 col-12">

                    <div class="card cardUnits">
                        
                        <div class="card-header border-0 pb-0">
                            <div>
                                <h4 class="card-title mb-2 fw-bolder">
                                    <i class="bi bi-shop"></i> {{$items->name}}</h4>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item edit_units" href="#"
                                        data-nome="{{$items->name}}"
                                        data-cep="{{$items->cep}}"
                                        data-complemento="{{$items->complement}}"
                                        data-endereco="{{$items->address}}"
                                        data-responsavel="{{$items->responsible}}"
                                        data-telefone="{{$items->phone}}"
                                        data-url="{{route('units/update', ['id' => $items->id])}}"
                                    >Editar</a>

                                    <a class="dropdown-item delete_units" data-url="{{route('units/destroy', ['id' => $items->id])}}" href="#">Excluir</a>

                                </div>
                            </div>
                        </div>

                        <div class="card-body">	

                            <div class="row">

                                <div class="col-md-6 col-6">
                                    <img class="img-fluid img-employee" src="{{ asset('assets/images/units/empresa.jpg')}}" alt="...">
                                </div>

                                <div class="col-md-6 col-6" style="align-items: center; justify-content:center">
                                    <ul class="card-list">
                                        <li>
                                            <span class="circle"><i style="font-size: 18px; color:#FE513F" class="bi bi-geo-alt-fill"></i></span>{{$items->address}}
                                        </li>
                                        <li>
                                            <span class="circle"><i style="font-size: 18px; color:#FE513F" class="bi bi-geo-fill"></i></span>{{$items->cep}}
                                        </li>
                                        <li>
                                            <span class="circle"><i style="font-size: 18px; color:#6E964B" class="bi bi-person-badge"></i></span>{{$items->responsible}}
                                        </li>
                                        <li><span class="circle"><i style="font-size: 18px; color:#6E964B" class="bi bi-telephone-fill"></i></span>{{$items->phone}}
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

            @endforeach

        </div>
    </div>
</div>


<!-- Edit units Modal -->
<div id="edit_units" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Empresa</h5>
                <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" id="editUnitForm">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nome da Empresa:</label>
                            <input type="text" placeholder="De um nome para o estabelecimento:" value="" class="form-control name" name="name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">CEP:</label>
                            <input type="text" value="" class="form-control cep" name="cep" >
                        </div>

                        <div class="mb-3 col-md-4 col-6">
                            <label class="form-label">Rua:</label>
                            <input type="text" value="" class="form-control street" name="street" >
                        </div>

                        <div class="mb-3 col-md-2 col-6">
                            <label class="form-label">N°:</label>
                            <input type="text" value="" class="form-control number" name="number" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Bairro:</label>
                            <input type="text" value="" class="form-control district" name="district" >
                        </div>

                        <div class="mb-3 col-md-4 col-6">
                            <label class="form-label">Cidade:</label>
                            <input type="text" value="" class="form-control city" name="city" >
                        </div>

                        <div class="mb-3 col-md-2 col-6">
                            <label class="form-label">Estado:</label>
                            <input type="text" value="" class="form-control state" name="state" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Complemento</label>
                            <input type="text" name="complement" value="" placeholder="" class="form-control complement">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label">Responsável:</label>
                            <input type="text" class="form-control responsible" value="" name="responsible">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label">Telefone de contato</label>
                            <input type="text" class="form-control phone" value="" name="phone">
                        </div>

                        <div class="mb-3 col-md-4 form-group">
                            <label class="form-label">Foto da Empresa:</label>
                            <input type="file" class="form-control inputFile" name="image">
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Expense Modal -->

<!-- Delete units Modal -->
<div class="modal custom-modal fade" id="delete_units" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Deletar Emresa</h3>
                    <p>Deseja mesmo deletar essa empresa?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form class="deleteUnit" action="" method="post">
                        @csrf
                        @method('DELETE')
                       
                        <div class="row" align="center">

                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-dark cancel-btn">Cancelar</a>

                            <button type="submit" class="btn btn-danger continue-btn submit-btn mt-3 deletedBtn">Deletar</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete User Modal -->


@section('script')
<!-- Bootstrap Core JS -->
<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

<script>

    // Delete Units
    $('.delete_units').click(function() {

        $('.deleteUnit').attr('action', $(this).data('url')); //coloca a rota do delete no action do form
        $('#delete_units').modal('show'); //exibe o modal para confirmar delete

    });

    //btn cancelar modal de delete
    $('.cancel-btn').click(function() {
        $('#delete_units').modal('hide');
    });

    //edit units
    $('.edit_units').click(function() {

        //atribui valores nos inputs
        $('.name').val($(this).data('nome'));
        $('.cep').val($(this).data('cep'));
        $('.complement').val($(this).data('complemento'));
        $('.address').val($(this).data('endereco'));
        $('.responsible').val($(this).data('responsavel'));
        $('.phone').val($(this).data('telefone'));

        $('#editUnitForm').attr('action',  $(this).data('url')); //coloca a rota de editar no action do form

        $('#edit_units').modal('show'); //exibe o modal com o formulário
    });

    //click para fechar modal de editar
    $('.closeModal').click(function(){
        $('#edit_units').modal('hide');
    })

</script>


@endsection

@endsection