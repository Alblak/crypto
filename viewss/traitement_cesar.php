<?php


if(isset($_POST["chiffrer"]))
{
    $operation=htmlspecialchars($_POST['operation']);
    $message=htmlspecialchars($_POST['message']);
    $cle=htmlspecialchars($_POST['cle']);
    $alphabet =range('A','Z');
    $resultat="";
    
    foreach (str_split($message) as $mot) {
       
        $lettre=strtoupper($mot);
        // echo $lettre;
        $position= array_search($lettre,$alphabet);
    // echo $position;
        if($operation==1)
        {
            $position_chiffrer=($position+$cle)%26;
        }
        else
        {
            $position_chiffrer=(($position-$cle)%26+26)%26;
        }
     
     echo $position_chiffrer;
     $resultat.= $alphabet[$position_chiffrer];
     
       
    }

    echo $resultat;
     header("location:cesar.php?resultat=$resultat");
   
}
?>

