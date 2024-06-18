<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>詳細画面</h1>
  <h3>ブログ名:{{$blog->title}}</h3>
  <p>ブログ内容:{{$blog->content}}</p>
  <a href="{{ route('blogs.index') }}">戻る</a>
</body>
</html>