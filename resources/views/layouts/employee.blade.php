@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}


<div class="content-body">
    <div class="container-fluid">

        <div class="d-grid gap-2 mb-5 add-employee">
            <a href="{{ route('form/employee')}}" class="btn btn-primary" type="button"><i class="bi bi-plus add-icon"></i>Cadastrar Novo</a>
        </div>

        <div class="row">

            <div class="col-md-4 col-12">

                <div class="card" style="width:auto">

                    <div class="setting">
                        <i class="bi bi-three-dots" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>

                        <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item edit_employee" data-toggle="modal" data-target="#edit_employee" href="#">Editar</a>
                            </li>
                            <li>
                                <a class="dropdown-item delete_employee" data-toggle="modal" data-target="#delete_employee" href="#">Excluir</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4 col-6">

                                <img class="img-fluid img-employee" src="{{ asset('assets/images/employee/ana.jpg')}}" alt="...">
                            </div>

                            <div class="col-md-8 col-6">
                                <h5 class="card-title">Ana Beatriz de Souza</h5>
                                <div class="card-text">
                                    <div class="birthday-div">
                                        <i class="bi bi-calendar2-week"></i><span> 25/06/2003</span>
                                    </div>

                                    <div class="role-div">
                                        <i class="bi bi-tag"></i><span> Manicure</span>
                                    </div>

                                    <div class="unit-div">
                                        <i class="bi bi-shop-window"></i><span> Rua Raposo Tavares 3-81</span>
                                    </div>

                                    <div class="score-div">
                                        <i class="bi bi-star-fill"></i><span> 220</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-12">

                <div class="card" style="width:auto">
                    <div class="setting">
                        <i class="bi bi-three-dots" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>

                        <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item edit_employee" data-toggle="modal" data-target="#edit_employee" href="#">Editar</a>
                            </li>
                            <li>
                                <a class="dropdown-item delete_employee" data-toggle="modal" data-target="#delete_employee" href="#">Excluir</a>
                            </li>
                        </ul>

                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 col-6">
                                <img class="img-fluid img-employee" src="{{ asset('assets/images/employee/roberto.jpg')}}" alt="...">
                            </div>

                            <div class="col-md-8 col-6">

                                <h5 class="card-title">Roberto Carlos Soarez</h5>
                                <div class="card-text">
                                    <div class="birthday-div">
                                        <i class="bi bi-calendar2-week"></i><span> 25/06/2003</span>
                                    </div>

                                    <div class="role-div">
                                        <i class="bi bi-tag"></i><span> Cabeleireiro</span>
                                    </div>

                                    <div class="unit-div">
                                        <i class="bi bi-shop-window"></i><span> Rua Raposo Tavares 3-81</span>
                                    </div>

                                    <div class="score-div">
                                        <i class="bi bi-star-fill"></i><span> 220</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>


<!-- Edit Employee Modal -->
<div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Funcionário</h5>
                <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">

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
<!-- /Edit Expense Modal -->

<!-- Delete Employee Modal -->
<div class="modal custom-modal fade" id="delete_employee" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Deletar Funcionário?</h3>
                    <p>Tem certeza disso?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('user/delete') }}" method="POST">
                        @csrf
                        <input type="hidden" id="e_id" name="id">
                        <div class="row" align="center">
                            <div class="col-6">
                                <button type="submit" class="btn btn-danger continue-btn submit-btn">Deletar</button>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancelar</a>
                            </div>
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


@endsection
@endsection