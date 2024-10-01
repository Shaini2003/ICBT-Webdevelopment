<?php
$myArr=array("Kamal","Shaini","Devindi","Tarshika");
$Num=0;
$myArr[0]="Anura";
while($Num<count($myArr)){
    echo $myArr[$Num];
    echo "<br>";
    $Num++;
}


echo "<br>";
$Colours=array("Pink","Yellow","Blue","Green","Red");
for($No=0;$No<count($Colours);$No++){
    echo $Colours[$No];
    echo "<br>";
}

?>
