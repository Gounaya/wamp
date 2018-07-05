<?php 
function DirBonjour($nom){
    echo 'Bonjour '.$nom.'!<br/>';
}
DirBonjour('Marie');
DirBonjour('Stephane');
DirBonjour('Oussama'); 

function VolumeCone($rayon, $hauteur){
    $volume = $rayon*$rayon*3.14*$hauteur*(1/3);
    return $volume;
}
echo '<br/>Le volume d\'un cone de rayon 3 et de hauteur 1 est de '.VolumeCone(3,1);
?>
Recherche à un job étudiant