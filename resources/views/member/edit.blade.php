<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
</head>
<body>
<h1>編集</h1>

 <form method="POST" action="{{route('member.update',['id' =>$member->id])}}">
  @csrf

 <div>
  名前
  <input type="text" name=name value="{{$member->name}}">
  </div>

  <div>
  電話番号
  <input type="text" name=telephone value="{{$member->telephone}}">
  </div>

  <div>
  メールアドレス
  <input type="text" name=email value="{{$member->email}}">
  </div>


  <input type="submit" value="更新する">

  <a href="{{ route('member.show',['id'=>$member->id])}}">{{ __('詳細に戻る') }}</a>

  </form>
    
</body>
</html>
