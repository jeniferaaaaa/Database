@extends('layouts.app')

@section('title')
<!--タイトル-->
<title>投稿内容確認｜Anyshare</title>
@endsection

@section('content')
<!--投稿編集内容確認欄-->
<div class="post_edit_confirm">
    <h2>投稿編集内容確認</h2><br />

    <!--入力欄-->
    <div class="input_confirm">
        <form method="POST" action="{{ url('post/edit/confirm/done') }}">
        {{ csrf_field() }}
            <table>
                <tr>
                    <td><span>必須</span>名前<br /><br /></td>
                    <td><p class="name">{{ $data['nameData'] }}</p></td>
                </tr>
                <tr>
                    <td><span>必須</span>SNSキーワード<br /><br /></td>
                    <td><p class="sns_keyword">{{ $data['keywordData'] }}</p></td>
                </tr>
                <tr>
                    <td>画像<br /><br /></td>
                    <td><p class="picture"><img src="/{{ $data['image_read_path'] }}" width="200" height="130"></p></td>
                </tr>
                <tr>
                    <td><span>必須</span>名前<br /><br /></td>
                    <td><p class="name">{{ $data['nameData'] }}</p></td>
                </tr>
                <tr>
                    <td><span>必須</span>名前<br /><br /></td>
                    <td><p class="name">{{ $data['nameData'] }}</p></td>
                </tr>
                @foreach ( $siteObjects as $siteData)
                <tr>
                    <td><span>必須</span>{{ $siteData->at1_name }}<br /><br /></td>
                    <td><p class="type">{{ $data['at1Data'] }}</p></td>
                </tr>
                <tr>
                    <td>{{ $siteData->at2_name }}<br /><br /></td>
                    <td><p class="price">{{ $data['at2Data'] }}</p></td>
                </tr>
                <tr>
                    <td>{{ $siteData->at3_name }}<br /><br /></td>
                    <td><p class="breed">{{ $data['at3Data'] }}</p></td>
                </tr>
                <tr>
                    <td>{{ $siteData->at4_name }}<br /><br /></td>
                    <td><p class="color">{{ $data['at4Data'] }}</p></td>
                </tr>
                <tr>
                    <td>{{ $siteData->at5_name }}<br /><br /></td>
                    <td><p class="fluffy">{{ $data['at5Data'] }}</p></td>
                </tr>
                <tr>
                    <td><span>必須</span>{{ $siteData->dt1_name }}<br /><br /></td>
                    <td><p class="type">{{ $data['dt1Data'] }}</p></td>
                </tr>
                <tr>
                    <td>{{ $siteData->dt2_name }}<br /><br /></td>
                    <td><p class="type">{{ $data['dt2Data'] }}</p></td>
                </tr>
                <tr>
                    <td>{{ $siteData->dt3_name }}<br /><br /></td>
                    <td><p class="type">{{ $data['dt3Data'] }}</p></td>
                </tr>
                @endforeach
            </table>

            <div class="button">
                <a class="back" href="javascript:history.back();">編集画面に戻る</a>
                <button type="submit" class="ok">ＯＫ</button>
            </div>
        </form>
    </div>
</div>
@endsection
