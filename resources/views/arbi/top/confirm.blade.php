@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TOPページ確認画面</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('top/confirm/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="main" class="col-md-4 control-label">
                            メイン画像：{{ $data['main'] }}
                            </label>
                        </div>    

                        <div class="form-group">
                            <label for="sub1" class="col-md-4 control-label">
                            サブ画像1：{{ $data['sub1'] }}
                            </label>
                        </div>    

                        <div class="form-group">
                            <label for="sub2" class="col-md-4 control-label">
                            サブ画像2：{{ $data['sub2'] }}
                            </label>
                        </div> 

                        <div class="form-group">
                            <label for="sub3" class="col-md-4 control-label">
                            サブ画像3：{{ $data['sub3'] }}
                            </label>
                        </div>    
  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    完了画面へ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
