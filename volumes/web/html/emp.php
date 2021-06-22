<?php

$con=pg_connect("host=192.168.1.15 port=5433 dbname=postgres user=postgres password=Password");

//echo $con;

$eid=$_GET['t1'];
$nm=$_GET['t2'];
$sal=$_GET['txtsal'];

$rs=pg_query("insert into emp values($eid,'$nm',$sal)");

if($rs)
       echo "Data Inserted";
else
       echo "Data not inserted";

$result=pg_query("select * from emp");
echo "<table border=1><tr><th>Eid</th><th>Name</th><th>Salary</th></tr>";
while($row=pg_fetch_row($result))
{
       echo " <tr><td>$row[0] </td><td>$row[1] </td><td>$row[2] </td></tr>";
}
echo "</table>";

?>
