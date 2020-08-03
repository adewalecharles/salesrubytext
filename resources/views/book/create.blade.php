@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('add-book') }}" method="POST">
                @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" autocomplete="title" required>
                @error('title')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea cols="10" rows="30" name="description" id="description" class="form-control @error('description') is-invalid @enderror" autocomplete="description" required></textarea>
                @error('description')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Author</label>
                <select name="author_id" id="author_id" class="form-control @error('author_id') is-invalid @enderror">
                    <option value="null">Choose an author</option>
                    @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="pages">Pages</label>
                <input type="number" name="pages" id="pages" class="form-control @error('pages') is-invalid @enderror" autocomplete="pages">
                @error('pages')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" autocomplete="price">
                @error('price')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" autocomplete="image">
                @error('image')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
