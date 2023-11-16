<?php
// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

// 配列の準備
$txt = [];
while (!feof($fp)) {
    // 配列に入れる&#8203;``【oaicite:0】``&#8203;
    $txt[] = explode(",", fgets($fp)); 
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <link rel="stylesheet" href="css/read-style.css">
   
</head>
<body>
    <table>
        <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
            <th>PHPを触ってみてのコメント</th>
        </tr>
        <button onclick="location.href='post.php'" id="modoru">戻る</button>

        <?php 
        // 配列の内容を表示
        // for ($i = 0; $i < count($txt) - 1; $i++) {
        //     echo "<tr>";
        //     echo "<td>" . htmlspecialchars($txt[$i][0], ENT_QUOTES) . "</td>";
        //     echo "<td>" . htmlspecialchars($txt[$i][1], ENT_QUOTES) . "</td>";
        //     echo "<td>" . htmlspecialchars($txt[$i][2], ENT_QUOTES) . "</td>";
        //     echo "<td>" . htmlspecialchars($txt[$i][3], ENT_QUOTES) . "</td>";
        //     echo "</tr>";
        // }

        for ($i = 0; $i < count($txt); $i++) {
          if (count($txt[$i]) >= 4) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($txt[$i][0], ENT_QUOTES) . "</td>";
              echo "<td>" . htmlspecialchars($txt[$i][1], ENT_QUOTES) . "</td>";
              echo "<td>" . htmlspecialchars($txt[$i][2], ENT_QUOTES) . "</td>";
              echo "<td>" . htmlspecialchars($txt[$i][3], ENT_QUOTES) . "</td>";
              echo "</tr>";
          }
      }
        ?>

    </table>
</body>
</html>
