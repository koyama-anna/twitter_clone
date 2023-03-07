@extends('layouts.app')

@section('content')
@if (Auth::check())
  <p>ログイン中ユーザー: {{$user->name . ' メール' . $user->email . ''}}</p>
@else
  <p>ログインしてください。（<a href="/login">ログイン</a>｜
  <a href="/register">登録</a>）</p>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($all_users as $user)
                    <div class="card">
                        <div class="card-haeder p-3 w-100 d-flex">
                            <img src="{{ $user->profile_image }}" class="rounded-circle" width="50" height="50">
                            <div class="ml-2 d-flex flex-column">
                                <p class="mb-0">{{ $user->name }}</p>
                                <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="my-4 d-flex justify-content-center">
            {{ $all_users->links() }}
        </div>
    </div>
@endsection