<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧表示</title>
</head>
<body>
    
<table>
<tr>
<th>ID</th>
<th>名前</th>
<th>電話番号</th>
<th>メールアドレス</th>
<th>詳細</th>
</tr>
@foreach($members as $member)
<tr>
<td>{{$member->id}}</td>
<td>{{$member->name}}</td>
<td>{{$member->telephone}}</td>
<td>{{$member->email}}</td>
<td><th><a href="{{route('member.show',['id'=>$member->id])}}">詳細</a></th></td>
</tr>
@endforeach
</table>
</body>
</html>