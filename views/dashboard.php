<?php
  include "../classes/User.php";

  session_start();

  $user = new User;
  $users_result = $user->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    p{
      margin-bottom: 0;
    }
  </style>
</head>


<body>
<?php
       include "main-nav.php";
    ?>
       <main class="container py-5">
            <h2 class="h3 text-muted text-uppercase">User List</h2>

            <div class="table table-responsive-lg">
               <table class="table table-hover">
                    <thead class="thead-light bg-secondary">
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th style="width: 95px;"></th> <!--for action button-->
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                           while($users_row = $users_result->fetch_assoc()){
                              // print_r($pusers_row);
                           ?>
                              <tr>
                                 <td><?= $users_row['id'] ?></td>
                                 <td><?= $users_row['first_name'] ?></td>
                                 <td><?= $users_row['last_name'] ?></td>
                                 <td><?= $users_row['username'] ?></td>
                                 <td>
                                       <!-- ?prod_id = variable -->
                                    <a href="edit-user.php?user_id=<?= $users_row['id']?>" class="btn btn-outline-warning btn-sm">
                                       <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="delete-user.php?user_id=<?= $users_row['id']?>" class="btn btn-outline-danger btn-sm">
                                       <i class="fas fa-trash"></i>
                                    </a>
                                 </td>
                              </tr>                 
                        <?php } ?>
                  </tbody>
               </table>
            </div>
        </main>

  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9f9158a85e.js" crossorigin="anonymous"></script>


</body>
</html>