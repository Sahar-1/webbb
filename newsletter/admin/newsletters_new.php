    <?php 
    require_once 'config.php'; 
    //login_required(); 
    $tab = 'nl'; 
  
    if(isset($_POST['submitted'])) {  
        $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.'); 
        $sql = "INSERT INTO NEWSLETTERS (name, description) VALUES ( '".$_POST['name']."' , '".$_POST['description']."' )"; 
        $stmt = $link->query($sql) or die($link->error); 
        $stmt->close; 
        $_SESSION['success'] = "newsletter ajouté.";  
        header('Location: newsletters.php'); 
    } 
    $title = "Nouvelle newsletter"; 
$content = <<<EOF
    <form action="newsletters_new.php" method='POST'>  
        <p> 
            <label for="name">Nom:</label><br /> 
            <input type='text' name='name' class="text" />  
        </p> 
        <p> 
            <label for="description">Description:</label> 
            <input type="text" name="description" class="text" />  
        </p> 
        <p> 
            <input type='submit' value='Ajouter Newsletter' /> 
            <input type='hidden' value='1' name='submitted' />  
        </p> 
</form> 
EOF;
include 'layout.php'; ?>


    