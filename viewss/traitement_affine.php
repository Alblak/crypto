<?php


if(isset($_POST["chiffrer"]))
{
  
    $message=htmlspecialchars($_POST['message']);
    $cle1=htmlspecialchars($_POST['cle1']);
    $cle2=htmlspecialchars($_POST['cle2']);
    $alphabet =range('A','Z');
    $resultat="";
    
    foreach (str_split($message) as $mot) {
       
        $lettre=strtoupper($mot);
        // echo $lettre;
        $position= array_search($lettre,$alphabet);
    // echo $position;
     $position_chiffrer=(($position*$cle1)+$cle2)%26;
    //  echo $position_chiffrer;
     $resultat.= $alphabet[$position_chiffrer];
     
       
    }

    echo $resultat;
    header("location:affine.php?resultat=$resultat");
   
}
?>

