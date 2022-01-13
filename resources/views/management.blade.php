<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/management.css">
  <title>Document</title>
</head>

<body>
  <div class="wrap">
    <h1 class="management">管理システム</h1>
    <div class="input-wrap">
      <form action="/result" method="POST">
        @csrf
        <div class="flex">
          <h2 class="title">お名前</h2>
          <input type="text" name="fullname" class="input">
          <h2 class="gender-title">性別</h2>
          <p class="radio-btns">
            <input type="radio" value="0" name="gender" checked="checked"><label for="radio0" class="radio-label">全て</label>
            <input type="radio" value="1" name="gender" id="radio1"><label for="radio1" class="radio-label">男性</label>
            <input type="radio" value="2" name="gender" id="radio2"><label for="radio2" class="radio-label">女性</label>
          </p>
        </div>
        <div class="flex">
          <h2 class="title">登録日</h2>
          <input type="date" 　name="strat" class="input">
          <span class="date-span">〜</span>
          <input type="date" name="untill" class="input">
        </div>
        <div class="flex">
          <h2 class="title">メールアドレス</h2>
          <input type="text" class="input" name="email">
        </div>
        <input type="submit" class="submit">
        <a href="/management" class="link">リセット</a>
      </form>
    </div>


    <table class="table">
      <tr class="table-first-tr">
        <th class="table-id">ID</th>
        <th class="table-name">お名前</th>
        <th class="table-gender">性別</th>
        <th class="table-email">メールアドレス</th>
        <th class="table-opinion">ご意見</th>
      </tr>
      @foreach($items as $items)
      <tr>
        <td class="table-id">{{$items->id}}</td>
        <td class="table-name">{{$items->fullname}}</td>
        <td class="table-gender">
          <?php
          $gender = $items['gender'];
          if ($gender == 1) {
            echo '男性';
          } else {
            echo '女性';
          };
          ?>
        </td>
        <td class="table-email">{{$items->email}}</td>
        <td class="table-opinion">{{$items->opinion}}</td>
        <input type="hidden" class="opinion" id="opinion" value="{{$items->opinion}}">
        <form action="/delete" method="post">
          @csrf
          <td class="table-delete"><input type="submit" class="delete" value="削除"></td>
          <input type="hidden" value="{{$items->id}}" name="id">
        </form>
      </tr>
      @endforeach
    </table>
  </div>
  <script src="js/management.js"></script>
</body>

</html>