@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
        </div>
						<div class="card-columns">
						@foreach ($wakamonoList as $wakamono)
            	<div class="card">
                <div class="card-body">
									<h5 class="card-title">{{ $wakamono->username }} ({{ $wakamono->old}}歳) 希望:{{ $wakamono->wantold }}歳</h5>
									<h6 class="card-subtitle mb-2 text-muted">{{ $wakamono->area }}</h6>
									<p class="card-text">{{ $wakamono->description }}</p>
								</div>
							</div>
						@endforeach
						</div>
    </div>
</div>
@endsection
