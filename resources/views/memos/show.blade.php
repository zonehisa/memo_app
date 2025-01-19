<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo show</title>
</head>
<body>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
</body>
</html>
