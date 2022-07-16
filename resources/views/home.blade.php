<x-layout>
    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">Criar Tarefa</a>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph-header">
            <h2>Progresso do dia</h2>
            <div class="graph-header-line"></div>
            <div class="graph-header--date">
                <img src="/assets/images/icon-prev.png" alt="">
                12/Dez/2022
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph-header--subtitle">Tarefas: <b>3/6</b></div>
        <div class="graph-placeholder">

        </div>
        <div class="graph--task-left">
            <img src="/assets/images/icon-info.png" alt=""> Restam 3 tarefas a serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list-header">
            <select name="" id="" class="list-header--select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task-list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
</x-layout>
