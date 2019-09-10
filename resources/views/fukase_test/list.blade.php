<html>
<head>
    <link rel="shortcut icon" href="../../../images/favicon.ico"/>  
    <title>DBサイト</title>
    <style>
    body { font-size:16pt; color:#555; }
    h1 { font-size:100pt; text-align:right; color:#f6f6f6;
        margin:-50px 0px -100px 0px; }
    th {background-color:#999; color:fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
    </style>
</head>
<body>
    <h1>List</h1>
    <p>一覧</p>

    <table>
    <tr>
        <th>image</th>
        <th>name</th>
        <th>attribute1</th>
        <th>attribute2</th>
        <th>attribute3</th>
        <th>attribute4</th>
        <th>attribute5</th>
    </tr>

    <!-- 繰り返し -->
    @foreach ($items as $item)
        <tr>
            <td>{{$items->image_path}}</td>
            <td>{{$items->name}}</td>
            <td>{{$items->attribute1}}</td>
            <td>{{$items->attribute2}}</td>
            <td>{{$items->attribute3}}</td>
            <td>{{$items->attribute4}}</td>
            <td>{{$items->attribute5}}</td>
        </tr>
    @endforeach
    </table><br>
    </form>
</body>
</html>