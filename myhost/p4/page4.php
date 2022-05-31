<?php


$main_template = file_get_contents("page4.html");

$li_tmpl = file_get_contents("http://myhost/templates/tours.html");

$dbh = new PDO('mysql:dbname=test;host=localhost', 'root', 'tortique');
$sth = $dbh->prepare("SELECT tour FROM `tours`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);
$sth = $dbh->prepare("SELECT Цена FROM `tours`");
$sth->execute();
$parray = $sth->fetchAll(PDO::FETCH_COLUMN);
$num = count($array);
$tmpl = $li_tmpl;
$str = '';
for($i=0; $i<$num; $i++){
  $str .= "<h4 style=color:rgb(126,77,0)>tour: $array[$i],  price: $parray[$i] <br></h4>";
}
$main_template= str_replace("{main_part}", $str,$main_template);

$imgclass= 'f';

$main_template= str_replace("{world}",$imgclass, $main_template);

$main_template= str_replace("{header}",file_get_contents("http://myhost/templates/header.html"), $main_template);

$main_template= str_replace("{footer}",file_get_contents("http://myhost/templates/footer.html"), $main_template);

echo $main_template;