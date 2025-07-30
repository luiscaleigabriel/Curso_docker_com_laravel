@extends('master')
@section('title', 'Minhas Tarefas')

@section('content')

    <div class="container mt-5">
        @if (session()->has('error'))
            <div class="alert danger-alert">
                {{ session()->get('error') }}
            </div>
        @endif

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="card shadow rounded">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Cadastrar Nova Tarefa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('task.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="name" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea name="description" id="description" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="priority" class="form-label">Prioridade</label>
                        <select name="priority" id="priority" class="form-select" required>
                            <option value="a">Alta</option>
                            <option value="m">Média</option>
                            <option value="b">Baixa</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select name="status" id="status" class="form-select">
                            <option value="p">Pendente</option>
                            <option value="d">Concluído</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Salvar Tarefa</button>
                    <a href="{{ route('task.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
