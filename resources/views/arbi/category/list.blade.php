@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">カテゴリ編集</div>

                <div class="panel-body">
                    <table border="1" cellpadding="10" width="600">
                        <tr align="center">
                            <td width="40%">
                                <label for="name">カテゴリ名称</label>
                            </td>
                            <td width="20%">
                                <label for="name">登録</label>
                            </td>
                            <td width="20%">
                                <label for="name">削除</label>
                            </td>
                        </tr>
                        @foreach ($ctgData as $key => $value)
                        <tr align="center">
                            <td width="40%">
                                <label for="name">{{ $value->category_name}}</label>
                            </td>
                            <td width="20%">
                                <form method="POST" action="{{ url('/category/list/delete') }}">{{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">登録</button>
                                </form>
                            </td>
                            <td width="20%">
                                <form method="POST" action="{{ url('/category/list/delete') }}">{{ csrf_field() }}
                                    <input type="hidden" name="category_id" value="{{ $value->category_id }}">
                                    <button type="submit" class="btn btn-danger">削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/category/edit" type="button" class="btn btn-primary">カテゴリ新規登録</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
