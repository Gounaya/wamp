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
            $nbRepetition = (int) $_GET['repeter'];
            if($nbRepetition <100)
            {
                for($rep = 0; $rep<=$nbRepetition; $rep++){
                    echo 'Bonjour '. $_GET['nom'] .' '. $_GET['prenom'].'<br>';
                }
            }else{
                echo 'warning: you should put a number between 0 and 100 !'
            }
        }else{
            echo 'undefine name or lastname !';
        }
        ?>
    </p>
    </body>

</html>