<?php

$li_tmpl = file_get_contents("http://myhost/templates/nature.html");

$main_template = file_get_contents("page3.html");
$dbh = new PDO('mysql:dbname=test;host=localhost', 'root', 'tortique');

$sth = $dbh->prepare("SELECT place FROM `nature`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);

$sth = $dbh->prepare("SELECT description FROM `nature`");
$sth->execute();
$darray = $sth->fetchAll(PDO::FETCH_COLUMN);

$tmpl = $li_tmpl;
$tmpl = str_replace("<!place>",$array[0],$tmpl);
$tmpl = str_replace("<!description>",$darray[0],$tmpl);
$tmpl = str_replace("<!place2>",$array[1],$tmpl);
$tmpl = str_replace("<!description2>",$darray[1],$tmpl);
$tmpl = str_replace("<!place3>",$array[2],$tmpl);
$tmpl = str_replace("<!description3>",$darray[2],$tmpl);
$tmpl = str_replace("<!place4>",$array[3],$tmpl);
$tmpl = str_replace("<!description4>",$darray[3],$tmpl);
$tmpl = str_replace("<!place5>",$array[4],$tmpl);
$tmpl = str_replace("<!description5>",$darray[4],$tmpl);
$tmpl = str_replace("<!place6>",$array[5],$tmpl);
$tmpl = str_replace("<!description6>",$darray[5],$tmpl);
$imgclass= 'f';
$main_template= str_replace("{main_part}", $tmpl,$main_template);

$imgclass= 'f';

$main_template= str_replace("{world}",$imgclass, $main_template);

$main_template= str_replace("{header}",file_get_contents("http://myhost/templates/header.html"), $main_template);

$main_template= str_replace("{footer}",file_get_contents("http://myhost/templates/footer.html"), $main_template);

echo $main_template;