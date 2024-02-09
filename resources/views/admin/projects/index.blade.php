@extends('layouts.admin')

@section('content')
    <div class="container index py-5">
        {{-- messaggi alla cancellazione, modifica, creazione del progetto --}}
        @if (session('message'))
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-warning-subtle">
                        <strong class="me-auto">Nuovo Messaggio</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body bg-warning">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        @endif
        {{-- /messaggi alla cancellazione, modifica, creazione del progetto --}}

        {{-- lista progetti --}}
        <ul class="row p-0 g-3">
            @foreach ($projects as $project)
                <li class="card col-8 mx-auto p-0 rounded-4">
                    <div class="card-header p-4">
                        <h3 class="m-0">{{ $project->title }}</h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="cont">
                            <h5>Slug:</h5>
                            <p>{{ $project->slug }}</p>
                        </div>
                        <div class="cont">
                            <h5>Stack:</h5>
                            <p>{{ $project->stack }}</p>
                        </div>
                        <div class="cont">
                            <h5>Descrizione: </h5>
                            <p>{{ $project->description }}</p>
                        </div>
                        <div class="buttons d-flex flex-wrap gap-2">
                            <a class="btn dettaglio" href="{{ route('admin.projects.show', $project) }}">Dettaglio</a>
                            <div class="delete">
                                <form action="{{ route('admin.projects.show', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button role="button" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {{-- /lista progetti --}}
    </div>
@endsection
