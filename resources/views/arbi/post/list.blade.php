@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">投稿内容編集</div>

                <div class="panel-body">
                    <table border="1" cellpadding="10" width="720">
                        <tr align="center">
                            <td width="15%">
                                <label for="name">イメージ</label>
                            </td>
                            <td width="25%">
                                <label for="name">タイトル</label>
                            </td>
                            <td width="25%">
                                <label for="name">登録日</label>
                            </td>
                            <td width="10%">
                                <label for="name">表示可否</label>
                            </td>
                            <td width="10%">
                                <label for="name">編集</label>
                            </td>
                            <td width="10%">
                                <label for="name">削除</label>
                            </td>
                        </tr>
                        @foreach ($dataDetail as $key => $value)
                        <tr align="center">
                            <td width="15%">
                                <img src="/{{ $value->image_path }}" width="150" height="80">
                            </td>
                            <td width="25%">
                                <label for="name">{{ $value->name }}</label>
                            </td>
                            <td width="25%">
                                <label for="name">{{ $value->created_at }}</label>
                            </td>
                            <td width="10%">
                                @if ( $value->displayFlag === 0)
                                <label for="name">非表示</label>
                                @else
                                <label for="name">表示</label>
                                @endif
                            </td>
                            <td width="10%">
                                <form method="POST" action="{{ url('/post/edit') }}">{{ csrf_field() }}
                                    <input type="hidden" name="data_id" value="{{ $value->data_id }}">
                                    <button type="submit" class="btn btn-primary">編集</button>
                                </form>
                            </td>
                            <td width="10%">
                                <form method="POST" action="{{ url('/post/list/delete') }}">{{ csrf_field() }}
                                    <input type="hidden" name="data_id" value="{{ $value->data_id }}">
                                    <button type="submit" class="btn btn-danger">削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
