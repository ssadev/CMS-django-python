<html>
<head>
<title>localhost - Almet</title>
<link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">

<style>
body{
margin: 0;
padding: 0;
background: #D0D0D0;

}
header{
position: absolute;
width: 100%;
height: 200px;
background: #D0D0D0;
text-align: center;
font-family: normal;

}

.files{
position: absolute;
width: 49%;
background: #D0D0D0;
margin-top: 203px;
font-family: normal;
border-right: 4px solid black;

}

.files .section-files{
position: absolute;
float: left;
text-align: left;
margin-top: 10px;
}
.files a{
margin-top:10px;
margin-left: 25px;

padding: 15px;

}
a{
color: black;
font-size: 30px;
}
 a:hover{
color: blue;
}

.folders{
position: absolute;
width: 50%;
background: #D0D0D0;
margin-top: 203px;
font-family: normal;
margin-left:50%;


}
.files .header, .folders .header{
position: absolute;
width: 100%;
height: 50px;
background: #2E9BFF;
text-align: center;
color: white;		

}

</style>
</head>
<body>
<header>

<h1> Hello Sarj Welcome to  localhost : <?php echo 
 $_SERVER['SERVER_PORT']; ?></h1>

</br>
<h1><a href="http://localhost:8080/phpmyadmin/" target="_blank"> PHP MyAdmin | Database </a></h1>
</header>

<section class="files">
<div class="header">
<h2 id="a"> FILES </h2>
</div>
</br></br>
</br></br>
<input type="checkbox" name="vehicle1" value="Bike" style='margin-left:35px; font-size: 40px' onclick="aTarget(this,'target-lab')"><label id="target-lab"> Cheak to links target _blank</label>
</br></br>
<?php
$file=scandir('.');
foreach($file as $links){
if(is_file($links)){
$ext=explode('.', $links);
$ext=end($ext);

if($ext == "html" ){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-html5'></i>   ".$links; ?></a></br>
<?php
echo'</br>';

}elseif($ext == "css" ){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-css3'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}elseif($ext == "js" || $ext == "php"){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file-code-o'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}elseif($ext == "jpg" || $ext == "png" || $ext == "gif"){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file-image-o'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}elseif($ext == "mp4"){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file-video-o'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}elseif($ext == "mp3"){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file-audio-o'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}elseif($ext == "zip"){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file-archive-o'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}elseif($ext == "txt"){
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file-text-o'></i>   ".$links; ?></a></br>
<?php
echo'</br>';
}
else{
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-file'></i>   ".$links; ?></a></br>
<?php
echo'</br>';

}

}
}

?>
</br></br>
</br></br>
</br></br>
</section>

<section class="folders">
<div class="header">
<h2> FOLDERS </h2>
</div>
</br></br></br></br>
<?php
$file=scandir('.');
foreach($file as $links){
if(is_dir($links)){
echo'<div class="section-files">';
?>
<a href="<?php echo $links; ?>" class="file" style="" target=""> <?php echo "<i class='fa fa-folder'></i>   ".$links; ?></a>
<?php
echo'</div></br>';
}
}

?>

</br></br>
</br></br>
</br></br>
</section>

<script src="/jquery.js"></script>
<script>
function aTarget(cheakBox,lab){if(cheakBox.checked){$('a').attr({'target':'_blank'});$('#'+lab).html('Cheak to links target none');}else{$('a').attr({'target':''});$('#'+lab).html('Cheak to links target _blank');}}
</script>




