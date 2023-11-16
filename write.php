<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ファイル名を変数に格納
    $filename = 'data/data.txt';

    // ファイルを追記モードで開く
    $fp = fopen($filename, 'a');

    // POSTデータを取得してフォーマット
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $age = htmlspecialchars($_POST['age'], ENT_QUOTES);
    $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES);
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES);

    // ファイルに書き込み
    fwrite($fp, "{$name},{$age},{$gender},{$comment}\n");

    // ファイルを閉じる
    fclose($fp);
}

// 完了メッセージ（Ajax用）
echo "データの保存が完了しました。";
?>