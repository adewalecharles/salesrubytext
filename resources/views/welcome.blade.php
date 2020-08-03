@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2">
                <div>
                    <a href="{{ url('create-author') }}">Add Author</a><hr>
                    <a href="{{ url('create-book') }}">Add Book</a><hr>
                </div>

            </div>
            <div class="col-md-8">
                @forelse ($books as $book)
                <div class="card col-md-6">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->title }}</h5>
                      <p class="card-text">{{ Str::limit($book->description ?? '', 20, '...') }}</p>
                      <a href="{{ url('show-book',$book->id) }}" class="btn btn-primary">View</a>
                      <form action="{{ url('delete-book', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE');
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                  </div>
                @empty
                  No Books yet!
                @endforelse

            </div>
        </div>
    </div>
</div>
@endsection
