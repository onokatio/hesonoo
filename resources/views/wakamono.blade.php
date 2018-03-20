@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">自分も投稿する</div>

                <div class="card-body">
									@auth
										<form>
											<div class="form-group">
												<label>年齢</label>
												<input type="text" class="form-control" id="old"></input>
											</div>
											<div class="form-group">
												<label>自己紹介</label>
												<textarea class="form-control" id="description"></textarea>
											</div>
											<button type="submit" class="btn btn-primary">投稿</button>
										</form>
									@else
										<div>投稿するには、ログインしてください。</div>
										<a href="{{ route('login')}}" class="btn btn-primary">ログイン</a>
									@endauth
                </div>
            </div>
						@foreach ($wakamonoList as $wakamono)
							{{ $wakamono->id }}
						@endforeach
        </div>
    </div>
</div>
@endsection
