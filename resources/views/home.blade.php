@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
						<ul class="list-group my-4">
							<li class="list-group-item">ユーザー名: {{ Auth::user()->name }}</li>
							<li class="list-group-item">ユーザーID: {{ Auth::user()->id }}</li>
						</ul>
        </div>
    </div>
</div>
@endsection
