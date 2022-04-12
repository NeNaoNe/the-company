<?php
include "Database.php";

class User extends Database{

  # CREATE
  public function create($first_name, $last_name, $username, $password)
  {
      $password = password_hash($password,PASSWORD_DEFAULT);

      # SQL
      $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

      #Execution
      if($this->conn->query($sql)){
        header("location: ../views");    // go to index.php inside the views folder
        exit;   // same as die
      } else {
          die ("Error creating user: " . $this->conn->error);
          // die - terminate the current script + show a message
      }
  }

  # LOGIN
  public function Login($username, $password)
  {

      # SQL
      $sql = "SELECT * FROM users WHERE username = '$username'";

      #Execution
      if($result = $this->conn->query($sql)){
      // check if the username is existing
      print_r($result);
          if($result->num_rows == 1){
            // check if the password is correct
            $row = $result->fetch_assoc();
            // $row is an associative array
            print_r($row);
                if(password_verify($password, $row['password'])){ // check if  password is correct

                    session_start();
                    
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['full_name'] = $row['first_name'] . " ". $row['last_name'];


                    header("location: ../views/dashboard.php");    
                    exit;   
                }else{
                  // Password is incorrect
                  die("Password is incorrect.");
               }
          }else{
              // Username is not existing
              die("Username not found.");
          }
      }else{
          die("Error logging in: ".$this->conn->error);
      }


  }
  
  # READ ALL
  public function getAllUsers()
  {
      $user_id = $_SESSION['user_id'];
      # SQL
      $sql = "SELECT `id`, first_name, last_name, username FROM users WHERE id  != $user_id";

      #Execution
      if($result = $this->conn->query($sql)){
        return $result;
        // print_r($result);
      }else{
        die("Error retrieving all users: " . $this->conn->error);
      }
  }



  # READ 1
  public function getUser($user_id)
  {

      # SQL
      $sql = "SELECT * FROM users WHERE id = $user_id";

      #Execution
      if($result = $this->conn->query($sql)){
        return $result->fetch_assoc();
       // print_r($result);
      }else{
        die( "Error retrieving user: " . $this->conn->error);
      }
  }


  # UPDATE
  public function update($user_id,$first_name, $last_name, $username)
  {
    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $user_id";

    if($this->conn->query($sql)){
      header("location: ../views/dashboard.php");
      exit;
    } else {
        die("Error updating user: " . $this->conn->error);
    }
  }

  # DELETE
  public function delete($user_id){
   
    # SQL
    $sql = "DELETE FROM users WHERE id = $user_id";

    #Execution
    if($this->conn->query($sql)){
      header("location: ../views/dashboard.php");
      exit;
    }else{
      die("Error deleting user: " . $this->conn->error);
    }
  }







}