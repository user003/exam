<?php

#Author Serge Skudaev, 2005

# Main menu



print('<br><p align=center><font size=5>Final Exam</font><br><br><br>');

print('<table class="menu" align=center width=120%>');

print('<tr>');

print('<th><a class="menu" href="index.php?boxaction=module1"><font size=2>Module 1:Arithmetics </font></a></th>');

print('<th><a class="menu" href="index.php?boxaction=viewscores"><font size=2>View My Scores</font></a></th>');

print('<th><a class="menu" href="index.php?boxaction=quiz1"><font size=2>Quiz</font></a></th>');

print('<th><a class="menu" href="index.php?boxaction=edituserpwd"><font size=2>Change Password </font></a></th>');

print('<th><a class="menu" href="index.php?boxaction=viewall"><font size=2>View All SCores </font></a></th>');


print('<th><a class="menu" href="index.php?boxaction=useroption"><font size=2>Users</font></a></th>');

print('<th><a class="menu" href="index.php?boxaction=logout"><font size=2>Log Out</font></a></th>');

print('<th><a class="menu" href="http://www.configure-all.com"><font size=2>Home</font></a></th>');


print('</tr></table>');

print('</p>');




$cday= date('d');
$cmonth= date('m');
$cyear= date('Y');

$pmonth=$cmonth-1;

$monthago=$cyear.'-'.$pmonth.'-'.$cday;

//echo " monthago =".$monthago;

$dbcurrent_date=$cyear.'-'.$cmonth.'-'.$cday;
$hbcurrent_date=$cmonth.'/'.$cday.'/'.$cyear;

//echo "<br>dbcurrent_date=".$dbcurrent_date."<br> hbcurrent_date=".$hbcurrent_date;

//cho "<br>user==".$user;

?>
