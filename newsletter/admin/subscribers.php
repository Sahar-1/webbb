    <?php 
    require_once 'config.php'; 
    //login_required(); 
    $title = "subscribers"; 
    $tab = 'sub'; 
    $table = ""; 
    $messages = query("SELECT * FROM subscribers ORDER BY id ASC"); 
    foreach($messages as $row) { 
        $dlink = '<a href="subscribers_delete.php?id='.$row['id'].'" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer cet abonné?\');" title="delete"><img src="media/images/delete.png" alt="Supprimer"/></a>'; 
        $elink = '<a href="subscribers_edit.php?id='.$row['id'].'" title="edit"><img src="media/images/page_edit.png" alt="Modifier"/></a>'; 
        $table .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$dlink.' '.$elink.'</td></tr>'; 
    } 
 $message = error_messages(); 
$content = <<<EOF
    $message
    <table> 
        <tr> 
            <th></th> 
            <th>Nom</th> 
            <th>Adresse mail</th> 
            <th></th> 
</tr> 
$table
</table>
EOF;
include 'layout.php'; ?>