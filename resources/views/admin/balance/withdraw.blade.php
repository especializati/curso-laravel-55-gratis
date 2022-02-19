@extends('layouts.app')

@section('title', 'Novo Saque')

@section('content_header')
    <h1>Realizar Saque</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.balance') }}">Saldo</a></li>
        <li class="breadcrumb-item"><a href="#">Saque</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <span class="text-secondary"><i class="fas fa-cart-arrow-down"></i> Sacar</span>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <div class="col-12 col-md-4 px-0">
                            <form method="POST" action="{{ route('withdraw.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="value" placeholder="Valor do Saque" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Sacar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
