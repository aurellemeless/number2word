number2word
==============
php class, help you to convert numbers in french words.

Usage
--------------
```php
<?php
    include "n2word.class.php";
    
    $number = 2015 ;
    $n2word = new n2word();
    $words = $n2word->literalize($number);
    echo $number." converted in french word is  : ".$words;

  ?>

```
Notice
--------------
Now its possible to convert numbers in natural languages natively with php  NumberFormatter class ( PHP 5 >= 5.3.0, PHP 7)

```php

$french = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
echo $french->format(566560).'<br>'; // cinq cent soixante-six mille cinq cent soixante

$english = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $english->format(566560); // five hundred sixty-six thousand five hundred sixty

```
