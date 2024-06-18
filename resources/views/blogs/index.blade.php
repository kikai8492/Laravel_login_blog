<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  <h1>ブログ投稿一覧画面</h1>
  <a href="{{ route('blogs.create') }}">ブログ投稿</a> 
  @foreach ($blogs as $blog)
    <table>
      <th>
        {{$blog->title}}
      </th>
      <th><a href="{{ route('blogs.show', $blog->id) }}">詳細</a> </th>
      <th><a href="{{ route('blogs.edit', $blog->id) }}">編集</a> </th>
      <th>
        <form action="{{route('blogs.destroy', ['blog' => $blog->id]) }}" method="post">
          @csrf
          @method('DELETE')
          <button>削除</button>
        </form>
      </th>
    </table>
  @endforeach
</body>
</html>
