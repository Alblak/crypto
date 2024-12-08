<?php
if(isset($_POST["chiffrer"]))
{
    $message=htmlspecialchars($_POST['message']);
    $a=htmlspecialchars($_POST['a']);
    $b=htmlspecialchars($_POST['b']);
    $c=htmlspecialchars($_POST['c']);
    $d=htmlspecialchars($_POST['d']);
    $det=($a*$d)-($c*$b);
    $determinant=0;
    $alphabet =range('A','Z');
    $resultat="";
    if($det==0)
    {
        $notif= "le determinant doit etre different de 0";
        header("location:hill.php?notif=$notif");
    }
    else
    {
        $determinant=$det%26;
        // echo $determinant;
    }
    if($determinant!=1 && $determinant!=3 && $determinant!=5  && $determinant!=7 &&  $determinant!=9 && $determinant!=11 && $determinant!=15 && $determinant!=17 && $determinant!=19 && $determinant!=21 && $determinant!=23 && $determinant!=25)
    {
        $notif= " le determinant n'est pas parmis les vaaleurs possible de A";
        header("location:hill.php?notif=$notif");
    }
    foreach (str_split($message,2) as $mots)
    {
        $decouper=strtoupper($mots);
        if(strlen($decouper)<2)
        {
            $decouper.="Z";
            
        }
        // echo $decouper."<br>";
        $compte=0;
        $x=0;
        $y=0;
        foreach (str_split($decouper) as $mot) {
        
                    $lettre=strtoupper($mot);
                
                    $position= array_search($lettre,$alphabet);
                // echo $position;
                if($compte==0)
                {
                    // echo $position."A <br>";
                    $x=$position;
                
                    $compte++;
                }
                else
                {
                    // echo $position."B  <br>";
                    $y=$position;
                }
                
                
                // //  echo $position_chiffrer;
                //  $resultat.= $alphabet[$position_chiffrer];
                
                
                }
                // echo $x*$a." ".$b*$y;
                // echo "<br>";
                $position_chiffrer1=(($a*$x)+($b*$y))%26;
                $position_chiffrer2=(($c*$x)+($d*$y))%26;
                // echo $position_chiffrer1."<br>";
                // echo $position_chiffrer2;
                // echo "<br>";
                $resultat.= $alphabet[$position_chiffrer1];
                $resultat.= $alphabet[$position_chiffrer2];
            




    }



        echo $resultat;
        header("location:hill.php?resultat=$resultat");
   
}
?>

