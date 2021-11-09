<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Masuk Aplikasi Daftar Buku</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style type="text/css">
        .container{
            width: 30%;
            padding: 20px;
        }
        h1{
            margin-top: 30px;
            text-align: center;
            font-weight: bold;
            color: black;
        }
        a{
            color: white;
            text-decoration: none;
        }
        a:hover{
            color: #d1d1d1;
        }
    </style>
</head>

<body> 
	<div class="container">
        <h1>Log In Aplikasi Daftar Buku</h1>
		<!-- login -->
        <form action="login.php" method="POST" style="margin-top: 50px;">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Masukkan username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password">
            </div>
            <center><button for="login" type="submit" name="login" class="btn btn-primary"><a href="dashboard.php">Masuk</a></button></center>
        </form>
	</div>
		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Alert -->
		<script src="plugins/alert.js"></script>

</body>
</html>