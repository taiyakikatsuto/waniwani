
@extends('layouts.app')

@section('content')

  @include('elements.navigation')

  @include('elements.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <div class="card-header">
            <h2>本日のランキング</h2>
          </div> 
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
            <tr>
              <th>順位</th>
              <th>名前</th>
              <th>点数</th>
              <th>プレイ店舗</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>ワニ子</td>
              <td>154</td>
              <td>モーリーファンタジー淡路</td>
            </tr>
            <tr>
              <td>2</td>
              <td>ワニ男</td>
              <td>147</td>
              <td>ラウンドワン大阪</td>
            </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>

  <hr>

  @include('elements.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

  @endsection