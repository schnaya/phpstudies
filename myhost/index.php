<?php

$li_tmpl = file_get_contents("templates/mainpart.html");
$main_template = file_get_contents("main.html");
$dbh = new PDO('mysql:dbname=test;host=localhost', 'root', 'tortique');
$sth = $dbh->prepare("SELECT town FROM `information`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);
$sth = $dbh->prepare("SELECT description FROM `information`");
$sth->execute();
$darray = $sth->fetchAll(PDO::FETCH_COLUMN);
$tmpl = $li_tmpl;
$tmpl = str_replace("<!town>",
$array[0],$tmpl);
$tmpl = str_replace("<!description>",
$darray[0],$tmpl);
$tmpl = str_replace("<!town2>",
$array[2],$tmpl);
$tmpl = str_replace("<!description2>",
$darray[2],$tmpl);
$imgclass= 'f';
$main_template= str_replace("{main_patr}", $tmpl,$main_template);
$main_template= str_replace("{world}",$imgclass, $main_template);
$li_tmpl = file_get_contents("templates/naturepart.html");
$sth = $dbh->prepare("SELECT place FROM `nature`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);
$sth = $dbh->prepare("SELECT description FROM `nature`");
$sth->execute();
$darray = $sth->fetchAll(PDO::FETCH_COLUMN);
$tmpl = $li_tmpl;

$tmpl = str_replace("<!place>",
$array[0],$tmpl);
$tmpl = str_replace("<!description>",
$darray[0],$tmpl);
$tmpl = str_replace("<!place2>",
$array[1],$tmpl);
$tmpl = str_replace("<!description2>",
$darray[1],$tmpl);
$imgclass= 'f';
$main_template= str_replace("{naturepart}", $tmpl,$main_template);
$main_template= str_replace("{header}",file_get_contents("templates/header.html"), $main_template);

$main_template= str_replace("{footer}",file_get_contents("templates/footer.html"), $main_template);

echo $main_template;