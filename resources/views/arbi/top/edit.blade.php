@extends('layouts.app')

@section('title')
<!--タイトル-->
<title>TOPページ編集内容確認｜Anyshare</title>
@endsection

@section('content')
<div class="top_confirm">
    <h2>TOPページ編集</h2><br />

    <!--入力欄-->
    <div class="input_confirm">
        <form method="POST" action="{{ url('top/confirm') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <p class=hissu>※<span>必須</span>は必須入力項目です。</p>
        <table>
        @foreach ($sites as $site)
            <tr>
                <td>
                    <span>必須</span>メイン画像<br /><br />
                    @if ($errors->has('main'))
                    <div class="error_main_pic">※{{ $errors->first('main') }}</div>
                    @endif
                </td>
                <td><input type="file" name="main">
                    @if ($site->main_path == '')
                    現在：なし
                    @else
                    現在：<img src="{{ asset($site->main_path) }}" width="200" height="130">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    サブ画像1<br /><br />
                    @if ($errors->has('sub1'))
                    <div class="error_main_pic">※{{ $errors->first('sub1') }}</div>
                    @endif
                </td>
                <td><input type="file" name="sub1">
                    @if ($site->sub_path1 == '')
                    現在：なし
                    @else
                    現在：<img src="{{ asset($site->sub_path1) }}" width="200" height="130">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    サブ画像2<br /><br />
                    @if ($errors->has('sub2'))
                    <div class="error_main_pic">※{{ $errors->first('sub2') }}</div>
                    @endif
                </td>
                <td><input type="file" name="sub2">
                    @if ($site->sub_path2 == '')
                    現在：なし
                    @else
                    現在：<img src="{{ asset($site->sub_path2) }}" width="200" height="130">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    サブ画像3<br /><br />
                    @if ($errors->has('sub3'))
                    <div class="error_main_pic">※{{ $errors->first('sub3') }}</div>
                    @endif
                </td>
                <td><input type="file" name="sub2">
                    @if ($site->sub_path3 == '')
                    現在：なし
                    @else
                    現在：<img src="{{ asset($site->sub_path3) }}" width="200" height="130">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <span>必須</span>サイト説明<br /><br />
                    <div class="error_site_exp">※サイト説明は必須です。</div>
                </td>
                <td><textarea name="site_exp" cols="40" rows="5" wrap="hard"></textarea></td>
            </tr>
        @endforeach
        </table>

        <!--確認・戻るボタン-->
        <div class="button">
            <a class="back" href="javascript:history.back();">戻る</a>
            <button type="submit" class="confirm">確認画面へ進む</button>
        </div>
        </form>
    </div>
</div>
@endsection
