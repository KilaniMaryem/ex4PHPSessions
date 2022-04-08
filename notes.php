<?php
session_start();
for($i=0; $i<20;$i++)
{
    if (!isset($_SESSION["title{$i}"]) && isset($_POST['title']))
{$_SESSION["title{$i}"] = $_POST['title'];
$_SESSION["textarea{$i}"] = $_POST['textarea'];
break;}

}
for($i=0; $i<20;$i++)

{if (isset($_SESSION["title{$i}"]))
    {



    echo '<b>'.$_SESSION["title{$i}"].'</b>'.'<br>'; 
    echo $_SESSION["textarea{$i}"].'<br>'.'</div>';
    echo '<br><br>';}
};
echo "</div></body>";


echo 'Pour ajouter des notes cliquez  <a href="home.php">ici</a><br>';
echo 'Pour se deconne cter cliquez  <a href="logout.php">ici</a>';
?>