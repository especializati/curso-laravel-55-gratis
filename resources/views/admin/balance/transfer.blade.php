@extends('layouts.app')

@section('title', 'Nova Transferência')

@section('content_header')
    <h1>Realizar Transferência</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.balance') }}">Saldo</a></li>
        <li class="breadcrumb-item"><a href="#">Transferência</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <span class="text-info"><i class="fas fa-exchange-alt"></i>
                                Transferir saldo (informe o recebedor)</span>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <div class="col-12 col-md-4 px-0">
                            <form method="POST" action="{{ route('confirm.transfer') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="sender" placeholder="Nome ou e-mail do recebedor"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Próxima Etapa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
