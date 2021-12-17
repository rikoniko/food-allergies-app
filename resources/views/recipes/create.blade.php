<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/
        </style>
    </head>
    <body>
        <div class="header">
            <div class="icon">
                <img src="">
            </div>
            <div class="right menu">
                <a href="/user/post">ユーザー登録</a>
                <a>ログイン</a>
            </div>
        </div>
        
        <!--レシピ検索-->
        <div>
            <p>レシピ名</p>
            <input type="text" placeholder="レシピ名">
        </div>
        
        <p>表示順</p>
        
        <!--レシピ表示-->
        <div>
            <img src="">
            <p>料理名</p>
            <p>ユーザー名</p>
        </div>
        
        <!--ページネーション-->
        <div class='paginate'>
            <button>1</button><button>2</button>
        </div>
    </body>
</html>
