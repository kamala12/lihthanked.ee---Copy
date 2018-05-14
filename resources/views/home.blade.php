@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="notification is-success">
                    <button class="delete"></button>
                    @if (session('status'))
                    <button class="delete"></button>
                            {{ session('status') }}
                    @endif
                        You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
