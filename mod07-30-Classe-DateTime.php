<h1>
#30: Classe DateTime 
</h1>
<p>
mod07-30-Classe-DateTime.php
</p>

<?php

$date = new DateTime('2021-01-01 15:25:35');
$date2 = new DateTime('2021-02-15');
$date3 = new DateTime('2020-02-15');
// $date->add( DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds') );
$date->sub( DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds') );

$date->setTimezone( new DateTimeZone('America/Sao_Paulo') );

echo $date->format('d/m/Y H:i:s');
echo "<hr>";

echo '$date2: '.$date2->format('d/m/Y');
echo "<br>";
echo '$date3: '.$date3->format('d/m/Y');
echo "<br>";

if ($date2 > $date3) {
    echo "Data2 é maior que Date3";
} else {
    echo "Data3 é maior que Date2";
}
echo "<hr>";

$diff = $date2->diff($date3);
echo 'dias: '.$diff->format('%a');
echo "<hr>";

$hoje = new DateTime();
$betao = new DateTime('2021-11-04');
$kaiane = new DateTime('2021-06-12');
$gustavo = new DateTime('2021-09-16');

$diff = $hoje->diff($betao);
echo $diff->format('Faltam %y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos para aniversário do Betao');
echo "<br>";

$diff = $hoje->diff($kaiane);
echo $diff->format('Faltam %y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos para aniversário da Kaiane');
echo "<br>";

$diff = $hoje->diff($gustavo);
echo $diff->format('Faltam %y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos para aniversário do Gustavo');
echo "<br>";
