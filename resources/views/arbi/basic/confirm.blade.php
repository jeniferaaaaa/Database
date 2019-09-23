@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">基本情報編集確認画面</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('basic/confirm/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                名前
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['name'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">
                                メールアドレス
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="email">{{ $data['email'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="site_name" class="col-md-4 control-label">
                                サイト名称
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="site_name">{{ $data['site_name'] }}</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="site_purpose" class="col-md-4 control-label">
                                サイト利用目的
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="site_purpose">{{ $data['site_purpose'] }}</label>
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
