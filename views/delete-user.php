<?php
  session_start();

  include "../classes/User.php";

  $user = new User;
  $user_row = $user->getUser($_GET['user_id']);
  $full_name = $user_row['first_name'] . " " . $user_row['last_name'] ;


   
//   $user = new User;
//   $user_id = $_GET['user_id'];
//   $user_result = $user->getUser($user_id);
//   $user_row = $user_result->fetch_assoc();
  
//   if(isset($_POST['btn_delete'])){
//      $user->deleteUser($user_id);
//   }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
       include "main-nav.php";
    ?>
 


<main class="card w-25 mx-auto border-0 my-5">
            <div class="card-header bg-white border-0">
                <h2 class="card-title text-center text-danger h4 mb-0 text-uppercase">Delete User</h2>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                <p class="fw-bold mb-0">Are you sure you want to delete "<?= $full_name ?>" ?</p>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <form action="../actions/delete-user.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $_GET['user_id'] ?>">
                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/9f9158a85e.js" crossorigin="anonymous"></script>


</body>
</html>