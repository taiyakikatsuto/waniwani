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
                {!! Form::label('username', 'ユーザID') !!}
                {!! Form::text('username', old('username'), [
                    'id' => 'username',
                    'class' => ['form-control', $errors->has('username') ? 'is-invalid' : ''],
                    'placeholder' => 'ユーザID',
                    'autocomplete' => 'username',
                ]) !!}
        
            </div>
        </div>
    </div>
</div>
@include('elements.footer')


@endsection