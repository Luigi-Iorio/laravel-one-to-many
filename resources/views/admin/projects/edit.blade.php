@extends('layouts.admin')

@section('content')
    <div class="container edit py-5">
        <h2 class="mb-5">Modifica Il Progetto</h2>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="stack" class="form-label">Tecnologie</label>
                <input type="text" class="form-control" name="stack" id="stack"
                    value="{{ old('stack', $project->stack) }}">
                @error('stack')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control"
                    value="{{ old('slug', $project->slug) }}">
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-warning">Modifica</button>
            </div>
        </form>
    </div>
@endsection
