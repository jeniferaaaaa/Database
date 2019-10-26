@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">パスワード変更</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('change_pass/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('old_password') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">
                                現在のパスワード
                            </label>

                            <div class="col-md-6">
                                <input id="old_password" type="password" class="form-control" name="old_password">

                            @if ($errors->has('old_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('old_password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('new_password') ? ' has-error' : '' }}">
                            <label for="new_password" class="col-md-4 control-label">
                                新しいパスワード
                            </label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password">

                            @if ($errors->has('new_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('new_password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('new_password-confirmation') ? ' has-error' : '' }}">
                            <label for="new_password-confirmation" class="col-md-4 control-label">
                                新しいパスワード（確認）
                            </label>

                            <div class="col-md-6">
                                <input id="new_password-confirmation" type="password" class="form-control" name="new_password-confirmation">

                            @if ($errors->has('new_password-confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('new_password-confirmation') }}</strong>
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
