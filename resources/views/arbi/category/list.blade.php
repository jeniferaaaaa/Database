@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">カテゴリ編集</div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">
                            カテゴリ名称
                        </label>

                        <label for="name" class="col-md-4 control-label">
                            登録
                        </label>

                        <label for="name" class="col-md-4 control-label">
                            削除
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/category/edit" type="button" class="btn btn-primary">カテゴリ新規登録</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
