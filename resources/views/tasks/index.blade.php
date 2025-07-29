@extends('master')
@section('title', 'Minhas Tarefas')

@section('content')

    <div class="container mt-4">
        <h2 class="mb-4">Minhas Tarefas</h2>
        <a href="{{ route('task.create') }}" class="btn btn-primary mb-2">Criar Tarefa</a>
        <table class="table table-dark table-striped">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Prioridade</th>
                <th>Ação</th>
            </tr>

            @forelse ($tasks as $task)
                <tr>
                    <td>$task->name</td>
                    <td>$task->description</td>
                    <td>$task->status</td>
                    <td>$task->priority</td>
                </tr>
            @empty
                <td colspan="5" style="color: red" >Nenhuma tarefa encontrada!</td>
            @endforelse
        </table>
    </div>
@endsection
