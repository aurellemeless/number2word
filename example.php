<?php
    include "n2word.class.php";

    $number = 2015 ;
    $n2word = new n2word();
    $words = $n2word->literalize($number);
    echo "<h2>".$number." converted in french word is  : ".$words."</h2>";

  ?>
