@extends('layouts.app')

@section('title', 'Histórico de Movimentações')

@section('content_header')
    <h1>Histórico de Movimentações</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Histórico</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <span class="text-primary"><i class="fas fa-history"></i>
                                Histórico de Movimentações</span>
                        </div>
                        <div class="col-12 px-0 d-flex justify-content-between mt-2">
                            <form action="{{ route('historic.search') }}" method="POST" class="form form-inline">
                                @csrf
                                <input type="text" name="id" class="form-control mr-md-2" placeholder="ID">
                                <input type="date" name="date" class="form-control mr-md-2">
                                <select name="type" class="form-control mr-md-2">
                                    <option value="">-- Selecione o Tipo --</option>
                                    @foreach ($types as $key => $type)
                                        <option value="{{ $key }}">{{ $type }}</option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-primary">Pesquisar</button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <div class="col-12 px-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Valor</th>
                                        <th>Tipo</th>
                                        <th>Data</th>
                                        <th>Participante</th>
                                    <tr>
                                </thead>
                                <tbody>
                                    @forelse($historics as $historic)
                                        <tr>
                                            <td>{{ $historic->id }}</td>
                                            <td>R$ {{ number_format($historic->amount, 2, ',', '.') }}</td>
                                            <td>{{ $historic->type($historic->type) }}</td>
                                            <td>{{ $historic->date }}</td>
                                            <td>
                                                @if ($historic->user_id_transaction)
                                                    {{ $historic->userSender->name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        <tr>
                                        @empty
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                @if (isset($dataForm))
                                    {{ $historics->appends($dataForm)->links() }}
                                @else
                                    {{ $historics->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
