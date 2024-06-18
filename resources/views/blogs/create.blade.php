<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ブログ登録画面</h1>
  <form action='{{route('blogs.store')}}' method='post'>
    @csrf
    @if($errors->any())
      <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
        <ul>
          @foreach($errors->all() as $error)
            <li class="text-red-400">{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div>
      <label for="title">ブログタイトル</label><br>
      <input type="text" name="title" id="title"/>
    </div>

    <div>
      <label for="content">ブログ内容</label><br>
      <input type="text" name="content" id="content"/>
    </div>

    <div class="button">
      <button type="submit">メッセージを送信</button>
    </div>
  </form>
</body>
</html>
