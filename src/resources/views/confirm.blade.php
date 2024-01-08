<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム確認ページ</title>
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
                <h1>Confirm</h1>
            </div>
            <div class="content_table">
                <form action="{{ url('/thanks') }}" method="post">
                    @csrf
                    <table>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['name'] }}<input type="hidden" name="name" value="{{ $confirm['name'] }}"></td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>
                                @if ($confirm['gender'] === 'man')
                                男性
                                @elseif ($confirm['gender'] === 'woman')
                                女性
                                @else
                                その他
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['email'] }}<input type="hidden" name="" value="{{ $confirm['email'] }}"></td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['tell'] }}<input type="hidden" name="" value="{{ $confirm['tell'] }}"></td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['address'] }}<input type="hidden" name="" value="{{ $confirm['address'] }}"></td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['building'] }}<input type="hidden" name="" value="{{ $confirm['building'] }}"></td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['kinds'] }}<input type="hidden" name="" value="{{ $confirm['kinds'] }}"></td>
                        </tr>
                        <tr>
                            <th>
                                <div class="content_table-side"></div>
                            </th>
                            <td>{{ $confirm['detail'] }}<input type="hidden" name="" value="{{ $confirm['detail'] }}"></td>
                        </tr>
                    </table>
                    <input type="submit" value="送信">
                    <input type='submit' name='back' value='修正'>
                </form>
            </div>
        </div>
    </main>
</body>

</html>