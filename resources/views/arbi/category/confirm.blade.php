@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">カテゴリ編集確認画面</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('category/edit/confirm/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="category_name" class="col-md-4 control-label">
                                カテゴリ名称
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="category_name">{{ $data['category_name'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_path" class="col-md-4 control-label">
                                カテゴリ画像
                            </label>

                            <div class="col-md-6">
                                <img src="/{{ $data['category_read_path'] }}" width="200" height="130">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_text" class="col-md-4 control-label">
                                カテゴリ説明文
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="category_text">{{ $data['category_text'] }}</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    編集完了
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
