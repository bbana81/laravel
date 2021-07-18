<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Hello/Index</title>
    <style>
        body{font-size: 16pt; color: #999;}
        h1{font-size: 100pt; text-align: right; color: #f6f6f6; margin: -50px 0px -100px 0px;}
    </style>
</head>
<body>
    @section('content')
    <p>ここが本文のコンテンツです。</p>
    <table>
        @foreach($data as $item)
        <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
        @endforeach
    </table>
</body>
</html>