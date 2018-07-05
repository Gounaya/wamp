<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>test data in url</title>

    </head>
    <body>
    <p>
         
        <?php 
        if(isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) {
            for($rep = 1; $rep<=$_GET['repeter']; $rep++){
                echo 'Bonjour '. $_GET['nom'] .' '. $_GET['prenom'];
                '<br>'
            }
        }else{
            echo 'undefine name or lastname !';
        }
        ?>
    </p>
    </body>

</html>