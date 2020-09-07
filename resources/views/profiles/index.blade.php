@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="https://images.unsplash.com/photo-1599205940775-6eb9db72cbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" class="rounded-circle" style="height: 13em; width: 13em;">
    </div>
    <div class="col-9 pt-5 ">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>

        @can('update',$user->profile)
          <a href="/p/create">Add new post </a>
        @endcan


      </div>

      @can('update',$user->profile)
      <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
      @endcan

      <div class="d-flex">
        <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
        <div class="pr-5"><strong>153k</strong> followers</div>
        <div class="pr-5"><strong>153gp</strong> following</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href="#">{{ $user->profile->url ?? 'N/a'}}</a></div>
    </div>
  </div>

  <div class="row pt-5">
    @foreach($user->posts as $post)
        <div class="col-4 pb-4">
          <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
          </a>

        </div>
    @endforeach

  </div>

</div>
@endsection
