@extends('layouts.app')

@section('content')

@include('elements.navigation')
@include('elements.header')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card-header">
                <h2>投稿</h2>
            </div> 
            <div class="form-group">
                {!! Form::label('username', '名前') !!}
                {!! Form::text('username', old('username'), [
                    'id' => 'username',
                    'class' => ['form-control', $errors->has('username') ? 'is-invalid' : ''],
                    'placeholder' => '名前',
                    'autocomplete' => 'username',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('username', 'プレイ店舗') !!}
                {!! Form::text('username', old('username'), [
                    'id' => 'username',
                    'class' => ['form-control', $errors->has('username') ? 'is-invalid' : ''],
                    'placeholder' => 'プレイ店舗',
                    'autocomplete' => 'username',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('username', '点数') !!}
                {!! Form::text('username', old('username'), [
                    'id' => 'username',
                    'class' => ['form-control', $errors->has('username') ? 'is-invalid' : ''],
                    'placeholder' => '点数',
                    'autocomplete' => 'username',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::file('file') !!}
            </div>
        </div>
    </div>
</div>
@include('elements.footer')


@endsection