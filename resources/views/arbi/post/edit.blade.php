@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">カテゴリ編集</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('post/edit/confirm') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">
                                名前
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $dataDetail->name }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image_path" class="col-md-4 control-label"> 
                            画像
                            </label>

                            <div class="form-group{{ $errors->has('image_path') ? ' has-error' : '' }}">
                                <input type="file" name="image_path">
                            </div>
                        </div>

                        @foreach ( $siteObjects as $siteData)

                        @if ( $siteData->at1_name )
                        <div class="form-group {{ $errors->has('attribute1') ? ' has-error' : '' }}">
                            <label for="attribute1" class="col-md-4 control-label">
                                {{ $siteData->at1_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="attribute1" type="text" class="form-control" name="attribute1" value="{{ $dataDetail->attribute1 }}">

                            @if ($errors->has('attribute1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('attribute1') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->at2_name )
                        <div class="form-group {{ $errors->has('attribute2') ? ' has-error' : '' }}">
                            <label for="attribute2" class="col-md-4 control-label">
                                {{ $siteData->at2_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="attribute2" type="text" class="form-control" name="attribute2" value="{{ $dataDetail->attribute2 }}">

                            @if ($errors->has('attribute2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('attribute2') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->at3_name )
                        <div class="form-group {{ $errors->has('attribute3') ? ' has-error' : '' }}">
                            <label for="attribute3" class="col-md-4 control-label">
                                {{ $siteData->at3_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="attribute3" type="text" class="form-control" name="attribute3" value="{{ $dataDetail->attribute3 }}">

                            @if ($errors->has('attribute3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('attribute3') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->at4_name )
                        <div class="form-group {{ $errors->has('attribute4') ? ' has-error' : '' }}">
                            <label for="attribute4" class="col-md-4 control-label">
                                {{ $siteData->at4_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="attribute4" type="text" class="form-control" name="attribute4" value="{{ $dataDetail->attribute4 }}">

                            @if ($errors->has('attribute4'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('attribute4') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->at5_name )
                        <div class="form-group {{ $errors->has('attribute5') ? ' has-error' : '' }}">
                            <label for="attribute5" class="col-md-4 control-label">
                                {{ $siteData->at5_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="attribute5" type="text" class="form-control" name="attribute5" value="{{ $dataDetail->attribute5 }}">

                            @if ($errors->has('attribute5'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('attribute5') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->dt1_name )
                        <div class="form-group {{ $errors->has('detail1') ? ' has-error' : '' }}">
                            <label for="detail1" class="col-md-4 control-label">
                                {{ $siteData->dt1_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="detail1" type="text" class="form-control" name="detail1" value="{{ $dataDetail->detail1 }}">

                            @if ($errors->has('detail1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('detail1') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->dt2_name )
                        <div class="form-group {{ $errors->has('detail2') ? ' has-error' : '' }}">
                            <label for="detail2" class="col-md-4 control-label">
                                {{ $siteData->dt2_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="detail2" type="text" class="form-control" name="detail2" value="{{ $dataDetail->detail2 }}">

                            @if ($errors->has('detail2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('detail2') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

                        @if ( $siteData->dt3_name )
                        <div class="form-group {{ $errors->has('detail3') ? ' has-error' : '' }}">
                            <label for="detail3" class="col-md-4 control-label">
                                {{ $siteData->dt3_name }}
                            </label>

                            <div class="col-md-6">
                                <input id="detail3" type="text" class="form-control" name="detail3" value="{{ $dataDetail->detail3 }}">

                            @if ($errors->has('detail3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('detail3') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endif

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
