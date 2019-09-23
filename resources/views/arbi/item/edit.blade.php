@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">表示項目設定</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('item/confirm') }}">
                        {{ csrf_field() }}

                        @foreach ($sites as $site)

                        <div class="form-group{{ $errors->has('attribute1') ? ' has-error' : '' }}">
                            <label for="attribute1" class="col-md-4 control-label">属性1</label>

                            <div class="col-md-6">
                                <input id="attribute1" type="text" class="form-control" name="attribute1" value="{{ $site->at1_name }}">

                                @if ($errors->has('attribute1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attribute1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('attribute2') ? ' has-error' : '' }}">
                            <label for="attribute2" class="col-md-4 control-label">属性2</label>

                            <div class="col-md-6">
                                <input id="attribute2" type="text" class="form-control" name="attribute2" value="{{ $site->at2_name }}">

                                @if ($errors->has('attribute2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attribute2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('attribute3') ? ' has-error' : '' }}">
                            <label for="attribute3" class="col-md-4 control-label">属性3</label>

                            <div class="col-md-6">
                                <input id="attribute3" type="text" class="form-control" name="attribute3" value="{{ $site->at3_name }}">

                                @if ($errors->has('attribute3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attribute3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('attribute4') ? ' has-error' : '' }}">
                            <label for="attribute4" class="col-md-4 control-label">属性4</label>

                            <div class="col-md-6">
                                <input id="attribute4" type="text" class="form-control" name="attribute4" value="{{ $site->at4_name }}">

                                @if ($errors->has('attribute4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attribute4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('attribute5') ? ' has-error' : '' }}">
                            <label for="attribute5" class="col-md-4 control-label">属性5</label>

                            <div class="col-md-6">
                                <input id="attribute5" type="text" class="form-control" name="attribute5" value="{{ $site->at5_name }}">

                                @if ($errors->has('attribute5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attribute5') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('detail1') ? ' has-error' : '' }}">
                            <label for="detail1" class="col-md-4 control-label">詳細説明1</label>

                            <div class="col-md-6">
                                <input id="detail1" type="text" class="form-control" name="detail1" value="{{ $site->dt1_name }}">

                                @if ($errors->has('detail1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('detail2') ? ' has-error' : '' }}">
                            <label for="detail2" class="col-md-4 control-label">詳細説明2</label>

                            <div class="col-md-6">
                                <input id="detail2" type="text" class="form-control" name="detail2" value="{{ $site->dt2_name }}">

                                @if ($errors->has('detail2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('detail3') ? ' has-error' : '' }}">
                            <label for="detail3" class="col-md-4 control-label">詳細説明3</label>

                            <div class="col-md-6">
                                <input id="detail3" type="text" class="form-control" name="detail3" value="{{ $site->dt3_name }}">

                                @if ($errors->has('detail3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @endforeach

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
