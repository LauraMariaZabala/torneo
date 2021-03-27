<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/estilosLogin.css" />
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container">
        <img src="assets/img/logoLogin.png" width="200px">
        <h2>Inicio de sesión</h2>
        <form method="post" action="?controller=empleados&method=index" name="signin-form">
            <div class="form-control">
                <input <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                <label>Usuario:</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required >
                <label>Contraseña:</label>
            </div>
            <button class="btn" type="submit" name="login" value="login">Ingresar</button>
        </form>
    </div>
    <?php
 
include('providers/Database.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>
    <script type="text/javascript">
        const labels = document.querySelectorAll('.form-control label')
        labels.forEach(label => {
            label.innerHTML = label.innerText
                .split('')
                .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
                .join('')
        })
    </script>
</body>
</htm