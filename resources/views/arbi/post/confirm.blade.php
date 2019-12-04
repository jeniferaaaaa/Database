@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">カテゴリ編集確認画面</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('post/edit/confirm/done') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                名前
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['nameData'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sns_keyword" class="col-md-4 control-label">
                                SNSキーワード
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="sns_keyword">{{ $data['keywordData'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image_path" class="col-md-4 control-label">
                                画像
                            </label>

                            <div class="col-md-6">
                                <img src="/{{ $data['image_read_path'] }}" width="200" height="130">
                            </div>
                        </div>

                        @foreach ( $siteObjects as $siteData)

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->at1_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['at1Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->at2_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['at2Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->at3_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['at3Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->at4_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['at4Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->at5_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['at5Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->dt1_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['dt1Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->dt2_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['dt2Data'] }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                                {{ $siteData->dt3_name }}
                            </label>

                            <div class="col-md-6">
                                <label class="col-md-4 control-label" name="name">{{ $data['dt3Data'] }}</label>
                            </div>
                        </div>

                        @endforeach

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
