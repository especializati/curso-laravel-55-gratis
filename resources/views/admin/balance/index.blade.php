@extends('layouts.app')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <a class="btn btn-primary mr-2 btn-small" href="{{ route('balance.deposit') }}"><i
                                    class="fas fa-cart-plus"></i>
                                Depositar</a>
                            @if ($amount > 0)
                                <a class="btn btn-secondary mr-2 btn-small" href="{{ route('balance.withdraw') }}">
                                    <i class="fas fa-cart-arrow-down"></i> Sacar</a>
                            @endif
                            @if ($amount > 0)
                                <a class="btn btn-info btn-small" href="{{ route('balance.transfer') }}">
                                    <i class="fas fa-exchange-alt"></i> Transferir</a>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <div class="col-12 col-md-4 px-0">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><sup style="font-size: 20px">R$</sup> {{ number_format($amount, 2, ',', '') }}
                                    </h3>
                                </div>
                                <div class="icon mt-3">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <a href="#" class="small-box-footer">Histórico <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
