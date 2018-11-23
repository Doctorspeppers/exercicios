<?php

require "funcionario.php";

$func1 = new funcionario('742895634', 3000, '20', '03', '08', '437.635.183-47');
$func2 = new funcionario('758474979', 5000, '13', '02', '13', '564.548.738-87');

// var_dump($func1);
// var_dump($func2);


?>


<h3>"Por mun-ha e todos os antigos deuses, EU INVOCO O FUNCIONARIO!"</h3>

<br>

<h2>Funcionario 1:</h2>
<pre>"<?php echo $func1; ?>"</pre>

<br>

<h2>Funcionario 2:</h2>

<pre>"<?php echo $func2; ?>"</pre>

<?php 
$func1->recebeAumento();
$func2->recebeAumento();
?>


<h3>"Por mun-ha e todos os antigos deuses, EU AUMENTO SEU SALARIO, OH GRANDE FUNCIONARIO!!!"</h3>

<br>

<h2>Funcionario 1:</h2>
<pre>"<?php echo $func1; ?>"</pre>

<br>

<h2>Funcionario 2:</h2>

<pre>"<?php echo $func2; ?>"</pre>
