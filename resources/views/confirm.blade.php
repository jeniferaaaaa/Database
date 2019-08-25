@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">サイト登録確認画面</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('form/confrim/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">お名前</label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['name'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">メールアドレス</label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="email">{{ $data['email'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">パスワード</label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="password">{{ $data['password'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">パスワード（確認）</label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="password_confirmation">{{ $data['password_confirmation'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="site_name" class="col-md-4 control-label">サイト名称</label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="site_name">{{ $data['site_name'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="domain" class="col-md-4 control-label">ドメイン</label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="domain">{{ $data['domain'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    申し込む
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
