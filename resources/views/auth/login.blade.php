@extends('app')

@section('content')
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <!-- <div class="mb-3">
            <label for="api_token" class="form-label">API Token</label>
            <input type="text" name="api_token" id="api_token" class="form-control">
        </div> -->
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
