@extends('layouts.app')

@section('content')

@include('elements.navigation')
@include('elements.header')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ Form::open(['method' => 'GET', 'route' => 'result.submit']) }}
            <div class="card-header">
                <h2>リザルト投稿</h2>
            </div> 
            <div class="form-group mt-4">
                {!! Form::label('name', '名前') !!}
                {!! Form::text('name', old('name'), [
                    'id' => 'name',
                    'class' => ['form-control', $errors->has('name') ? 'is-invalid' : ''],
                    'placeholder' => 'お名前',
                    'autocomplete' => 'name',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('point', '点数') !!}
                {!! Form::text('point', old('point'), [
                    'id' => 'point',
                    'class' => ['form-control', $errors->has('point') ? 'is-invalid' : ''],
                    'placeholder' => '点数',
                    'autocomplete' => 'point',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('bitten', '噛まれた数') !!}
                {!! Form::text('bitten', old('bitten'), [
                    'id' => 'bitten',
                    'class' => ['form-control', $errors->has('bitten') ? 'is-invalid' : ''],
                    'placeholder' => '噛まれた回数',
                    'autocomplete' => 'bitten',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('store', 'プレイ店舗') !!}
                {!! Form::text('store', old('store'), [
                    'id' => 'store',
                    'class' => ['form-control', $errors->has('store') ? 'is-invalid' : ''],
                    'placeholder' => 'プレイ店舗',
                    'autocomplete' => 'store',
                ]) !!}
            </div>

            <div class="form-group mt-5">
                {!! Form::file('file') !!}
            </div>

        {!! Form::close() !!}
        </div>
    </div>
</div>
@include('elements.footer')


@endsection