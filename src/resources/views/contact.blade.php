<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム入力ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_inner-logo" href="/">FashionablyLate</a>
        </div>
    </header>
    <main>
        <div class="main-content">
            <div class="contet-title">
                <h1>Contact</h1>
            </div>
            <form class="form" action="{{ url('/confirm') }}" method="post">
                @csrf
                <div class="form_name">
                    <p>お名前<span>※</span></p>
                    <input type="text" name="first_name" id="name" value="{{ old('first_name', '') }}">
                    <input type="text" name="last_name" id="name" value="{{ old('last_name','') }}">
                    <div class="form__error">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class=" form__error">
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form_gender">
                    <p>性別<span>※</span></p>
                    <div class="form_gender-man">
                        <input type="radio" id="man" name="gender" value="man" checked>
                        <label for="man">男性</label>
                    </div>
                    <div class="form_gender-woman">
                        <input type="radio" id="woman" name="gender" value="woman">
                        <label for="woman">女性</label>
                    </div>
                    <div class="form_gender-etc">
                        <input type="radio" id="etc" name="gender" value="etc">
                        <label for="etc">その他</label>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form_email">
                    <p>メールアドレス<span>※</span></p>
                    <input type="text" name="email" id="email" value="{{ old('email','test@test') }}">
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>

                </div>

                <div class="form_tell">
                    <p>電話番号<span>※</span></p>
                    <input type="text" name="tell1" id="tell1" value="{{ old('tell1', '080') }}">
                    <input type="text" name="tell2" id="tell2" value="{{ old('tell2', '1234') }}">
                    <input type="text" name="tell3" id="tell3" value="{{ old('tell3', '5678') }}">

                    @if($errors->has('tell1') || $errors->has('tell2') || $errors->has('tell3'))
                    <span class="form__error">{{ $errors->first('tell1') ?: $errors->first('tell2') ?: $errors->first('tell3') }}</span>
                    @endif
                </div>

                <div class="form_address">
                    <p>住所<span>※</span></p>
                    <input type="text" name="address" id="address" value="{{ old('address','') }}">
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>

                </div>

                <div class="form_building">
                    <p>建物名</p>
                    <input type="text" name="building" id="building" value="{{ old('building','') }}">
                </div>

                <div class="form_kinds">
                    <p>お問い合わせの種類<span>※</span></p>
                    <select name="kinds" id="kinds">
                        <option value="">選択してください</option>
                        <option value="商品の交換について">商品の交換について</option>
                        <option value="商品以外について">商品以外について</option>
                        <div class="form__error">
                            @error('kinds')
                            {{ $message }}
                            @enderror
                        </div>
                    </select>
                </div>

                <div class="form_detail">
                    <p>お問い合わせ内容<span>※</span></p>
                    <textarea name="detail" id="detail" cols="30" rows="3">{{ old('detail','お問い合わせ内容をご記載ください') }}</textarea>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form_button">
                    <input type="submit" value="確認画面">
                </div>
            </form>
        </div>
    </main>
</body>

</html>