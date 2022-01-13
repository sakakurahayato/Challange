<!DOCTYPE html>
<html lang="ja">

<head>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fix.css">
  <title>Document</title>
</head>


<body>
  <div class="body-wrap">
    <h1 class="h1-title">お問い合わせ</h1>
    <form action="/check" method="POST">
      @csrf

      <div class="flex">
        <h2 class="title">お名前<span class="asterisk">※</span></h2>
        <input type="text" class="family-name" name="fullname[]" value="{{$items['fullname']}}">
        <input type="text" class="child-name" name="fullname[]" value="">
      </div>
      <div class="flex">
        <p class="example">例）山田</p>
        <p class="example name">例）太郎</p>
      </div>

      @error('fullname')
      <p class="error">{{$message}}</p>
      @enderror


      <div class="flex">
        <h2 class="title">性別<span class="asterisk">※</span></h2>
        <p class="radio-btns">
          <input type="radio" value="1" name="gender" id="radio1" checked="checked"><label for="radio1" class="radio-label">男性</label>
          <input type="radio" value="2" name="gender" id="radio2"><label for="radio2" class="radio-label">女性</label>;
        </p>
      </div>


      <div class="flex">
        <h2 class="title">メールアドレス<span class="asterisk">※</span></h2>
        <input type="text" class="input" name="email" value="{{$items['email']}}">
      </div>
      <p class="example">例） test@example.com</p>

      @error('email')
      <p class="error">{{$message}}</p>
      @enderror

      <div class="flex">
        <h2 class="title">郵便番号<span class="asterisk">※</span></h2>
        <span class="post-mark">〒</span>
        <!-- 半角変換 -->
        <input type="text" name="postcode" class="postcode" id="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{$items['postcode']}}">
      </div>
      <p class="post-example">例）　123-4567</p>

      @error('postcode')
      <p class="error">{{$message}}</p>
      @enderror

      <div class="flex">
        <h2 class="title">住所<span class="asterisk">※</span></h2>
        <input type="text" name="address" class="input" value="{{$items['address']}}">
      </div>
      <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>

      @error('address')
      <p class="error">{{$message}}</p>
      @enderror

      <div class="flex">
        <h2 class="title">建物名</h2>
        <input type="text" class="input" name="building_name" value="{{$items['building_name']}}">
      </div>
      <p class="example">例）千駄ヶ谷マンション101</p>


      <div class="flex">
        <h2 class="title">ご意見<span class="asterisk">※</span></h2>
        <textarea class="textarea" rows="4" cols="30" name="opinion">{{$items['opinion']}}</textarea>
      </div>

      @error('opinion')
      <p class="error">{{$message}}</p>
      @enderror

      <input type="submit" value="確認" class="submit">

    </form>
  </div>
  <script src="js/contact.js"></script>
</body>

</html>