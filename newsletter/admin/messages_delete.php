    <?php 
    require_once 'config.php'; 
    login_required(); 
    $id = (int) $_GET['id'];  
    $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.'); 
    $sql = "DELETE FROM messages WHERE id=$id LIMIT 1"; 
    $stmt = $link->query($sql) or die($link->error); 
    if($link->affected_rows) { 
        $_SESSION['success'] = "Message supprimé."; 
    } else { 
        $_SESSION['error'] = 'Rien na été supprimé.'; 
    } 
    header('Location: messages.php'); ?>