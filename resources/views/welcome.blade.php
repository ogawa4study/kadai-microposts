@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-senter">
            <h1>Welocome to the Microposts</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection