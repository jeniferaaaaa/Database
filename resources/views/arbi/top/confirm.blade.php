@extends('layouts.app')

@section('title')
<!--タイトル-->
<title>TOPページ編集内容確認｜Anyshare</title>
@endsection

@section('content')
<div class="top_confirm">
    <h2>TOPページ編集内容確認</h2><br />

    <!--入力欄-->
    <div class="input_confirm">
        <form method="POST" action="{{ url('top/confirm/done') }}">
        {{ csrf_field() }}

            <table>
                <tr>
                    <td><span>必須</span>メイン画像<br /><br /></td>
                    <td><img src="/{{ $data['main'] }}" width="200" height="130"></td>
                </tr>
                <tr>
                    <td>サブ画像1<br /><br /></td>
                    <td>
                        @if ($data['sub1'] == '')
                        @else
                            <img src="/{{ $data['sub1'] }}" width="200" height="130">
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>サブ画像2<br /><br /></td>
                    <td>
                        @if ($data['sub2'] == '')
                        @else
                            <img src="/{{ $data['sub2'] }}" width="200" height="130">
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>サブ画像3<br /><br /></td>
                    <td>
                        @if ($data['sub3'] == '')
                        @else
                            <img src="/{{ $data['sub3'] }}" width="200" height="130">
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>サイト説明<br /><br /></td>
                    <td><p class="email">{{ $data['site_text'] }}</p></td>
                </tr>
            </table>

            <h3>この内容でよろしいでしょうか？</h3>
            <!--確認・戻るボタン-->
            <div class="button">
                <a class="back" href="javascript:history.back();">編集画面に戻る</a>
                <button type="submit" class="ok">ＯＫ</button>
            </div>
        </form>
    </div>
</div>
@endsection
