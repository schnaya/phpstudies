<?php
$li_tmpl = file_get_contents("http://myhost/templates/cities.html");

$main_template = file_get_contents("page2.html");
$dbh = new PDO('mysql:dbname=test;host=localhost', 'root', 'tortique');

$sth = $dbh->prepare("SELECT town FROM `information`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);

$sth = $dbh->prepare("SELECT description FROM `information`");
$sth->execute();
$darray = $sth->fetchAll(PDO::FETCH_COLUMN);

$sth = $dbh->prepare("SELECT descr FROM `information`");
$sth->execute();
$aarray = $sth->fetchAll(PDO::FETCH_COLUMN);

$tmpl = $li_tmpl;
$tmpl = str_replace("<!town>",$array[0],$tmpl);
$tmpl = str_replace("<!description>",$darray[0],$tmpl);
$tmpl = str_replace("<!descr>",$aarray[0],$tmpl);
$tmpl = str_replace("<!town2>",$array[2],$tmpl);
$tmpl = str_replace("<!description2>",$darray[2],$tmpl);
$tmpl = str_replace("<!descr2>",$aarray[2],$tmpl);
$tmpl = str_replace("<!town3>",$array[1],$tmpl);
$tmpl = str_replace("<!description3>",$darray[1],$tmpl);
$tmpl = str_replace("<!descr3>",$aarray[1],$tmpl);
$tmpl = str_replace("<!town4>",$array[3],$tmpl);
$tmpl = str_replace("<!description4>",$darray[3],$tmpl);
$tmpl = str_replace("<!descr4>",$aarray[3],$tmpl);
$imgclass= 'f';
$main_template= str_replace("{mainpart}", $tmpl,$main_template);

$imgclass= 'f';

$main_template= str_replace("{world}",$imgclass, $main_template);

$main_template= str_replace("{header}",file_get_contents("http://myhost/templates/header.html"), $main_template);

$main_template= str_replace("{footer}",file_get_contents("http://myhost/templates/footer.html"), $main_template);

echo $main_template;