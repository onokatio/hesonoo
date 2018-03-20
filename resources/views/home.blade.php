@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
						<ul class="list-group my-4">
							<li class="list-group-item">ユーザーID: {{ Auth::user()->id }}</li>
							<li class="list-group-item">ユーザー名: {{ Auth::user()->name }}</li>
							<li class="list-group-item">メールアドレス: {{ Auth::user()->email }}</li>
						</ul>
						<a href="{{ __('Logout') }}" class="btn btn-success">ログアウト</a>
        </div>
    </div>
</div>
@endsection
