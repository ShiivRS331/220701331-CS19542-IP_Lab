<!DOCTYPE html>
<html>
<head>
<title>Library Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Library Management System</h1>
	<hr>
	<a href="discust.php"><button>Display Customer Information</button></a>
	<a href="disacc.php"><button>Display Account Information</button></a>
	<a href="inscust.php"><button>Insert Customer Information</button></a>
	<a href="insacc.php"><button>Insert Account Information</button></a>
<hr>
<h1>Insert Cusotmer Information</h1>
<hr>
<form method="post" action="insertcust.php">
Customer ID: <input type="text" name="cid"><br><br>
Customer Name: <input type="text" name="cname"><br><br>
<input type="submit" value="INSERT">
</form>
</body>
</html>