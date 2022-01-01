<?
mysql_connect("localhost","root","");
mysql_select_db("lat_dbase");
$hasil=mysql_query("select * from tbl_mhs");

Pemrograman Web

6

$hit=mysql_num_rows($hasil);
echo "jumlah record $hit";
?>