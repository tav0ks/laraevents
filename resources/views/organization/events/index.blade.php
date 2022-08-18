@extends('layouts.panel')
@section('title', 'Eventos')
@section('content')
    <form>
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-fill">
                <input type="text" name="search" class="form-control w-50 mr-2" value="" placeholder="Pesquisar...">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <a href="{{ route('organization.events.create') }}" class="btn btn-primary">Novo evento</a>
        </div>
    </form>
    <table class="table mt-4">
        <thead class="thead bg-white">
            <tr>
                <th>Nome</th>
                <th>Palestrante</th>
                <th>Início</th>
                <th>Fim</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- CONTEÚDO DA TABELA -->
            @foreach ($events as $event)
                <tr>
                    <td class="align-middle">{{ $event->name }}</td>
                    <td class="align-middle">{{ $event->speaker_name }}</td>
                    <td class="align-middle">{{ $event->start_date_formatted }}</td>
                    <td class="align-middle">{{ $event->end_date_formatted }}</td>
                    <td class="align-middle"></td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $events->links() }}
@endsection
