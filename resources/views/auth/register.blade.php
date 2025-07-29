@extends('auth.layout')
@section('title', 'Cadastro')


@section('content')

    <div class="container mt-4">

        <h2>Sejá bem vindo!</h2>
        <p>Cadastre - se e gerencie suas tarefas agora.</p>

        <br>

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
            </div>
            <div class="mb-3">
                Já possui uma conta? <a href="{{ route('auth.index') }}">Fazer login</a>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>

@endsection
