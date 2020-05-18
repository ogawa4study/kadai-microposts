@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
            <!--共通内容→card.blade.phpへ-->
            <!--<div class="card">-->
            <!--    <div class="card-header">-->
            <!--        <h3 class="card-title">{{ $user->name}}</h3>-->
            <!--    </div>-->
            <!--    <div class="card-body">-->
            <!--        <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">-->
            <!--    </div>-->
            <!--</div>-->
            <!--@include('user_follow.follow_button', ['user' => $user])-->
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            <!--共通内容→navtabs.blade.phpへ-->
            <!--<ul class="nav nav-tabs nav-justified mb-3">-->
            <!--    <li class="nav nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="nav-link" {{ Request::is('users/'. $user->id) ? 'active' : '' }}>TimeLine<span class="badge-secondary">{{ $count_microposts }}</span></a></li>-->
            <!--    <li class="nav nav-item"><a href="#" class="nav-link">Followings</a></li>-->
            <!--    <li class="nav nav-item"><a href="#" class="nav-link">Followers</a></li>-->
            <!--</ul>-->
            @if (Auth::id() == $user->id)
                {!! Form::open(['route' => 'microposts.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class => 'form-control', 'rows' => '2']) !!}
                        {!! Form::submit('Post', ['class' => 'btn btm-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            @endif
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection