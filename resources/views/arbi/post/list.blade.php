@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">投稿内容編集</div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">
                            イメージ
                        </label>

                        <label for="name" class="col-md-4 control-label">
                            タイトル
                        </label>

                        <label for="name" class="col-md-4 control-label">
                            登録日
                        </label>
                       
                        <label for="name" class="col-md-4 control-label">
                            表示可否
                        </label>

                        <a href='/post/edit' class="col-md-4 control-label">
                            編集
                        </a>

                        <label for="name" class="col-md-4 control-label">
                            削除
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
