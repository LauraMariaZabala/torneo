<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/registro.css" />
    <title>Registro</title>
    <style type="text/css">
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
 
body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
}
 
h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
}
 
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
 
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
 
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
 
div.form-element {
    margin: 20px 0;
}
 
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: yellowgreen;
    color: white;
    background-color: red;
    border: none;
}
 
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
 
p.error {
    background: orangered;
}
</style>
</head>
<body>
<form method="post" action="?controller=welcome&method=login" name="signup-form">
<h2>Registro</h2>
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>
 
 <?php
 
 include('providers/config.php');
 session_start();
  
 if (isset($_POST['Registro'])) {
  
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password_hash = password_hash($password, PASSWORD_BCRYPT);
  
     $query = $connection->prepare("SELECT * FROM empleado WHERE EMAIL=:email");
     $query->bindParam("email", $email, PDO::PARAM_STR);
     $query->execute();
  
     if ($query->rowCount() > 0) {
         echo '<p class="error">The email address is already registered!</p>';
     }
  
     if ($query->rowCount() == 0) {
         $query = $connection->prepare("INSERT INTO empleado(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
         $query->bindParam("username", $username, PDO::PARAM_STR);
         $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
         $query->bindParam("email", $email, PDO::PARAM_STR);
         $result = $query->execute();
  
         if ($result) {
             echo '<p class="success">Your registration was successful!</p>';
         } else {
             echo '<p class="error">Something went wrong!</p>';
         }
     }
    }

  
 ?>
</body>
</html>