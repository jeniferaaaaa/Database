@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">カテゴリ編集</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('category/edit/confirm') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('category_name') ? ' has-error' : '' }}">
                            <label for="category_name" class="col-md-4 control-label">
                                カテゴリ名称
                            </label>

                            <div class="col-md-6">
                                <input id="category_name" type="text" class="form-control" name="category_name">

                            @if ($errors->has('category_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category_name') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_path" class="col-md-4 control-label"> 
                            カテゴリ画像
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('category_path') ? ' has-error' : '' }}">
                            <input type="file" name="category_path">
                        </div>

                        <div class="form-group {{ $errors->has('category_text') ? ' has-error' : '' }}">
                            <label for="category_text" class="col-md-4 control-label">
                                カテゴリ説明
                            </label>

                            <div class="col-md-6">
                                <input id="category_text" type="text" class="form-control" name="category_text">

                            @if ($errors->has('category_text'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category_text') }}</strong>
                                </span>
                            @endif
                            </div>
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
