    <?php 
    require_once 'config.php'; 
    //login_required(); 
    $title = "new message - step 3"; 
    $id = (int) $_GET['id']; 
    $tab = 'mess'; 
  
    $mess = query("SELECT * FROM messages WHERE id=$id"); 
    $message = $mess[0]; 
    $subject = $message['subject']; 
  
$content = <<<EOF
    <a href="messages_preview.php?id=$id" class="large" target="_new">preview »</a><br /> 
    <p>Voulez vous <a href="messages.php" class="large">retour aux messages</a> or <a href="messages_send.php?id=$id" class="large">Envoyer le message</a>?</p> 
EOF;
include 'layout.php'; 
    ?>