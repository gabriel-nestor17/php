<?php
   $var = "Bill Gates";
   $tipo = gettype($var);
   echo "$var  ($tipo)<br>";
   $var = 12;
   $tipo = gettype($var);
   echo "$var  ($tipo)<br>";
   $var = 3.1415;
   $tipo = gettype($var);
   echo "$var  ($tipo)<br>";
   $var = true;
   $tipo = gettype($var);
   echo "$var  ($tipo)<br>";
   
   if(is_null($var)) {
      echo "variavel \$var e nula/vazia!<br>";
   }
   $var = "Bill Gates";
   if(is_string($var));  {
       echo "variavel \$var e uma string!<br>";
   }
   $var = 12;
   if(is_integer($var));  {
       echo "variavel \$var e um inteiro!<br>";
   }
   $var = false;
   if(is_bool($var)) {
       echo "variavel \$var e um booleana!";
   }