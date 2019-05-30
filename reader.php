<!DOCTYPE html>
<html>
<title>Doujin Stealer</title>
<link rel="shortcut icon" href="https://1.bp.blogspot.com/-q4WhoEwfRlI/XDCnuof_TsI/AAAAAAAAIsQ/HxA6hd2mIOgiO8KveXaxKwfaecawWpCgwCLcBGAs/s1600/kano.png" type="image/x-icon">
<meta name='author' content='Stupidc0de Family'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<style>
#doujin img {width: 100%;margin: 10px 0;}

.subbtn {background:#b70505;color:white;border: 1px solid #000; padding:6px 6px 6px 6px;}


.bordergaya{
			background:black;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid #2d2b2b;
	
		}
		.bordergaya:hover{
			background:#2d2b2b;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid crimson;
		}
	

</style>
<center><font face="Ubuntu" size="5" color="white"><b>nHentai Reader<b/></font></center>
<center><img class='image' src='https://3.bp.blogspot.com/-6XZOk6uPV4U/XEBO8xwFcwI/AAAAAAAABL4/BDAHAxIoOCAZCO0FmEnNtAyGXoTx9dz6wCLcBGAs/s1600/weeblogo.png' style="width: 100%;margin: 10px 0;"/>
<body bgcolor=black>
<form id="form1" name="form1" method="post" action="">
  <table width="300"  align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input class="bordergaya" style="width:100%;" placeholder="put nuclear code here.." type="text" name="url" id="textfield" />
      </td>
      
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input class="subbtn" type="submit" name="submit" id="button" value="  >  " /></td>
	 
    </tr>
  </table>
</form>
<?php
$id = $_POST['url'];
$url = file_get_contents("https://dl.nhent.ai/url/$id/proxy");
$url2 = "https://nhent.ai/api/gallery/$id";
$jsondata = file_get_contents($url2);
$json = json_decode($jsondata, true);
$url = explode("\n", $url);
echo "<center><font face='Ubuntu' size='5' color='white'><b>Title: ".$json['title']['pretty']."<b/></font></center>";
echo '<div id="doujin">';
foreach($url as $i) {
        if($i != "") {
            echo "<img src='". $i . "'/>\n";
        }
    }
echo "</div></body>";
?>
</html>
