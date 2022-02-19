@extends('layouts.app')

@section('title', 'Confirmar Transferência')

@section('content_header')
    <h1>Confirmar Transferência</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.balance') }}">Saldo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('balance.transfer') }}">Realizar Transferência</a></li>
        <li class="breadcrumb-item"><a href="#">Confirmar Transferência</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <span class="text-secondary"><i class="fas fa-exchange-alt"></i>
                                Confirmar a transferência de saldo</span>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <p><strong>Recebedor:</strong> {{ $sender->name }} - {{ $sender->email }}</p>
                        <p><strong>Seu saldo atual:</strong> R$ {{ number_format($balance->amount, 2, ',', '.') }}</p>

                        <div class="col-12 col-md-4 px-0">
                            <form method="POST" action="{{ route('transfer.store') }}">
                                @csrf
                                <input type="hidden" name="sender_id" value="{{ $sender->id }}">
                                <div class="form-group">
                                    <input type="text" name="value" placeholder="Valor:" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Transferir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
