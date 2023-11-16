<!-- <html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	年齢: <input type="text" name="age">
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html> -->

<!-- 上は授業のやつ -->
<!-- ここから課題 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="mainvisual">

		
    <form action="write.php" method="post" id="surveyForm">



			

		
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="age">年齢：</label>
        <input type="number" name="age" id="age" required><br>
        
        <label>性別：</label>
        <input type="radio" name="gender" value="男性" required> 男性
        <input type="radio" name="gender" value="女性"> 女性<br>
        
        <label for="comment">PHPに触れてみた感想：</label>
        <textarea name="comment" id="comment" required></textarea><br>
        
        <input type="submit" value="送信">
				
				<button onclick="location.href='read.php'" id="btn">送信＆表示</button>


			
    </form>

		
		
	</div>	

		
    <script>
        $(document).ready(function() {
            $('#surveyForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "write.php",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert("アンケートが送信されました。");
                    }
                });
            });
        });
    </script>
</body>
</html>
