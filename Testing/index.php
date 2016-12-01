<html>
<head>
<title>View News</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">
</head> 
<body>
<?
$link = new mysqli (
    'us-cdbr-azure-southcentral-f.cloudapp.net',
    'bf9afe7c1df5c8',
    '5d557954',
    'acsm_0dd8805538e55e7');
if(!$link){
   echo('Error connecting to the database: ' . mysql_error());
   exit();
}
$db = @mysql_selectdb('mydatabase');
if(!$db){
   echo('Error selecting database: ' . mysql_error());
   exit();
}
$query = "SELECT id, headline, timestamp FROM news ORDER BY timestamp DESC";
$result = @mysql_query($query);
if(!$result){
   echo('Error selecting news: ' . mysql_error());
   exit();
}
if (mysql_num_rows($result) > 0){
    while($row = mysql_fetch_object($result))
    {
    ?>
   <font size="-1"><b><? echo $row->headling; ?></b> <i><? echo formatDate($row->timestamp); ?></i></font>
    <?
    }
}else{
   ?>
   <font size="-2">No news in the database</font>
<? }
   mysql_close($link); ?>
</body>
</html>
