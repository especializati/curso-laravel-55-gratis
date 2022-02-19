@extends('layouts.app')

@section('title', 'Novo Depósito')

@section('content_header')
    <h1>Realizar Depósito</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.balance') }}">Saldo</a></li>
        <li class="breadcrumb-item"><a href="#">Depósito</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <span class="text-primary"><i class="fas fa-cart-plus"></i>
                                Depositar</span>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <div class="col-12 col-md-4 px-0">
                            <form method="POST" action="{{ route('deposit.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="value" placeholder="Valor Recarga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Depositar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
