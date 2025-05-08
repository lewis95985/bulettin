<?php
    if(isset($_REQUEST['pages'])){ 
        switch($_REQUEST['pages']){
            case 1:
                include('etudiants.php');
            break;
            case 2:
                include('matieres.php');
            break;
            case 3:
                include('notes.php');
            break;
            default:
                include('acceuil.php');
            }
        }else
        {
            include('acceuil.php');
        }
?>