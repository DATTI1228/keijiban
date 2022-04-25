<!DOCTYPE html>
<html lang="ja">

<head>
    <meta carset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php

    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

    <img src="4eachblog_logo.jpg" class="logo">

    <header>
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
    </header>

    <main>
    <div class="main_container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div class="form1">
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="50" name="handlname">
                    </div>

                    <div class="form1">
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="50" name="title">
                    </div>

                    <div class="form1">
                        <label>コメント</label>
                        <br>
                        <textarea cols="100" rows="15" name="comments"></textarea>
                    </div>

                    <div calss="form1">
                        <input type="submit" value="投稿する">
                    </div>
                </form>

                <?php

                while ($row = $stmt->fetch()) {

                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }
                
                ?>

            </div>

            <div class="right">
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        copyright © internous | 4each blog the which provides A to Z about programing.
    </footer>
</body>

</html>