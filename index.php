<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <div class="outer-container">
        <section class="img-container">
            <img src="illustration.png" alt="logo">
        </section>


        <aside class="aside-container">
            <div class="inner-container">
                <div class="cross-container">
                    <img src="cross.png" alt="logo">
                </div>
                <div class="text-container">
                    <h1 class="login-text">Login to your Account</h1>
                    <p class="sub-text"> See what is going on with your business</p>
                </div>
                <form class="form" action="post">
                    <ul class ="inputs-container" style="list-style-type: none; font-size:1em;">
                        <label for="email">Email</label>
                        <li class="border">
                            <input type="text" name="email" placeholder="mail@abc.com">
                        </li>
                        <label for="password">Password</label>
                        <li class="border">
                            <input id="password" type="password" name="password" placeholder="Password">
                        </li>
                    </ul>
                    
                    <div class="remember-me-container">
                        <div class="inner-checkbox-container">
                            <input class="remember-me" type="checkbox" name="remember" id="remember" checked>
                            <label for="remember-me-text">Remember Me</label>
                        </div>
                        <span class="span"><a href="#">Forgot password?</a></span>
                    </div>
                    
                    <button class="login-btn" type="submit">Login</button>
                    
                    
                </form>
                <footer>
                    <p class="not-registered">Not Registered Yet?<a href="#">Create an Account</a></p>
                </footer>
            </div>
            
        </aside>
    </div>

    <?php
        

        // // // db connection
        // // $host = 'localhost';
        // // $dbname = 'mydatabase';
        // // $dbusername = 'root';
        // // $dbpassword = 'password';

        // // try {
        // //     $dbo = new PDO("mysql:host=$host", $dbusername, $dbpassword);
        // //     $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // // } catch (PDOException $e){
        // //     echo 'First Connection failed: ';
        // //     echo 'Connection failed: ' . $e->getMessage();
        // // }

        // // // Create a database using php
        // // $queryDb = "CREATE DATABASE IF NOT exists mydatabase";

        // // // Prepare to prevent SQL injection
        // // $sqlDb = $dbo->prepare($queryDb);

        // // // Execute the query
        // // $sqlDb->execute();

        // // // Reconnect with the newly created mydatabase
        // // $dbo = new PDO("mysql:host=$host;dbname=mydatabase", $dbusername, $dbpassword);
        // // $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // // // Create a table
        // // $queryTable = "CREATE TABLE IF NOT EXISTS users(
        // //     id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        // //     email VARCHAR(255) NOT NULL,
        // //     password VARCHAR(255) NOT NULL,
        // //     created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        // // )";

        // // $sqlTable = $dbo->prepare($queryTable);

        // // $sqlTable->execute();


        // // // Create three users
        // // $queryUserOne= "INSERT INTO users (email, password) VALUES ('johndoe@gmail', 'john1234')";
        // // $queryUserTwo= "INSERT INTO users (email, password) VALUES ('testuser@gmail.com', 'test1234')";
        // // $queryUserThree= "INSERT INTO users (email, password) VALUES ('Janedoe@gmail.com', 'Jane1234')";

        // // $users = [$queryUserOne, $queryUserTwo, $queryUserThree];

        
        // // // need to also verify the user is not already in the database 
        // // // to prevent duplication
        // // foreach ($users as $user) {
        // //     try{
        // //         $userPrepared = $dbo->prepare($user);
        // //         try{
        // //             $userPrepared->execute();
        // //         } catch(PDOException $e){
        // //             echo "Error:execute users failed";
        // //             echo $e->getMessage();
        // //         }
        // //     } catch(PDOException $e){
        // //         echo "Error:prepare and execute users failed";
        // //         echo $e->getMessage();
        // //     }
        // // }
        
        // // // gets the form data
        // // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // //     $email = $_POST['email'];
        // //     $password = $_POST['password'];
        // //     echo $email;
        // //     echo $password;
            
            

        //     // Create User, Insert the data into the database

        //     $query = "INSERT INTO  users ($email, $password) VALUES (:email, :password)";
        //     $stmt = $dbo->prepare($query);

        //     // hash the password
        //     $hashedpassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        //     $stmt -> bindParam(':email', $email);
        //     $stmt -> bindParam(':password', $hashedpassword);
        //     $stmt -> execute();

        //     //ERROR HANDLING
        //     $errors = [];

        //     // I email is missing 
        //     if (is_input_empty($email, $password)) {
        //         $errors["empty_input"] = 'Email is required';
        //     }

        //     // If email is invalid
        //     if (is_email_valid($email)){
        //         $errors["invalid_email"] = 'Email is invalid';
        //     }

        //     if ($errors){
        //         echo $_SESSION['errors'] = $errors;
        //         header('Location: ../index.php');
        //         die();
        //     }


        //     // PasswordVerification($password, $hashedpassword);

        // // } else {
        // //     // header('Location: ../index.php');
        // //    echo "No data was sent";
        // // }

        // // When Login button is clicked, verify the password
        // function PasswordVerification($password, $hashedpassword){
        //     // verify hashed password is correct, compares to database
        //     $password = $_POST['password'];
        //     if (password_verify($password, $hashedpassword)) {
        //         echo 'Password is correct';
        //     } else {
        //         echo 'Password is incorrect';
        //     }
        // }

        // function is_input_empty($email, $password){
        //     if (empty($email) || empty($password)) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        // function is_email_valid($email){
        //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

?>

    
    

</body>
</html>