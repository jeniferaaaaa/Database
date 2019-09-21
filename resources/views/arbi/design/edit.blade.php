@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">デザイン設定</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('design/confirm') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('layout') ? ' has-error' : '' }}">
                            <input type="radio" name="layout" value="1">レイアウト1
                            <input type="radio" name="layout" value="2">レイアウト2
                            <input type="radio" name="layout" value="3">レイアウト3
                            <input type="radio" name="layout" value="4">レイアウト4
                            <input type="radio" name="layout" value="5">レイアウト5
                        </div>

                        <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                            <input type="radio" name="color" value="blue">青
                            <input type="radio" name="color" value="red">赤
                            <input type="radio" name="color" value="green">緑
                            <input type="radio" name="color" value="white">白
                            <input type="radio" name="color" value="dark">黒
                        </div>

                        <div class="form-group{{ $errors->has('attribute1') ? ' has-error' : '' }}">


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
