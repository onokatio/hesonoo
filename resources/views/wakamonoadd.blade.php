@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
											@if (isset($wakamono))
											<div class="alert alert-primary" role="alert">
												既に投稿済みです。更新することができます。
											</div>
											@endif
            <div class="card my-4">
								<div id="headingReg" class="card-header">若者として投稿する(若者向け)
									<!-- <h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#reg" aria-expanded="false" aria-controls="reg">自分も投稿する</button>
									</h5> -->
								</div>
                <div id="reg" class="card-body" aria-labelledby="headingReg" data-parent="#accordion">
									@auth
										<form method="POST" action="{{ route('young') }}">
											{{ csrf_field() }}
											<div class="form-group">
												<label>自分の年齢</label>
												<input type="text" class="form-control" name="old" value="{{ isset($wakamono) ? $wakamono->old : ''}}"></input>
											</div>
											<div class="form-group">
												<label>お姉さんの年齢</label>
												<input type="text" class="form-control" name="wantold" value="{{ isset($wakamono) ? $wakamono->wantold : '' }}"></input>
											</div>
											<div class="form-group">
												<label>地域</label>
<select class="form-control" name="area" value="{{ isset($wakamono) ? $wakamono->area : ''}}">
<option value="{{ isset($wakamono) ? $wakamono->area : ''}}" selected>{{ isset($wakamono) ? $wakamono->area : '都道府県'}}</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select>
											</div>
											<div class="form-group">
												<label>自己紹介・簡単な説明など</label>
												<textarea class="form-control" name="description">{{ isset($wakamono) ? $wakamono->description : ''}}</textarea>
											</div>
											<button type="submit" class="btn btn-primary">{{ $wakamono ? '更新' : '投稿' }}</button>
										</form>
									@else
										<div>投稿するには、ログインしてください。</div>
										<a href="{{ route('login')}}" class="btn btn-primary">ログイン</a>
									@endauth
                </div>
            </div>
@endsection
        </div>
    </div>
</div>
