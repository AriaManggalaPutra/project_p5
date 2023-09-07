<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto mt-5" style="max-width: 400px;">
            <div class="card-body">
                <h1 class="card-title text-center">Login</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Anda">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="Password" placeholder="Masukkan Password Anda">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" href="login.php">Login</button>
                    <button type="submit" name ="submit"class="btn btn-primary"><a style="color:white; text-decoration: none;" href="register.php">Registrasi</a></button>


                </form>

               
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-48UEGq5nvgNu6LbVwlKvP33wSLhYMKbPRpvtFPOlFtl4aFItvI0t1kC8n4v1B33B" crossorigin="anonymous"></script>
</body>
</html>
