@extends('layouts.app')

@section('title')
<!--タイトル-->
<title>投稿内容編集｜Anyshare</title>
@endsection

@section('content')
<!--投稿内容編集欄-->
<div class="post_edit">
    <h2>投稿内容編集</h2><br />

<!--入力欄-->
<div class="input">
    <form method="POST" action="{{ url('post/edit/confirm') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

        <p class=hissu>※<span>必須</span>は必須入力項目です。</p>
        <table>
            <tr>
                <td>
                    <span>必須</span>投稿一覧への表示選択<br /><br />
                    <div class="error_post_disp">※投稿一覧への表示選択は必須です。</div>
                </td>
                <td>
                    <input type="radio" name="disp_flag" value="1" checked>表示する
                    <input type="radio" name="disp_flag" value="0">表示しない
                </td>
            </tr>
            <tr>
                <td>
                    <span>必須</span>名前<br /><br />
                    @if ($errors->has('name'))
                    <div class="error_name">※{{ $errors->first('name') }}</div>
                    @endif
                </td> 
                <td>
                    <input type="text" name="name" placeholder="例）我が家のサモエド" value="{{ $dataDetail->name }}">
                </td>
            </tr>
            <tr>
                <td>
                    <span>必須</span>SNSキーワード<br /><br />
                    @if ($errors->has('sns_keyword'))
                    <div class="error_sns_keyword">※{{ $errors->first('sns_keyword') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="sns_keyword" placeholder="例）サモエド" value="{{ $dataDetail->sns_keyword }}">
                </td>
            </tr>
            <tr>
                <td>
                    画像<br /><br />
                    @if ($errors->has('image_path'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('image_path') }}</div>
                    @endif
                </td>
                <td>
                    <input type="file" name="image_path">
                </td>
            </tr>

            @foreach ( $siteObjects as $siteData)

            @if ( $siteData->at1_name )
            <tr>
                <td>
                    <span>必須</span>{{ $siteData->at1_name }}<br /><br />
                    @if ($errors->has('attribute1'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('attribute1') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="attribute1" placeholder="例）サモエド" value="{{ $dataDetail->attribute1 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->at2_name )
            <tr>
                <td>
                    {{ $siteData->at2_name }}<br /><br />
                    @if ($errors->has('attribute2'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('attribute2') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="attribute2" placeholder="例）サモエド" value="{{ $dataDetail->attribute2 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->at3_name )
            <tr>
                <td>
                    {{ $siteData->at3_name }}<br /><br />
                    @if ($errors->has('attribute3'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('attribute3') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="attribute3" placeholder="例）サモエド" value="{{ $dataDetail->attribute3 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->at4_name )
            <tr>
                <td>
                    {{ $siteData->at4_name }}<br /><br />
                    @if ($errors->has('attribute4'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('attribute4') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="attribute4" placeholder="例）サモエド" value="{{ $dataDetail->attribute4 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->at5_name )
            <tr>
                <td>
                    {{ $siteData->at5_name }}<br /><br />
                    @if ($errors->has('attribute5'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('attribute5') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="attribute5" placeholder="例）サモエド" value="{{ $dataDetail->attribute5 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->dt1_name )
            <tr>
                <td>
                    <span>必須</span>{{ $siteData->dt1_name }}<br /><br />
                    @if ($errors->has('detail1'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('detail1') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="detail1" placeholder="例）サモエド" value="{{ $dataDetail->detail1 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->dt2_name )
            <tr>
                <td>
                    {{ $siteData->dt2_name }}<br /><br />
                    @if ($errors->has('detail2'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('detail2') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="detail1" placeholder="例）サモエド" value="{{ $dataDetail->detail2 }}">
                </td>
            </tr>
            @endif

            @if ( $siteData->dt3_name )
            <tr>
                <td>
                    {{ $siteData->dt3_name }}<br /><br />
                    @if ($errors->has('detail3'))
                    <!--todo-->
                    <div class="error_sns_keyword">※{{ $errors->first('detail3') }}</div>
                    @endif
                </td>
                <td>
                    <input type="text" name="detail3" placeholder="例）サモエド" value="{{ $dataDetail->detail3 }}">
                </td>
            </tr>
            @endif

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
