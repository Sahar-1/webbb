    <?php 
    require_once 'config.php'; 
    //login_required(); 
    $tab = 'temp'; 
    if(isset($_POST['submitted'])) {  
        $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.'); 
        $sql = "INSERT INTO templates (name, columns, body) VALUES ( '".$_POST['name']."' , ".$_POST['columns'].", '".mysql_real_escape_string($_POST['body'])."' )"; 
        $stmt = $link->query($sql) or die($link->error); 
        $stmt->close; 
        $_SESSION['success'] = "template ajouté.";  
        header('Location: templates.php'); 
    } 
    $title = "new template"; 
$content = <<<EOF
<form action="templates_new.php" method='POST'>  
        <p> 
            <label for="name">Nom:</label><br /> 
            <input type='text' name='name' class="text" />  
        </p> 
        <p> 
            <label for="columns">Colonnes</label> 
            <select name="columns"> 
                <option value="1">Disposition de colonne unique</option> 
                <option value="2">Disposition en deux colonnes</option> 
            </select> 
        </p> 
        <p> 
            <label for="description">Body: (raw html)</label><br /> 
            Use %content% pour une  disposition de colonne unique, %leftcol% et %rightcol% pour une disposition de deux colonne .<br /> 
            <textarea name="body" rows="35"></textarea>  
        </p> 
        <p> 
            <input type='submit' value='Ajouter Template' /> 
            <input type='hidden' value='1' name='submitted' />  
        </p> 
    </form> 
EOF;
include 'layout.php'; ?>