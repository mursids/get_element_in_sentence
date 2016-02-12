<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Element</title>
<link href="style-demo.css" rel="stylesheet" type="text/css" />
</head>
<!-- By @mursids  -->
<body>
<?php
function element($teks,$pemisah,$urutan){
	$pecah = explode($pemisah, $teks);
	$hasil = $pecah[$urutan];
return $hasil;}
?>
<div id="bodyfull">
<div id="center">
  <form action="" method="post" name="form1" id="form1">
    <div class="form_box">
      <label for="textfield">Input Text</label>
      <textarea name="textfield" id="textfield"></textarea>
    <div>
      <input name="button" type="submit" class="submit" id="button" value="Submit" /></div>
    </p>
    </div>
    </form>
    <div>
    <?php
	if(isset($_POST['button'])){
		$text=$_POST['textfield'];
		echo "Text = ".$text;
		print "<strong>result : </strong><br>";
$jum = str_replace(" "," ",$text,$c);
print "<br>";
for($i=0;$i<=$c;$i++){
	print $i." ".element($text," ",$i)."<br>";
	}
		
		}
		else{
			echo "error";
			}
	?>
    </div>    

</div></div>
<div id="center"></div>
</body>
</html>
