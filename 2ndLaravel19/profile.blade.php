@extends('layouts.front')

@section('content')

<body>
  <center>
    @foreach($profiles as $profile)
    <table border="1" width="400" height="400">


      <tr align="center">
        <th colspan="2">プロフィール画面</th>
      </tr>
      <tr align="center">
        <td>名前</td>
        <td>{{ str_limit($profile->name, 1500) }}</td>
      </tr>
      <tr align="center">
        <td>性別</td>
        <td>{{$profile->gender}}</td>
      </tr>
      <tr align="center">
        <td>趣味</td>
        <td>{{$profile->hobby}}</td>
      </tr>
      <tr align="center">
        <td>自己紹介欄</td>
        <td>{{$profile->introduction}}</td>
      </tr>
    </table>
    @endforeach
  </center>
</body>

@endsection
