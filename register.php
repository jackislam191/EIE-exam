<?php
    include_once('header.php');
?>


<html>
    <body>
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <?php 
                    //error handler
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<h1>Please fill in all the fields!</h1>";
                        }
                        else if ($_GET["error"] == "invaliduserid") {
                            echo "<h1>Your username must be numbers and characters</h1>";
                        }
                        else if ($_GET["error"] == "invalidemail") {
                            echo "<h1>Please input correct email!</h1>";
                        }
                        else if ($_GET["error"] == "sqlStmtError") {
                            echo "<h1>User existed! Please use another username</h1>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<h1>You are successfully registered!</h1>";
                        }
                    }
                ?>
                <form action="includes/register.inc.php" method="post">
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