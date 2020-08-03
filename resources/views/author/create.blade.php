@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('add-author') }}" method="POST">
                @csrf
                hello
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" autocomplete="first_name" required>
                @error('first_name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" autocomplete="last_name" required>
                @error('last_name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" required>
                @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" autocomplete="phone">
                @error('phone')
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
