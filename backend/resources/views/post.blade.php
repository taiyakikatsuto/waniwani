@extends('layouts.app')

@section('content')

@include('elements.navigation')
@include('elements.header')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ Form::open(['method' => 'POST', 'route' => 'result.submit']) }}
            {{ Form::token() }}
            <div class="card-header">
                <h2>リザルト投稿</h2>
            </div>

            <div class="form-group mt-4">
                {!! Form::label('point', '点数') !!}
                {!! Form::number('point', old('point'), [
                    'id' => 'point',
                    'class' => ['form-control', $errors->has('point') ? 'is-invalid' : ''],
                    'placeholder' => '点数',
                    'autocomplete' => 'point',
                ]) !!}
                @error('point')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('bitten', '噛まれた数') !!}
                {!! Form::number('bitten', old('bitten'), [
                    'id' => 'bitten',
                    'class' => ['form-control', $errors->has('bitten') ? 'is-invalid' : ''],
                    'placeholder' => '噛まれた回数',
                    'autocomplete' => 'bitten',
                ]) !!}
                @error('bitten')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('model_id', '機種') !!}
                {!! Form::select('model_id', 
                    [
                        '1' => 'ワニワニパニックR',
                        '2' => '初代ワニワニパニック'
                    ],
                    old('model_id'), 
                    [
                        'id' => 'model_id',
                        'class' => ['form-control', $errors->has('model_id') ? 'is-invalid' : ''],
                        'placeholder' => '---機種---',
                        'autocomplete' => 'model_id',
                    ]
                ) !!}
                @error('model_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('play_type', 'プレイタイプ') !!}
                {!! Form::select('play_type', 
                    [
                        '1' => '1人プレイ',
                        '2' => '2人プレイ'
                    ],
                    old('play_type'), 
                    [
                        'id' => 'play_type',
                        'class' => ['form-control', $errors->has('play_type') ? 'is-invalid' : ''],
                        'placeholder' => '---プレイタイプ---',
                        'autocomplete' => 'play_type',
                    ]
                ) !!}
                @error('play_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('file', 'プレイ結果の画像') !!}
                <div class="custom-file form-control-sm">
                {!! Form::file('file', old('file'), 
                    [
                        'id' => 'file',
                        'class' => ['custom-file-input', $errors->has('file') ? 'is-invalid' : ''],
                    ]
                )!!}
                <label class="custom-file-label" for="file">プレイ結果の画像</label>
                </div>
            </div>

            @guest                
            <div class="form-group mt-5">
                {!! Form::label('name', '名前') !!}
                {!! Form::text('name', old('name'), [
                    'id' => 'email',
                    'class' => ['form-control', $errors->has('name') ? 'is-invalid' : ''],
                    'placeholder' => 'お名前',
                    'autocomplete' => 'name',
                ]) !!}
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('pref', '都道府県') !!}
                {!! Form::select('pref', config('consts.pref'), old('pref'), 
                    [
                        'id' => 'pref',
                        'class' => ['form-control', $errors->has('pref') ? 'is-invalid' : ''],
                        'placeholder' => '---都道府県---',
                        'autocomplete' => 'pref',
                    ]
                ) !!}
                @error('pref')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', old('email'), [
                    'id' => 'email',
                    'class' => ['form-control', $errors->has('email') ? 'is-invalid' : ''],
                    'placeholder' => 'メールアドレス',
                    'autocomplete' => 'email',
                ]) !!}
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::password('password', [
                    'id' => 'password',
                    'class' => ['form-control', $errors->has('password') ? 'is-invalid' : ''],
                    'placeholder' => 'パスワード',
                    'autocomplete' => 'password',
                ]) !!}
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'パスワード確認') !!}
                {!! Form::password('password_confirmation', [
                    'id' => 'password_confirmation',
                    'class' => ['form-control', $errors->has('password_confirmation') ? 'is-invalid' : ''],
                    'placeholder' => 'パスワード再入力',
                    'autocomplete' => 'password_confirmation',
                ]) !!}
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endguest

            <div class="text-right">
                <button class="btn btn-primary">送信</button>
            </div>

        {!! Form::close() !!}
        </div>
    </div>
</div>
@include('elements.footer')

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script>
  bsCustomFileInput.init();
</script>
@endsection