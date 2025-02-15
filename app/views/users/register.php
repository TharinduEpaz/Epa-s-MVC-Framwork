<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/form.css';?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/verify.css';?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body >
<?php require_once APPROOT . '/views/users/navbar.php';?>

    <div class="container_main" style="height:90vh;">
        <div id="forms" class="form">
            <h1>Register</h1>
            <?php
            echo flash('Account_deleted');
            echo flash('email_err');

            ?>
            <form action="<?php echo URLROOT . '/users/register';?>" method="post">
            <?php
                        if(!empty($data['email_not_activated_err'])){
                        echo '<div class="error">';
                                echo '*'.$data['email_not_activated_err'].'<br>';
                                echo '</div>';
                        }
                    ?>
                <div class="input">
                    <?php
                        if(!empty($data['first_name_err'])){
                        echo '<div class="error">';
                                echo '*'.$data['first_name_err'].'<br>';
                                echo '</div>';
                        }
                    ?>
                    <label for="">First Name</label>
                    <input type="text" name="fname" placeholder="First Name"  pattern="[A-Za-z]+" title="First name should only contain letters" value="<?php echo $data['first_name']?>" >
                </div>
                <div class="input">
                    <?php
                        if(!empty($data['second_name_err'])){
                        echo '<div class="error">';
                            echo '*'.$data['second_name_err'].'<br>';
                            echo '</div>';
                        }
                    ?>
                    <label for="">Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name"  pattern="[A-Za-z]+" title="Second name should only contain letters" value="<?php echo $data['second_name']?>" >
                </div>
                <div class="input">
                    <?php
                        if(!empty($data['email_err'])){
                        echo '<div class="error">';
                            echo '*'.$data['email_err'].'<br>';
                            echo '</div>';
                        }
                    ?>
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" value="<?php echo $data['email']?>" >
                </div> 
                <div class="input">
                    <label for="type">Account type</label>
                        <select name="type" id="type">
                            <option value="buyer">Buyer</option>
                            <option value="service_provider">Service Provider</option>                         
                        </select>
                </div>
                <div class="input">
                    <?php
                    if(!empty($data['password_err1']) || !empty($data['password_err2']) || !empty($data['password_err3']) || !empty($data['password_err4']) || !empty($data['password_err5']) || !empty($data['password_err5'])){
                        echo '<div class="error">';
                        if(!empty($data['password_err1'])){
                            echo '*'.$data['password_err1'].'<br>';
                        }if(!empty($data['password_err2'])){
                            echo '*'.$data['password_err2'].'<br>';
                        }
                        if(!empty($data['password_err3'])){
                            echo '*'.$data['password_err3'].'<br>';
                        }
                        if(!empty($data['password_err4'])){
                            echo '*'.$data['password_err4'].'<br>';
                        }
                        if(!empty($data['password_err5'])){
                            echo '*'.$data['password_err5'].'<br>';
                        }
                        if(!empty($data['password_err6'])){
                            echo '*'.$data['password_err6'].'<br>';
                        }
                        echo '</div>';
                    }
                    ?>
                    <label for="">Password</label>
                    <input type="password" id="password" name="password"  value="<?php echo $data['passwd']?>" >
                </div>
                <div class="input">
                    <?php
                    if(!empty($data['confirm_password_err']) ){
                        echo '<div class="error">';
                        if(!empty($data['confirm_password_err'])){
                            echo '*'.$data['confirm_password_err'].'<br>';
                        }
                        echo '</div>';
                    }
                    ?>
                    <label for="">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password"  value="<?php echo $data['confirm_passwd']?>" >
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Next" class="button">
                </div>
            </form>
        </div>
    </div>
</body>
<script>
//     function hashPassword(password) {
//         // Hash the password using SHA-256 algorithm
//         var hash = CryptoJS.SHA256(password);
//         return hash.toString(CryptoJS.enc.Base64);
//     }

// var form = document.querySelector('form');
// form.addEventListener('submit', function(event) {
//   // Get the password field and hash the password
//   var passwordField = document.querySelector('#password');
//   var hashedPassword = hashPassword(passwordField.value);

//   // Set the hashed password as the value of the password field
//   passwordField.value = hashedPassword;
// });

</script>
<script src="<?php echo URLROOT . '/public/js/form.js';?>"></script>
</html>
<!-- Closing the connection