<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ブログ投稿一覧画面</h1>
  <a href="{{ route('blogs.create') }}">ブログ投稿</a> 
  @foreach ($blogs as $blog)
    <table>
      
    </table>
  @endforeach
</body>
</html>