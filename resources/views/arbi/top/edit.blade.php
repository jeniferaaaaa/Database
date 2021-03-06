@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TOPページ編集</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('top/confirm') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="main" class="col-md-4 control-label"> 
                            メイン画像
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('main') ? ' has-error' : '' }}">
                            <input type="file" name="main">
                        </div>

                        <div class="form-group">
                            <label for="sub1" class="col-md-4 control-label"> 
                            サブ画像1
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('sub1') ? ' has-error' : '' }}">
                            <input type="file" name="sub1">
                        </div>

                        <div class="form-group">
                            <label for="sub2" class="col-md-4 control-label"> 
                            サブ画像2
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('sub2') ? ' has-error' : '' }}">
                            <input type="file" name="sub2">
                        </div>

                        <div class="form-group">
                            <label for="sub3" class="col-md-4 control-label"> 
                            サブ画像3
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('sub3') ? ' has-error' : '' }}">
                            <input type="file" name="sub3">
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    確認画面へ
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
