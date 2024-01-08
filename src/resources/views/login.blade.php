<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
</head>

<body>
    <header class="header">
        <a class="header_inner" href="/">FashionablyLate</a>
        <a class="register_btn" href="/src/resources/views/login.blade.php">register</a>
    </header>
    <main>
        <div class="content">
            <div class="content_head">
                <h1>Login</h1>
            </div>
            <form action="">
                <p>メールアドレス</p>
                <input type="text" name="mail" value="例:test@example.com">
                <p>パスワード</p>
                <input type="text" name="password" value="例:coachtech105">
                <div>
                    <input type="submit" value="ログイン">
                </div>

            </form>
        </div>
    </main>
</body>

</html>