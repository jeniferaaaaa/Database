@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">管理者一覧画面</div>

                <div class="panel-body">

                    <div class="col-md-6">
                        <a href='/basic'>基本情報編集</a>
                    </div>

                    <div class="col-md-6">
                        <a href='/item'>表示項目編集</a>
                    </div>

                    <div class="col-md-6">
                        <a href='/design'>デザイン設定編集</a>
                    </div>

                    <div class="col-md-6">
                        <a href='/top'>TOPページ編集</a>
                    </div>

                    <div class="col-md-6">
                        <a href='/category/list'>カテゴリ編集</a>
                    </div>

                    <div class="col-md-6">
                        <a href='/post'>投稿内容編集</a>
                    </div>

                    <div class="col-md-6">
                        <a href='/change_pass'>パスワード変更</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
