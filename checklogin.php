<?php 
session_start();
        if(isset($_POST['username'])){
                  include("condb1.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM
                user
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["user_id"];
                      $_SESSION["username"] = $row["username"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["dept_name"] = $row["dept_name"];
                      $_SESSION["tel"] = $row["tel"];
                      $_SESSION["email"] = $row["email"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: admin/index.php");
                      }
                    if ($_SESSION["level"]=="user"){ 

                        Header("Location: user/index.php");
                      }
                    if ($_SESSION["level"]=="dean"){ 

                        Header("Location: dean/index.php");
                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>