<x-/layout titulo="Usuarios">

    <h1>Usuarios</h1>

    <a href="/main/create" class="btn btn-dark mb-2">Cadastrar usuario</a>

    <ul class="list-group">
        @foreach ($texto as $texto)
        <li class="list-group-item">{{ $texto }}</li>
        @endforeach
    </ul>


</x-/layout>