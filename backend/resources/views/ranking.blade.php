
@extends('layouts.app')

@section('content')

  @include('elements.navigation')

  @include('elements.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card-header">
          <h2>本日のスゴウデ</h2>
        </div> 
        <table class="table table-bordered table-hover">
          <thead class="thead-light">
            <tr>
              <th class="text-nowrap">順位</th>
              <th class="text-nowrap">名前</th>
              <th class="text-nowrap">とくてん</th>
              <th class="text-nowrap">かまれた数</th>
              <th>あそんだ場所</th>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <td>1位</td>
              <td>ワニ子</td>
              <td>154点</td>
              <td>0回</td>
              <td>東京都</td>
            </tr>
            @if($rankings_today->count())
              @php
                  $i = 2;
              @endphp
              @foreach ($rankings_today as $ranking_today)
                  <tr>
                    <td>{{$i}}位</td>
                    <td>{{ $ranking_today->user->name }}</td>
                    <td>{{ $ranking_today->point }}点</td>
                    <td>{{ $ranking_today->bitten }}回</td>
                    <td>{{ config('consts.pref')[$ranking_today->user->pref] }}</td>
                    @isset($ranking_today->file_name)
                    @if ($ranking_today->file_name !== '#')
                     <img src="{{ asset('storage/img/' . $ranking_today->file_name) }}">    
                    @endif
                    @endisset
                  </tr>
                  @php
                      $i++;
                  @endphp
              @endforeach
            @endif

          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card-header">
          <h2>歴代のスゴウデ</h2>
        </div> 
        <table class="table table-bordered table-hover">
          <thead class="thead-light">
            <tr>
              <th class="text-nowrap">順位</th>
              <th class="text-nowrap">名前</th>
              <th class="text-nowrap">とくてん</th>
              <th class="text-nowrap">かまれた数</th>
              <th>あそんだ場所</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1位</td>
              <td>ワニ子</td>
              <td>154点</td>
              <td>0回</td>
              <td>東京都</td>
            </tr>
            @if($rankings_all->count())
              @php
                  $i = 2;
              @endphp
              @foreach ($rankings_all as $ranking_all)
                  <tr>
                    <td>{{$i}}位</td>
                    <td>{{ $ranking_all->user->name }}</td>
                    <td>{{ $ranking_all->point }}点</td>
                    <td>{{ $ranking_all->bitten }}回</td>
                    <td>{{ config('consts.pref')[$ranking_today->user->pref] }}</td>
                  </tr>
                  @php
                      $i++;
                  @endphp
              @endforeach
            @endif

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr>

  @include('elements.footer')

  @endsection