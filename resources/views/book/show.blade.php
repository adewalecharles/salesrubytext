@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>Title: {{ $book->title }}</div>
            <div>
                <p>{{ $book->description ?? ''}}</p>
            </div>
            <div>
                Price: #{{ $book->price ?? '' }}
            </div>
            <div>
                Author: {{ $book->author->first_name }} {{ $book->author->first_name }}
            </div>
        </div>
    </div>
</div>
@endsection
