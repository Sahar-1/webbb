    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
    <html xmlns="http://www.w3.org/1999/xhtml" > 
        <head> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  
            <title><?php echo $title; ?> » Mon newsletter </title> 
            <!-- Stylesheets --> 
            <link rel="stylesheet" href="media/style.css" type="text/css" media="all" /> 
        </head> 
        <body<?php if ($mini == true) { ?> class="mini"<?php } ?>> 
            <div id="header"> 
                <h1><a href="index.php">Mon newsletter </a></h1> 
            </div> 
            <?php if ($nonav == false) { ?> 
            <div id="nav"> 
                <a href="messages.php"<?php if($tab == 'mess') {?>class="current"<?php } ?>>messages</a> 
                <a href="subscribers.php"<?php if($tab == 'sub') {?>class="current"<?php } ?>>les abonnés</a> 
                <a href="newsletters.php"<?php if($tab == 'nl') {?>class="current"<?php } ?>>newsletters</a> 
                <a href="templates.php"<?php if($tab == 'temp') {?>class="current"<?php } ?>>templates</a> 
                <span class="right"> 
                    <a href="logout.php">Se deconnecter</a> 
                </span> 
            </div> 
            <?php } ?> 
            <div id="container"> 
                <h3><?php echo $title;?></h3> 
                <?php echo $content; ?> 
            </div> 
        </body> 
    </html>