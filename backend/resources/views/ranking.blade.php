
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
              <th class="text-nowrap">あそんだ場所</th>
              <th class="text-nowrap">写真</th>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <td>1位</td>
              <td>ワニ子</td>
              <td>154点</td>
              <td>0回</td>
              <td>東京都</td>
              <td><i class="far fa-image"></i></td>
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
                    <td>
                      @isset($ranking_today->file_name)
                        @if ($ranking_today->file_name !== '#')
                          <a href="{{ asset('storage/img/' . $ranking_today->file_name) }}" data-toggle="modal" data-target="#testModal">
                          <i class="far fa-image"></i>
                          </a>
                          <div class="d-none">
                            <img src="{{ asset('storage/img/' . $ranking_today->file_name) }}" id="imageresource">  
                          </div>
                        @endif
                      @endisset
                    </td>
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
              <th class="text-nowrap">あそんだ場所</th>
              <th class="text-nowrap">写真</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1位</td>
              <td>ワニ子</td>
              <td>154点</td>
              <td>0回</td>
              <td>東京都</td>
              <td><i class="far fa-image"></i></td>
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
                    @php
                      $i++;
                      $img = '<img src="' . "{{ asset('storage/img/' . $ranking_today->file_name) }}" . '">';
                    @endphp

                    <td>
                      @isset($ranking_today->file_name)
                        @if ($ranking_today->file_name !== '#')
                      <a href="{{ asset('storage/img/' . $ranking_today->file_name) }}" data-toggle="modal" data-target="#testModal" data-img="{{ $img }}">
                          <i class="far fa-image"></i>
                          </a>
                        @endif
                      @endisset
                    </td>
                  </tr>
              @endforeach
            @endif

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4><div class="modal-title" id="myModalLabel">そのときの写真</div></h4>
                <p class="notice_date">test</p>
            </div>
            <div class="modal-body">
              <div class="w-auto">
                <img id="imagepreview" class="img-fluid img-rounded" src="{{ asset('storage/img/' . $ranking_today->file_name) }}">
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">閉じる</button>
            </div>
        </div>
    </div>
</div>
  @include('elements.footer')

  @endsection