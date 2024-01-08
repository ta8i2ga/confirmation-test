<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>

</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_inner-logo" href="/">FashionablyLate</a>
        </div>
    </header>
    <main>
        <div class="content">
            <div class="content_head">
                <h1>Admin</h1>
            </div>
            <div class="form_head">
                <input type="text" id="search" name="serach">
                <input type="submit" name="submit" value="検索">
                <select name="gender" id="gender">
                    <option value="">性別</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                    <option value="全て">全て</option>
                </select>
                <select name="kinds" id="kinds">
                    <option value="">お問い合わせの種類</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品以外について">商品以外について</option>
                </select>
                <input type="date" value="日付を選択してください">
            </div>

            <div class="form_center">
                <button type="submit">エクスポート</button><!--phpにてエクスポート機能を実装する-->
            </div>
            <!--ページネーション機能を追加、cssにて見た目編集する-->
            <div class="form_table">
                <tr>
                    <th>
                        <span>お名前</span>
                        <span>性別</span>
                        <span>メールアドレス</span>
                        <span>お問い合わせの種類</span>
                    </th>
                </tr>
                <tr>
                    <td><form action=""></form></td>
                </tr>
            </div>
            <div class="reset_btn">
                <input type="submit" value="リセット"><!--adminページに飛ぶ（a）でもいいかも-->
            </div>
        </div>
    </main>
</body>

</html>