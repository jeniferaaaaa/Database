@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">表示項目設定確認画面</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('item/confirm/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="attribute1" class="col-md-4 control-label">
                                属性1
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="attribute1">{{ $data['attribute1'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="attribute2" class="col-md-4 control-label">
                                属性2
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="attribute2">{{ $data['attribute2'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="attribute3" class="col-md-4 control-label">
                                属性3
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="attribute3">{{ $data['attribute3'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="attribute4" class="col-md-4 control-label">
                                属性4
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="attribute4">{{ $data['attribute4'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="attribute5" class="col-md-4 control-label">
                                属性5
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="attribute5">{{ $data['attribute5'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="detail1" class="col-md-4 control-label">
                                詳細1
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="detail1">{{ $data['detail1'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="detail2" class="col-md-4 control-label">
                                詳細2
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="detail2">{{ $data['detail2'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="detail3" class="col-md-4 control-label">
                                詳細3
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="detail3">{{ $data['detail3'] }}</label>
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
