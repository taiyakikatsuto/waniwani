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
            
            @guest                
            <div class="form-group mt-4">
                {!! Form::label('name', '名前') !!}
                {!! Form::text('name', old('name'), [
                    'id' => 'email',
                    'class' => ['form-control', $errors->has('name') ? 'is-invalid' : ''],
                    'placeholder' => 'お名前',
                    'autocomplete' => 'name',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', old('email'), [
                    'id' => 'email',
                    'class' => ['form-control', $errors->has('name') ? 'is-invalid' : ''],
                    'placeholder' => 'メールアドレス',
                    'autocomplete' => 'email',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::password('password', [
                    'id' => 'password',
                    'class' => ['form-control', $errors->has('password') ? 'is-invalid' : ''],
                    'placeholder' => 'パスワード',
                    'autocomplete' => 'password',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'パスワード確認') !!}
                {!! Form::password('password_confirmation', [
                    'id' => 'password_confirmation',
                    'class' => ['form-control', $errors->has('password_confirmation') ? 'is-invalid' : ''],
                    'placeholder' => 'パスワード再入力',
                    'autocomplete' => 'password_confirmation',
                ]) !!}
            </div>
            @endguest



            <div class="form-group mt-4">
                {!! Form::label('point', '点数') !!}
                {!! Form::number('point', old('point'), [
                    'id' => 'point',
                    'class' => ['form-control', $errors->has('point') ? 'is-invalid' : ''],
                    'placeholder' => '点数',
                    'autocomplete' => 'point',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('bitten', '噛まれた数') !!}
                {!! Form::number('bitten', old('bitten'), [
                    'id' => 'bitten',
                    'class' => ['form-control', $errors->has('bitten') ? 'is-invalid' : ''],
                    'placeholder' => '噛まれた回数',
                    'autocomplete' => 'bitten',
                ]) !!}
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
                        'class' => ['form-control', $errors->has('store') ? 'is-invalid' : ''],
                        'placeholder' => '---機種---',
                        'autocomplete' => 'model_id',
                    ]
                ) !!}
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
                        'class' => ['form-control', $errors->has('store') ? 'is-invalid' : ''],
                        'placeholder' => '---プレイタイプ---',
                        'autocomplete' => 'play_type',
                    ]
                ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('store_id', 'プレイ店舗') !!}
                {!! Form::select('store_id', 
                    [
                        '1' => 'ラウンドワン東淀川',
                        '2' => 'ラウンドワン津・高茶屋'
                    ],
                    old('store'), 
                    [
                        'id' => 'store_id',
                        'class' => ['form-control', $errors->has('store') ? 'is-invalid' : ''],
                        'placeholder' => '---プレイ店舗---',
                        'autocomplete' => 'store',
                    ]
                ) !!}
            </div>

            <div class="form-group mt-5">
                {!! Form::file('file') !!}
            </div>

            <div class="text-right">
                <button class="btn btn-primary">送信</button>
            </div>

        {!! Form::close() !!}
        </div>
    </div>
</div>
@include('elements.footer')


@endsection