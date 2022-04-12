<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    p{
      margin-bottom: 0;
    }
  </style>
</head>


<body>
  <div class="card mt-5 mx-auto w-25">
   
    <div class="card-body">
        <h1 class="h3 text-center text-uppercase mb-2">Login</h1>
      <form action="../actions/login.php" method="post">
            <input type="text" class="form-control" name="username" id="username" placeholder="USERNAME">
     
            <input type="password" class="form-control mt-1" name="password" id="password" placeholder="PASSWORD">

            <button type="submit" class="btn btn-primary mt-4 w-100 text-uppercase" name="btn_log_in">Log in</button>

        <div class="card-footer bg-white border-0 mt-2">
                <div class="row">
                        <a href="register.php" class="text-center">Create Account</a>
                </div>
            </div>
      </form> 
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9f9158a85e.js" crossorigin="anonymous"></script>
</body>
</html>