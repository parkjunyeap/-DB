<!DOCTYPE html>
<html>
<head>
	<title>피자 값 주기</title>
</head>
<body>
	<h1>내 피자</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>피자값 1:</label>
		<input type="int" name="pizza1" required><br><br>
		<label>피자값 2:</label>
		<input type="int" name="pizza2" required><br><br>
        <label>피자값 3:</label>
		<input type="int" name="pizza3" required><br><br>
        <label>피자값 4:</label>
		<input type="int" name="pizza4" required><br><br>
        <label>피자값 5:</label>
		<input type="int" name="pizza5" required><br><br>
		<input type="submit" value="만들기">
	</form>
	<?php
	// 폼이 제출되면 회원 정보를 처리하는 코드
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// 데이터베이스 연결
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mysql";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// 피자양 데이터 가져오기
		$pizza1 = $_POST["pizza1"];
		$pizza2 = $_POST["pizza2"];
        $pizza3 = $_POST["pizza3"];
        $pizza4 = $_POST["pizza4"];
        $pizza5 = $_POST["pizza5"];

		// SQL 쿼리 실행
		$sql = "INSERT INTO pizza (pizza1, pizza2,pizza3,pizza4,pizza5) VALUES ('$pizza1', '$pizza2','$pizza3','$pizza4','$pizza5')";
		if ($conn->query($sql) === TRUE) {
			header("Location: pie.php");
   			exit();
			// echo "피자만들기 완료되었습니다.";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
	?>
</body>
</html>
