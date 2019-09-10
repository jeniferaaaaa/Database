@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">管理者一覧画面</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしました。

                    <div class="col-md-6">
                        <a href='/basic'>基本情報編集</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
