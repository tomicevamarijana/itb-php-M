<?php
    $a=5; 
    $b=7;
    $c=10;

    if($a==$b){    
        echo"<p>$a je jednako $b.</p>";
    }
    if($a!=$b){
        echo"<p>$a je razlicito od $b</p>";
    }
    if($a<=$b){
        echo"<p>$a je manje ili jednako $b</p>";
    }
    echo"<p>Nastavljam dalje</p><hr>";

    $br1=3;
    $br2="3";

    if($br1==$br2){
        echo"<p>$br1 jednako je po vrednosti sa $br2</p>";
    }

    if($br1===$br2){
        echo"<p>$br1 jednako je po vrednosti i tipu sa $br2</p>";
    }
    // if - else
    echo"<hr>";
    $a=3;
    $b=3;

    if($a>$b){
        echo"<p>$a je vece od $b</p>";
    }
    else{
        echo"<p>$a je manje ili jednako od $b</p>";
    }
    echo"<p>Nastavljamo ponovo dalje.</p><hr>";
?>