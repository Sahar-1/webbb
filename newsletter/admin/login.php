    <?php 
    require_once 'config.php'; 
    if(logged_in()) {header('Location: index.php');} 
    $title = "connexion"; 
    $nonav = true; 
    $mini = true; 
    if($_POST && (!empty($_POST['username']) ) && (!empty($_POST['password'])))
    { 
        validate_user($_POST['username'], $_POST['password']); 
    } 
    $message = $_SESSION['error']; 
$content = <<<EOF
$message
    <form action="login.php" method="post"> 
        <p> 
            <label for="username">Nom d'utilisateur:</label><br /> 
            <input type="text" name="username" class="text" /> 
        </p> 
        <p> 
            <label for="password">Mot de passe:</label><br /> 
            <input type="password" name="password" class="text" /> 
        </p> 
        <p> 
            <input type="submit" value="Se connecter" /> 
        </p> 
    </form> 
EOF;
include 'layout.php'; ?>