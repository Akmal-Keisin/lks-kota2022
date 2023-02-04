@extends('auth.layout.main')
@section('title', 'Logout')
@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="card p-5 m-5">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
