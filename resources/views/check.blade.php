<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/check.css">
  <title>Document</title>
</head>

<body>
  <div class="wrap">
    <h1 class="check-title">内容確認</h1>
    <table>
      <tr>
        <th class="title">お名前</th>
        <td class="detail">{{$fullname}}</td>
      </tr>
      <tr>
        <th class="title">性別</th>
        <td class="detail">
          <?php
          $gender = $items['gender'];
          if ($gender == 1) {
            echo '男性';
          } else {
            echo '女性';
          };
          ?>
        </td>
      </tr>
      <tr>
        <th class="title">メールアドレス</th>
        <td class="detail">{{$items['email']}}</td>
      </tr>
      <tr>
        <th class="title">郵便番号</th>
        <td class="detail">{{$items['postcode']}}</td>
      </tr>
      <tr>
        <th class="title">住所</th>
        <td class="detail">{{$items['address']}}</td>
      </tr>
      <tr>
        <th class="title">建物名</th>
        <td class="detail">{{$items['building_name']}}</td>
      </tr>
      <tr>
        <th class="title">ご意見</th>
        <td class="detail">{{$items['opinion']}}</td>
      </tr>
    </table>

    <form action="/submit" method="POST">
      @csrf
      <input type="submit" class="submit" value="送信">

      <input type="hidden" name="fullname" value="{{$fullname}}">
      <input type="hidden" name="gender" value="{{$items['gender']}}">
      <input type="hidden" name="email" value="{{$items['email']}}">
      <input type="hidden" name="postcode" value="{{$items['postcode']}}">
      <input type="hidden" name="address" value="{{$items['address']}}">
      <input type="hidden" name="building_name" value="{{$items['building_name']}}">
      <input type="hidden" name="opinion" value="{{$items['opinion']}}">
    </form>
    <form action="/fix" method="POST">
      @csrf
      <input type="submit" value="修正する" class="link">


      <input type="hidden" name="fullname" value="{{$fullname}}">
      <input type="hidden" name="gender" value="{{$items['gender']}}">
      <input type="hidden" name="email" value="{{$items['email']}}">
      <input type="hidden" name="postcode" value="{{$items['postcode']}}">
      <input type="hidden" name="address" value="{{$items['address']}}">
      <input type="hidden" name="building_name" value="{{$items['building_name']}}">
      <input type="hidden" name="opinion" value="{{$items['opinion']}}">
    </form>
</body>

</html>