<?php
session_start();

$dbh = new PDO('mysql:dbname=InfoMenu;host=localhost', 'root', '15624862',
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

$main_template = file_get_contents("main.html");
echo "    <title>Путеводитель по Испании</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "    {header}\n";
echo "    <div id=\"start\" class=\"StartPage\">\n";
echo "        <div class=\"StartImg\">\n";
echo "            <h1 class=\"StartPageSize\">Путеводитель по Испании</h1>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "    <div class=\"AuthorInfo\">\n";
echo "        <p class=\"VensImg\"><img class=\"VensImgSize\" src=\"imgs/krown_style.jpg\" alt=\"Здесь могла бы быть ваша реклама\"></p>\n";
echo "        <p><em>\"Все незнакомые города кажутся огромными, пока не узнаешь их поближе.\"</em></p>\n";
echo "        <p class=\"VensTextInfo\">&#10002;</p>\n";
echo "        <p class=\"VensTextInfo\">Прогулки по Испании: От Пиренеев до Гибралтара</p>\n";
echo "        <p class=\"VensTextInfo\">&#9884;</p>\n";
echo "        <p class=\"VensTextInfo\">Генри Воллам Мортон</p>\n";
echo "    </div>\n";
echo "    {main_patr}\n";
echo "    <div class=\"ButtonPlace\">\n";
echo "        <p><button type=\"submit\" onClick=\"location.href='page2.html'\">Больше информации</button></p>\n";
echo "    </div>\n";
echo "    <div class=\"Page\">\n";
echo "        <div class=\"PageImg\"></div>\n";
echo "    </div>\n";
echo "    <div id=\"land\" class=\"InfoPlace\">\n";
echo "        <div class=\"InfoImgBack th\"></div>\n";
echo "        <p class=\"TextInfo\"><u>Остров Гастелугаче</u><br>Остров Гастелугаче – часовня посреди океана. Чтобы обойти весь остров, будет достаточно часа, но великолепные виды с разных точек его скалистых троп займут гораздо больше времени. Главная достопримечательность острова – небольшая часовня Сан Хуан де Гастелугаче. К ней ведет длинная каменная лестница в 237 ступеней. Согласно археологическим раскопкам, часовня была возведена на одной из его скалистых вершин еще в 10 веке. Ее посвятили Иоанну Крестителю. По легенде, святой, преследуя Дьявола, преодолел небольшой остров в три шага и сразу же настиг его. На этом месте и построили часовню.</p>\n";
echo "    </div>\n";
echo "    <div class=\"InfoPlace\">\n";
echo "        <p class=\"TextInfo\"><u>Лас Катедралес</u><br>Лас Катедралес - пляж, название которого с испанского языка переводится, как пляж Соборов. Свое название он заслужил благодаря аркам и пещерам, которые возникают во всей своей красе во время отливов, а также прекрасному пляжу из гальки и валунов, превращающих его в загадочный древний город, возникающий из морских глубин. Лас Катедралес, без сомнения, один из самых живописных и невероятных участков береговой линии во всей Испании. Гости по достоинству оценят красоту пляжа, а также множество интересных достопримечательностей.</p>\n";
echo "        <div class=\"InfoImgBack fo\"></div>\n";
echo "    </div>\n";
echo "    <div class=\"ButtonPlace\">\n";
echo "        <p><button type=\"submit\" onClick=\"location.href='page3.html'\">Больше информации</button></p>\n";
echo "    </div>\n";
echo "    {footer}\n";
echo "</body>\n";
echo "</html>\n";
?>