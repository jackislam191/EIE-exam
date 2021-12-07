<?php

session_start();
    include_once('header.php');
    include("./config/db.php");
    // include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['nickname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $image_upload = $_POST['image'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birth-date'];

        if (!empty($username) && !empty($password) && !empty($email) && !empty($image_upload) && !empty($gender) && !empty($birthday) ){ 
            $sql = "insert into customers (username, password, email, image_upload, gender, birthday) VALUES ('nickname', 'password', 'email', 'password', 'profile_image', 'gender', 'birthday')";

            mysqli_query($sql);

            header("Location: login.php");

            die;
        }
        else{
            echo "Please enter valid information!";
        }
    }
?>


<html>
    <body>

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="register.inc.php" method="post">
                    <h3>Register Page</h3>
                    <div class="form-group">
                        <label>Nickname</label>
                        <input type="text" class="form-control" name="nickname" id="nickname" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" />
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image" id="image" accept="image/*" />
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" class="form-control" name="birth-date" id="date" />
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">
                        Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>