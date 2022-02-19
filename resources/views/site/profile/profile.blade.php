@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
@stop

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" value="{{ auth()->user()->name }}" name="name" placeholder="Nome"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" value="{{ auth()->user()->email }}" name="email" placeholder="E-mail"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" name="password" placeholder="Senha" class="form-control">
                            </div>
                            <div class="form-group">
                                @if (auth()->user()->image != null)
                                    <img src="{{ url('storage/users/' . auth()->user()->image) }}"
                                        alt="{{ auth()->user()->name }}" style="max-width: 50px;"
                                        class="img-thumbnail d-block">
                                @endif

                                <label for="image">Imagem:</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Atualizar Perfil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
