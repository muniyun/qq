<meta charset="utf-8">
<div id="1" style="width:100%;display:<?php if(!empty($_GET['ceshi'])){echo "none";} ?>">

<?php

$u=$_POST['u'];
$l=$_POST['l'];
//$a="/http:\/\/fofa.foxue.org\/(.*?)\" title=\"(.*?)\" target=\"_blank\" style=\"\" >/U";
$a=$_POST['a'];
$b=$_POST['b'];
//$c=$_POST['c'];	
//$g=$_POST['g'];
$h=$_POST['h'];
$ddd=$_POST['ddd'];
$i=$_POST['i'];
$j=$_POST['j'];
$k=$_POST['k'];
$do=$_POST['do'];
$do2=$_POST['do2'];
$img=$_POST['img'];
$m=$_POST['m'];
$page=$_POST['page'];
$name=$_POST['name'];
$preg=$_POST['preg'];
$preg2=$_POST['preg2'];
$video=$_POST['video'];
$ww2=file_get_contents("666.txt");
$yuan2=$_POST['yuan'];
$yuan2=iconv('utf-8', 'gbk', $yuan2);
$yuan="{$ww2}{$yuan2}";
echo $ww;
//$yuan=iconv('utf-8', 'gbk', $yuan);

if($_POST['sub']){
$www=fopen("555.txt","w");
fwrite($www,"url:");
fwrite($www,"<br>");
fwrite($www,$u);//1
fwrite($www,"<br>");
fwrite($www,"preg_match_all:");
fwrite($www,"<br>");
fwrite($www,$a);//2
fwrite($www,"<br>");
fwrite($www,"url2:");
fwrite($www,"<br>");
fwrite($www,$l);//3
fwrite($www,"<br>");
fwrite($www,"preg_match:");
fwrite($www,"<br>");
fwrite($www,$b);
fwrite($www,"<br>");
fwrite($www,"filename:");
fwrite($www,"<br>");
$name=iconv('utf-8', 'gbk', $name);
fwrite($www,$name);//9

fwrite($www,"<br>");
fwrite($www,"page1:");
fwrite($www,"<br>");
fwrite($www,$h);
fwrite($www,"<br>");
fwrite($www,"page2:");
fwrite($www,"<br>");
fwrite($www,$i);
fwrite($www,"<br>");
fwrite($www,"Enable:1 $gg");
fwrite($www,"<br>");
fwrite($www,$j);//15
fwrite($www,"<br>");
fwrite($www,"Enable:2 $tt");
fwrite($www,"<br>");
fwrite($www,$k);
fwrite($www,"<br>");
$scouce="文章来源:";
$scouce=iconv('utf-8', 'gbk', $scouce);
fwrite($www,$scouce);
fwrite($www,"<br>");

fwrite($www,$yuan);//19

fwrite($www,"<br>");
fwrite($www,"Page break:");
fwrite($www,"<br>");
fwrite($www,$page);
fwrite($www,"<br>");
fwrite($www,"img:");
fwrite($www,"<br>");
fwrite($www,$img);//23
fwrite($www,"<br>");
fwrite($www,"Enable:");
fwrite($www,"<br>");
fwrite($www,$m);
fwrite($www,"<br>");
fwrite($www,"video:");
fwrite($www,"<br>");
fwrite($www,$video);
fwrite($www,"<br>");
fwrite($www,"[cc]:");
fwrite($www,"<br>");
fwrite($www,$do);
fwrite($www,"<br>");
fwrite($www,"[foreach]:");
fwrite($www,"<br>");
fwrite($www,$do2);//31
fwrite($www,"<br>");
fwrite($www,"preg:");
fwrite($www,"<br>");
fwrite($www,$preg);//33
fwrite($www,"<br>");
fwrite($www,"preg2:");
fwrite($www,"<br>");
fwrite($www,$preg2);//35
fwrite($www,"<br>");
fwrite($www,"preg_match2:");
fwrite($www,"<br>");
fwrite($www,$ddd);//37





fclose($www);
}
$ww=file_get_contents("555.txt");
$ww=iconv( 'gbk','utf-8', $ww);
//echo $ww;
$www=explode("<br>",$ww);
/* echo $www[1];
echo $www[3];*/
$w1=$www[1];
global $w1;
$w3=$www[3];
global $w3;
//echo $www[5];
$w5=$www[5];
global $w5;
$w7=$www[7];
global $w7;
//$www[9]=iconv( 'gbk','utf-8', $www[9]);
$w9=$www[9];
global $w9;
$w11=$www[11];
global $w11;
$w13=$www[13];
global $w13;
$w15=$www[15];
global $w15;
$w17=$www[17];
global $w17;
$w19=$www[19];
global $w19;
//$www[21]=iconv('gbk','utf-8',$www[21]);
$w21=$www[21];
//echo $www[19];
global $w21;	
$w23=$www[23];
global $w23;
$w25=$www[25];
global $w25;
$w27=$www[27];
global $w27;
$w29=$www[29];
global $w29;
$w31=$www[31];
global $w31;
$w33=$www[33];
global $w33;
$w35=$www[35];
global $w35;
$w37=$www[37];
global $w37;


//echo $w21;	
//echo $w37;

?>




<form action="" method="POST">
url:<input type="text" name="u" value="<?php echo $www[1]; ?>" style="width:80%;"><br>
Page break:<input type="text" name="page" size="20" value="<?php echo $www[21]; ?>"><br>
url2:<input type="text" name="l" value="<?php echo $www[5]; ?>" style="width:80%;"><br>

<hr style=' height:2px;border:none;border-top:2px dotted red;' />
preg_match_all:<textarea rows="1" cols="100" name="a">
<?php echo $www[3]; ?>
</textarea><br>
preg_match_all("{$a}",$datasss,$d);
<br>
$d:<input type="text" name="do" value="<?php echo $www[29]; ?>" style="width:10%;"><br>
Enable:1  $d[] $cc=$do<br>
$d:<input type="text" name="do2" value="<?php echo $www[31]; ?>" style="width:10%;"><br>
Enable:1  $d[] foreach<br>
preg_match_all("{$a}",$datasss,$d);
<br>

preg_match:<textarea rows="1" cols="100" name="b">
<?php echo $www[7]; ?>
</textarea><br>
preg_match2:<textarea rows="1" cols="100" name="ddd">
<?php echo $www[37]; ?>
</textarea><br>
<hr style=' height:2px;border:none;border-top:2px dotted red;' />

<br>
img:<textarea rows="1" cols="100" name="img">
<?php echo $www[23]; ?>
</textarea><br>
preg_match("{$b}",$datas,$mm);  
<br>
img:<textarea rows="1" cols="100" name="preg">
<?php echo $www[33]; ?>
</textarea><br>
preg_match_all("{$b}",$datas,$mm);  
<br>
<br>
video:<textarea rows="1" cols="100" name="video">
<?php echo $www[27]; ?>
</textarea><br>
preg_match("{$b}",$datas,$mm);  
<br>
video:<textarea rows="1" cols="100" name="preg2">
<?php echo $www[35]; ?>
</textarea><br>
preg_match_all("{$b}",$datas,$mm);  
<br>

<br>
<hr style=' height:2px;border:none;border-top:2px dotted red;' />
filename:<input type="text" name="name" size="50" value="<?php echo $www[9]; ?>"><br>

1page:<input type="text" name="h" size="20" value="<?php echo $www[11]; ?>"><br>
2page:<input type="text" name="i" size="20" value="<?php echo $www[13]; ?>"><br>
999.txt:<input type="text" name="j" size="10" value="<?php echo $www[15]; ?>"><br>
Enable:1     $gg=fopen("999.txt","a+");<br>
$tt:<input type="text" name="k" size="10" value="<?php echo $www[17]; ?>"><br>
Enable:2     $s=fopen($tt,"w+");<br>
img:<input type="text" name="m" size="10" value="<?php echo $www[25]; ?>"><br>
Enable:3     $img=fopen($image,"a");;<br>
<br>
<hr style=' height:2px;border:none;border-top:2px dotted red;' />
$datasss:<input type="text" name="data" value="<?php echo $data; ?>" style="width:10%;"><br>
Enable:1  ceshi<br>
$d:<input type="text" name="dd" value="<?php echo $dd; ?>" style="width:10%;"><br>
Enable:1  ceshi<br>
<input type="hidden" name="yuan2" value="<?php echo $w21; ?>" style="width:10%;">
$yuan:<input type="text" name="yuan" value="<?php echo $w19; ?>" style="width:10%;"><br>
Enable:Source of the article<br><br>
<hr style=' height:2px;border:none;border-top:2px dotted red;' />
<input type="submit" name="sub" value="master">
<input type="submit" name="sub6" value="mastersub">
<input type="submit" name="sub2" value="clear">
<br>
<input type="submit" name="sub5" value=".php">
<input type="submit" name="sub3" value="2">
<input type="submit" name="sub4" value="k=index">
<input type="submit" name="sub9" value="k=''">
<br>
<input type="submit" name="sub8" value="see 999file">
<input type="submit" name="sub7" value="js">
<br>
<hr style=' height:2px;border:none;border-top:2px dotted red;' />
<?php  
if($_POST['sub2']){ 
$clear=fopen("999.txt","w");

fwrite($clear,"");
fclose($clear);
 $content="内容已清空！！！";
// $content=iconv('utf-8', 'gbk', $content);
echo "999.txt {$content}";
} 

if($_POST['sub3']){ 

echo "<script>window.document.location.href='777.php?k=2'</script>";
} 

if($_POST['sub4']){ 
echo "<script>window.document.location.href='777.php?k=index'</script>";
} 
if($_POST['sub5']){ 
echo "<script>window.document.location.href='777.php'</script>";
} 
if($_POST['sub7']){ 
echo "<script>window.document.location.href='index.php?file={$w9}'</script>";
}  
 if($_POST['sub8']){ 
 $file9=file_get_contents("999.txt");
echo $file9;
}  
if($_POST['sub9']){ 
echo "<script>window.document.location.href='777.php?k='</script>";
} 


if($_POST['sub6']){
$u=$w1;	
//$u=$_POST['u'];;
$data=$_POST['data'];
$dd=$_POST['dd'];

//$u="http://fofa.foxue.org/gsrw/293/";

	$datasss=curl_get($u);
	//$datasss=file_get_contents("http://ssjk.foxue.org/ssdt/");
if($data==1){echo $datasss;}
 preg_match_all("{$w3}",$datasss,$d);
 //preg_match("/<P>(.*?)</P>/is",$datasss,$e);
preg_match_all($c,$g,$f);

	global $d;
	
//$b = array_slice($d[1],100);

//$cc=$d[1];
//print_r($cc);
//print_r($d[2]);
if($w29==1){$cc=$d[1];}
if($w29==2){$cc=$d[2];}
if($w29==3){$cc=$d[3];}
if($w29==4){$cc=$d[4];}
if($w29==5){$cc=$d[5];}

if($w31==1){$cc2=$d[1];}
if($w31==2){$cc2=$d[2];}
if($w31==3){$cc2=$d[3];}
if($w31==4){$cc2=$d[4];}
if($w31==5){$cc2=$d[5];}

if($dd==1){print_r($d[1]);}
if($dd==2){print_r($d[2]);}
if($dd==3){print_r($d[3]);}
if($dd==4){print_r($d[4]);}
if($dd==5){print_r($d[5]);}
//print_r($b);	
if($w15==1){
$gg=fopen("999.txt","a+");
}	
/* 	print_r($cc2);
	print_r($cc);  */
foreach($cc2 as $k=>$va){
	$www=$w9;
	//echo $www;
	$www=iconv('utf-8', 'gbk', $www);
	if(!is_dir($www)){mkdir($www,0777,true);}
	$www=iconv( 'gbk', 'utf-8',$www);
	
	//echo $cc[$k];
	echo "<li><a href='index.php?x={$va}&f={$cc[$k]}'>{$cc[$k]}</a></li>";
	 $f=$cc[$k];
$t2=str_replace(":","",$f);
$t2=str_replace("&mdash;","",$t2);
$image="./{$www}/images/{$t2}.jpg";
$tu="./{$www}/images";
if(!is_dir($tu)){mkdir($tu,0777,true);}//1
if(!is_dir(dirname($name))){
            mkdir(dirname($name));
        }
 	$w="<li><a href='./{$www}/{$t2}.html' target='_blank'>{$t2}</a></li>";
 	if(strpos($ggg,$w)===false){
    fwrite($gg,$w);
  }
 
 $urli="".$w5."".$va."";
//echo $urli;
$datas=curl_get($urli); 
 //echo $datas;
 //$t=$cc[$k];
/*  if(strpos($datas, "box35")=== false){
 $datas=str_replace("box36","box35",$datas); } */
//echo $t;
//preg_match("/<font color=\"#0000FF\">(.*?)<div id=\"pages\" class=\"text-c\"><\/div>/s",$datas,$mm);
//preg_match("/<span id=\"hits\"><\/span><\/div>(.*?)<div id=\"pages\" class=\"text-c\"><\/div>/s",$datas,$mm);
preg_match("{$w7}",$datas,$mm);
//print_r($mm[0]);
preg_match("{$w37}",$mm[1],$mmm);
//echo $mmm[1];
$mm2=str_replace("</div>","",$mm[1]);
$mm2=str_replace("本文标签：</li>","",$mm2);


$mm2=str_replace("&nbsp;","",$mm2);
$mm2=str_replace("<div","<src",$mm2);
$mm2=str_replace("<script src","<src",$mm2);

preg_match("{$w23}",$mm2,$mmm);
preg_match("{$w27}",$mm2,$shipin);
preg_match_all("{$w33}",$mm2,$mmm2);
preg_match_all("{$w35}",$mm2,$shipin2);

 $tt="./{$www}/{$t2}.html";
 echo $tt;
 echo $mmm[1];
  echo $shipin[1];
$mmm3=implode(" ",$mmm2[1]);
  //foreach(){}
  
 echo count($mmm2[1]);

 
if(count($mmm2[1])>2){
foreach($mmm2[1] as $i=>$val){
	//echo $i;
	if(strpos($val, "http:")!== false){
        //删除对应的元素
        unset($mmm2[1][$k]);
		echo $val;
    
	
	$mm2=str_replace($val,"./images/{$t2}{$i}.jpg",$mm2);
	
	$jpg3=file_get_contents($val);
	//echo $jpg3;
	
 $img2=fopen("./{$www}/images/{$t2}{$i}.jpg","a"); 
fwrite($img2,$jpg3); 
fclose($img2);
}
}  
} 
  
  
  
  
  
  
if($mmm[1]!=""){
if(strpos($mmm[1],"https")===false){ 
$mm2=str_replace($mmm[1],"./images/{$t2}.jpg",$mm2);

if($w25==3){
$jpg=file_get_contents($mmm[1]);
$img=fopen($image,"a"); 
fwrite($img,$jpg); 
fclose($img); 
}

}
 }  
 




$bucun="不存在!";
 ///$bucun=iconv('utf-8', 'gbk', $bucun);
  $cun="存在!";
 //$cun=iconv('utf-8', 'gbk', $cun);
 $fenxiang="分享到：";
 //$fenxiang=iconv('utf-8', 'gbk', $fenxiang);	
if(strpos($mm2,$fenxiang)===false){ echo $bucun;}else{echo $cun;}
if(strpos($mm2,$fenxiang)){ $mm2=str_replace($fenxiang,"<script>",$mm2);}
if(strpos($mm2,"document.write")){ $mm2=str_replace("document.write","",$mm2);}

 
  echo $t2;
	echo $mm2;
//echo "<hr style=' height:2px;border:none;border-top:2px dotted #185598;' />";

	
 $tt=iconv('utf-8', 'gbk', $tt);
if($w17==2){
if(!empty($mm2)){
  if(!file_exists($tt)){
 $s=fopen($tt,"w+");
 }  

$h="回向:愿世间一切众生善行坚固，无有退转";
$o="作者：佚名　来源：{$w19}";
//$h=iconv('utf-8', 'gbk', $h);
//$o=iconv('utf-8', 'gbk', $o);
// echo "<a>{$mm[0]}</a>";
fwrite($s,"<html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='applicable-device' content='pc'><meta name='keywords' content='电脑,电脑讲解,电脑技术,编程,电脑故障维修{$t2}' />
<link href='../../css/3.css' rel='stylesheet' type='text/css'></head>");
fwrite($s,"<body>");
fwrite($s,"<script src='../../3.js'></script>");
fwrite($s,"<div class='div2'><div class='heading_nav'><ul><li><a href='../../index.html'>首页</a></li>
<li> <a href='javascript:void(0)' onclick='_addFavorite()'>加入收藏</a> </li> 
				</ul</div></div>");
fwrite($s,"<script charset='utf-8' src='../../3/js/hengfu.js'></script>");
fwrite($s,"<script charset='utf-8' src='../../3/js/hengfu2.js'></script>");
fwrite($s,"<hr>");
fwrite($s,"<div class='div1'>{$t2}");
fwrite($s,"<br><br>{$w19}<br>{$mm2}</div>");


if($shipin[1]!=""){
$frame="<iframe src='{$shipin[1]}' width='600' height='450'  allowFullScreen='true'></iframe>";
$frame2="<iframe src='{$shipin[1]}' width='100%' height='450' allowFullScreen='true'></iframe>";

fwrite($s,"<center><script>
var system ={};  
var p = navigator.platform;       
system.win = p.indexOf('Win') == 0;  
system.mac = p.indexOf('Mac') == 0;  
system.x11 = (p == 'X11') || (p.indexOf('Linux') == 0);     
if(system.win||system.mac||system.xll){
document.write(");
fwrite($s,'"'.$frame.'");');
fwrite($s,"}else{ document.write(");
fwrite($s,'"'.$frame2.'");');
fwrite($s,"}</script></center>");

    }
fwrite($s,"<hr>");//<hr style=' height:2px;border:none;border-top:2px dotted #185598;' />
fwrite($s,"<script charset='utf-8' src='../../js/sming.js'></script>");
fwrite($s,"</body>");
fwrite($s,"</html>"); 
 
 
 
 
 
//fclose($jpg2);	
fclose($s);

}
}
	

}


fclose($gg);

}

?>
</form><br>
</div>

<div  id="2"  style="width:100%;display:<?php if(!empty($_GET['ceshi'])){echo "none";} ?>">
<?php
function curl_get($url){
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	//curl_setopt($ch, CURLOPT_ENCODING, "gzip"); //指定gzip压缩采集搜狐的新闻时候就遇到gzip压缩问题
    $output = curl_exec($ch);
    curl_close($ch);
return $output;
}
function curl_jpg($url){
$ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_HEADER,false);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  $output = curl_exec($ch);
  curl_close($ch);
	return true;
}



//:/http:\/\/www.gming.org\/(.*?)\">(.*?)<\/a><\/em>/U
//:/<div class=\"box34 marginT15\">(.*?)<div class=\"box24 marginT15\">/s

//http:\/\/ssjk.foxue.org\/(.*?)\" title=\"(.*?)\" target=\"_blank\" style=\"\" >/

//if($_POST['sub']){
if($_GET['k']>=$w11&&$_GET['k']<=$w13){

$u="".$w1."".$w21."".$_GET['k'].".html";

//echo $u;
//$u=$_POST['u'];;

//$u="http://fofa.foxue.org/gsrw/293/";
//echo $u;
	$datasss=curl_get($u);
 //echo $datasss;
 preg_match_all("{$w3}",$datasss,$d);
 //preg_match("/<P>(.*?)</P>/is",$datasss,$e);
preg_match_all($c,$g,$f);
	//$h=$d[0];


//$h=$_POST['h'];
//print_r($d[1]);
	
$b = array_slice($d[1],32,100);
//print_r($d[2]);
//$cc=$d[2];
if($w29==1){$cc=$d[1];}
if($w29==2){$cc=$d[2];}
if($w29==3){$cc=$d[3];}
if($w29==4){$cc=$d[4];}
if($w29==5){$cc=$d[5];}

if($w31==1){$cc2=$d[1];}
if($w31==2){$cc2=$d[2];}
if($w31==3){$cc2=$d[3];}
if($w31==4){$cc2=$d[4];}
if($w31==5){$cc2=$d[5];}

if($dd==1){print_r($d[1]);}
if($dd==2){print_r($d[2]);}
if($dd==3){print_r($d[3]);}
if($dd==4){print_r($d[4]);}
if($dd==5){print_r($d[5]);}
//print_r($cc);	
if($w15==1){
$gg=fopen("999.txt","a+");
}	

$ggg=file_get_contents("999.txt");	 
foreach($cc2 as $k=>$va){
	$www=$w9;
	
    $www=iconv('utf-8', 'gbk', $www);
	if(!is_dir($www)){mkdir($www,0777,true);}
	$www=iconv( 'gbk', 'utf-8',$www);
	 //$www=iconv('utf-8', 'gbk', $www);
	
	
	echo $va;
	echo "<li><a href='index.php?x={$va}&f={$cc[$k]}'>{$cc[$k]}</a></li>";
	 $f=$cc[$k];
$t2=str_replace(":","",$f);
$t2=str_replace("&mdash;","",$t2);
$image="{$www}/images/{$t2}.jpg";

	$w="<li><a href='./{$www}/{$t2}.html' target='_blank'>{$t2}</a></li>";
	if(strpos($ggg,$w)===false){
    fwrite($gg,$w);
  }
 $urli="".$w5."".$va."";
 //$urli="{$www[5]}{$va}";
 //echo $w5;
// $urli="http://www.fodizi.net/qt/qita/21840.html";
$datas=curl_get($urli);
 if(strpos($datas, "box35")=== false){
 $datas=str_replace("box36","box35",$datas); }

preg_match("{$w7}",$datas,$mm);
//print_r($mm[0]);
preg_match("{$w37}",$mm[1],$mmm);
//echo $mmm[1];
$mm2=str_replace("</div>","",$mm[1]);
$mm2=str_replace("本文标签：</li>","",$mm2);


$mm2=str_replace("&nbsp;","",$mm2);
$mm2=str_replace("<div","<src",$mm2);
$mm2=str_replace("<script src","<src",$mm2);
if(strpos($mm2,"&#9;")){$mm2=str_replace("&#9;","",$mm2); }
	
preg_match("{$w23}",$mm2,$mmm);
preg_match("{$w27}",$mm2,$shipin);
preg_match_all("{$w33}",$mm2,$mmm2);
preg_match_all("{$w35}",$mm2,$shipin2);

 $tt="./{$www}/{$t2}.html";
 echo $tt;
 echo $mmm[1];
  echo $shipin[1];
$mmm3=implode(" ",$mmm2[1]);
  //foreach(){}
  
 echo $mmm2[1];


  
  
if($mmm[1]!=""){ 

 if(strpos($mmm[1],"https")===false){ 
$mm2=str_replace($mmm[1],"./images/{$t2}.jpg",$mm2);

if($w25==3){
$jpg=file_get_contents($mmm[1]);
$img=fopen($image,"a"); 
fwrite($img,$jpg); 
fclose($img);
}

}
  
 

 }

 
if(count($mmm2[1])>2){
	
foreach($mmm2[1] as $i=>$val){
	//echo $i;
	if(strpos($val, "http:")!== false){
        //删除对应的元素
        unset($mmm2[1][$k]);
		//echo $val;
    
	
	$mm2=str_replace($val,"./images/{$t2}{$i}.jpg",$mm2);
	
	$jpg3=file_get_contents($val);
	//echo $jpg3;
	
 $img2=fopen("./{$www}/images/{$t2}{$i}.jpg","a"); 
fwrite($img2,$jpg3); 
fclose($img2);
}
}  
} 
 
 
 

 $tt="./{$www}/{$t2}.html";
 echo $tt;
 $bucun="不存在!";
 //$bucun=iconv('utf-8', 'gbk', $bucun);
  $cun="存在!";
 //$cun=iconv('utf-8', 'gbk', $cun);
 $fenxiang="分享到：";
 //$fenxiang=iconv('utf-8', 'gbk', $fenxiang);	
if(strpos($mm2,$fenxiang)===false){ echo $bucun;}else{echo $cun;}
if(strpos($mm2,$fenxiang)){ $mm2=str_replace($fenxiang,"<script>",$mm2);}
if(strpos($mm2,"document.write")){ $mm2=str_replace("document.write","",$mm2);}
 
  echo $t2;
	echo $mm2;

  $tt=iconv('utf-8', 'gbk', $tt);
if($w17==2){
if(!empty($mm2)){
  if(!file_exists($tt)){
 $s=fopen($tt,"w+");
 }  

$h="回向:愿世间一切众生善行坚固，无有退转";
$o="作者：佚名　来源：{$w19}";
//$h=iconv('utf-8', 'gbk', $h);
//$o=iconv('utf-8', 'gbk', $o);
// echo "<a>{$mm[0]}</a>";
fwrite($s,"<html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='applicable-device' content='pc'><meta name='keywords' content='电脑,电脑讲解,电脑技术,编程,电脑故障维修{$t2}' />
<link href='../../css/3.css' rel='stylesheet' type='text/css'></head>");
fwrite($s,"<body>");
fwrite($s,"<script src='../../3.js'></script>");
fwrite($s,"<div class='div2'><div class='heading_nav'><ul><li><a href='../../index.html'>首页</a></li>
<li> <a href='javascript:void(0)' onclick='_addFavorite()'>加入收藏</a> </li> 
				</ul</div></div>");
fwrite($s,"<script charset='utf-8' src='../../3/js/hengfu.js'></script>");
fwrite($s,"<script charset='utf-8' src='../../3/js/hengfu2.js'></script>");
fwrite($s,"<hr>");
fwrite($s,"<div class='div1'>{$t2}");
fwrite($s,"<br><br>{$w19}<br>{$mm2}</div></div>");
fwrite($s,"<br>");

if($shipin[1]!=""){
$frame="<iframe src='{$shipin[1]}' width='600' height='450'  allowFullScreen='true'></iframe>";
$frame2="<iframe src='{$shipin[1]}' width='100%' height='450' allowFullScreen='true'></iframe>";

fwrite($s,"<center><div><script>
var system ={};  
var p = navigator.platform;       
system.win = p.indexOf('Win') == 0;  
system.mac = p.indexOf('Mac') == 0;  
system.x11 = (p == 'X11') || (p.indexOf('Linux') == 0);     
if(system.win||system.mac||system.xll){
document.write(");
fwrite($s,'"'.$frame.'");');
fwrite($s,"}else{ document.write(");
fwrite($s,'"'.$frame2.'");');
fwrite($s,"}</script></div></center>");

    }
fwrite($s,"<hr>");//<hr style=' height:2px;border:none;border-top:2px dotted #185598;' />
fwrite($s,"<script charset='utf-8' src='../../js/sming.js'></script>");
fwrite($s,"</body>");
fwrite($s,"</html>"); 
 
 
 
 
 
//fclose($jpg2);	
fclose($s);

}
}
}	
$_GET['k']=$_GET['k']+1;
echo "正在采集第{$_GET['k']}条！！！";
echo "<script>window.document.location.href='777.php?k=".$_GET['k']."'</script>";




fclose($gg);
}

?>
</div>


<?php
if($_GET['k']=="index"){
$u="".$w1."".$_GET['k'].".html";	
//$u=$_POST['u'];;

//$u="http://fofa.foxue.org/gsrw/293/";

	$datasss=curl_get($u);
	//$datasss=file_get_contents("http://ssjk.foxue.org/ssdt/");
//echo $datasss;
 preg_match_all("{$w3}",$datasss,$d);
 //preg_match("/<P>(.*?)</P>/is",$datasss,$e);
preg_match_all($c,$g,$f);
	//$h=$d[0];
if($w29==1){$cc=$d[1];}
if($w29==2){$cc=$d[2];}
if($w29==3){$cc=$d[3];}
if($w29==4){$cc=$d[4];}
if($w29==5){$cc=$d[5];}

if($w31==1){$cc2=$d[1];}
if($w31==2){$cc2=$d[2];}
if($w31==3){$cc2=$d[3];}
if($w31==4){$cc2=$d[4];}
if($w31==5){$cc2=$d[5];}

if($dd==1){print_r($d[1]);}
if($dd==2){print_r($d[2]);}
if($dd==3){print_r($d[3]);}
if($dd==4){print_r($d[4]);}
if($dd==5){print_r($d[5]);}

//$h=$_POST['h'];
//print_r($d[1]);
	
$b = array_slice($d[1],31);

if($w15==1){
$gg=fopen("999.txt","a+");
}	
	 
foreach($cc2 as $k=>$va){
	$www=$w9;
	$www=iconv('utf-8', 'gbk', $www);
	if(!is_dir($www)){mkdir($www,0777,true);}
	$www=iconv( 'gbk', 'utf-8',$www);
	//$www=iconv('utf-8', 'gbk', $www);
	 $f=$cc[$k];
	$ff=$cc[$k];
	//global $ff;
	echo $va;
	echo "<li><a href='777.php?ceshi={$va}&f={$ff}'>{$cc[$k]}</a></li>";
	
$t2=str_replace(":","",$f);
$t2=str_replace("&mdash;","",$t2);
$image="{$www}/images/{$t2}.jpg";

	$w="<li><a href='./{$www}/{$t2}.html' target='_blank'>{$t2}</a></li>";
 	if(strpos($ggg,$w)===false){
    fwrite($gg,$w);
  }
}
} 

fclose($gg); 



if($_GET['k']=="htm"){
$u="".$w1."".$_GET['k']."";	
//$u=$_POST['u'];;

//$u="http://fofa.foxue.org/gsrw/293/";

	$datasss=curl_get($u);
	//$datasss=file_get_contents("http://ssjk.foxue.org/ssdt/");
//echo $datasss;
 preg_match_all("{$w3}",$datasss,$d);
 //preg_match("/<P>(.*?)</P>/is",$datasss,$e);
preg_match_all($c,$g,$f);
	//$h=$d[0];
if($w29==1){$cc=$d[1];}
if($w29==2){$cc=$d[2];}
if($w29==3){$cc=$d[3];}
if($w29==4){$cc=$d[4];}
if($w29==5){$cc=$d[5];}

if($w31==1){$cc2=$d[1];}
if($w31==2){$cc2=$d[2];}
if($w31==3){$cc2=$d[3];}
if($w31==4){$cc2=$d[4];}
if($w31==5){$cc2=$d[5];}

if($dd==1){print_r($d[1]);}
if($dd==2){print_r($d[2]);}
if($dd==3){print_r($d[3]);}
if($dd==4){print_r($d[4]);}
if($dd==5){print_r($d[5]);}

//$h=$_POST['h'];
//print_r($d[1]);
	
$b = array_slice($d[1],31);

if($w15==1){
$gg=fopen("999.txt","a+");
}	
	 
foreach($cc2 as $k=>$va){
	$www=$w9;
	$www=iconv('utf-8', 'gbk', $www);
	if(!is_dir($www)){mkdir($www,0777,true);}
	$www=iconv( 'gbk', 'utf-8',$www);
	//$www=iconv('utf-8', 'gbk', $www);
	 $f=$cc[$k];
	$ff=$cc[$k];
	//global $ff;
	echo $va;
	echo "<li><a href='777.php?ceshi={$va}&f={$ff}'>{$cc[$k]}</a></li>";
	
$t2=str_replace(":","",$f);
$t2=str_replace("&mdash;","",$t2);
$image="{$www}/images/{$t2}.jpg";

	$w="<li><a href='./{$www}/{$t2}.html' target='_blank'>{$t2}</a></li>";
 	if(strpos($ggg,$w)===false){
    fwrite($gg,$w);
  }
}
} 

fclose($gg); 









?>






<div id="3" style="width:100%;display:<?php if(!empty($_GET['ceshi'])){echo "block";} ?>">



<?php

///echo $_GET['ceshi'];
if(!empty($_GET['ceshi'])){
 $urli="".$w5."".$_GET['ceshi']."";
//$urli="http://www.gming.org/sushi/shucai/songrong/78941.html";
//echo $urli;
// $urli="http://www.fodizi.net/qt/qita/21840.html";
$datas=curl_get($urli);

preg_match("{$w7}",$datas,$mm);
//print_r($mm[0]);
preg_match("{$w37}",$mm[1],$mmm);
//echo $mmm[1];
$mm2=str_replace("</div>","",$mm[1]);
$mm2=str_replace("本文标签：</li>","",$mm2);


$mm2=str_replace("&nbsp;","",$mm2);
$mm2=str_replace("<div","<src",$mm2);
$mm2=str_replace("<script src","<src",$mm2);

preg_match("{$w23}",$mm2,$mmm);
preg_match("{$w27}",$mm2,$shipin);
preg_match_all("{$w33}",$mm2,$mmm2);
preg_match_all("{$w35}",$mm2,$shipin2);
$f=urldecode($_GET['f']);

//$f=iconv('utf-8', 'gbk', $f);
//echo "ddddddd".$f;
$image="{$w9}/images/{$f}.jpg";
	 
$t2=str_replace(":","",$f);
$t2=str_replace("&mdash;","",$t2);

 $tt="./{$w9}/{$t2}.html";
 //echo $tt;
// echo $mmm[1];
 // echo $shipin[1];
$mmm3=implode(" ",$mmm2[1]);
  //foreach(){}
  
// echo count($mmm2[1]);


  
  
if($mmm[1]!=""){ 

 if(strpos($mmm[1],"https")===false){ 
$mm2=str_replace($mmm[1],"./images/{$t2}.jpg",$mm2);
//$mm2=str_replace("<img","<a",$mm2);
if($w25==3){
$jpg=file_get_contents($mmm[1]);
$img=fopen($image,"a"); 
fwrite($img,$jpg); 
fclose($img);
}

}
  
 

 }

if(count($mmm2[1])>2){
foreach($mmm2[1] as $i=>$val){
	//echo $i;
	if(strpos($val, "http:")!== false){
        //删除对应的元素
        unset($mmm2[1][$k]);
		//echo $val;
    
	
	$mm2=str_replace($val,"./images/{$t2}{$i}.jpg",$mm2);
	//$mm2=str_replace("<img","<a",$mm2);
	$jpg3=file_get_contents($val);
	//echo $jpg3;
	
 $img2=fopen("./{$w9}/images/{$t2}{$i}.jpg","a"); 
fwrite($img2,$jpg3); 
fclose($img2);
}
}  
} 
$tt="./{$w9}/{$t2}.html";
// echo $tt;
$bucun="不存在!";
 //$bucun=iconv('utf-8', 'gbk', $bucun);
  $cun="存在!";
// $cun=iconv('utf-8', 'gbk', $cun);
 $fenxiang="分享到：";
 //$fenxiang=iconv('utf-8', 'gbk', $fenxiang);	
//if(strpos($mm2,$fenxiang)===false){ echo $bucun;}else{echo $cun;}
if(strpos($mm2,$fenxiang)){ $mm2=str_replace($fenxiang,"<script>",$mm2);}
if(strpos($mm2,"document.write")){ $mm2=str_replace("document.write","",$mm2);}

echo "<html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='applicable-device' content='pc'><meta name='keywords' content='电脑,电脑讲解,电脑技术,编程,电脑故障维修{$t2}' />
<link href='../../css/3.css' rel='stylesheet' type='text/css'></head>";
echo "<body>";
echo "<script src='../../js/3.js'></script>";
echo "<div class='div2'><div class='heading_nav'><ul><li><a href='../../index.html'>首页</a></li>
<li> <a href='javascript:void(0)' onclick='_addFavorite()'>加入收藏</a> </li> 
				</ul></div></div>";
echo "<hr>";

echo "<div class='div1'>{$t2}";
echo "<br><br>{$w19}<br>{$mm2}</div></div>";
//echo "";
echo "<hr>";

//echo "<center><div><iframe src='{$shipin[1]}' width='600' height='450'  allowFullScreen='true'></iframe></div></center>";

    
//echo  "<hr>";//<hr style=' height:2px;border:none;border-top:2px dotted #185598;' />

echo  "<script charset='utf-8' src='../../js/sming.js'></script>";
echo "</body>";
echo "</html>"; 
 //echo $qq;
 
 $tt=iconv('utf-8', 'gbk', $tt);
if($w17==2){
if(!empty($mm2)){
  if(!file_exists($tt)){
 $s=fopen($tt,"w+");
 }  

$h="回向:愿世间一切众生善行坚固，无有退转";
$o="作者：佚名　来源：{$w19}";
$h=iconv('utf-8', 'gbk', $h);
$o=iconv('utf-8', 'gbk', $o);
// echo "<a>{$mm[0]}</a>";
fwrite($s,"<html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='applicable-device' content='pc'><meta name='keywords' content='电脑,电脑讲解,电脑技术,编程,电脑故障维修{$t2}' />
<link href='../../css/3.css' rel='stylesheet' type='text/css'></head>");
fwrite($s,"<body>");

fwrite($s,"<script src='../../js/3.js'></script>");
fwrite($s,"<div class='div2'><div class='heading_nav'><ul><li><a href='../../index.html'>首页</a></li>
<li> <a href='javascript:void(0)' onclick='_addFavorite()'>加入收藏</a> </li> 
				</ul></div></div>");
fwrite($s,"<script charset='utf-8' src='../../3/js/hengfu.js'></script>");
fwrite($s,"<script charset='utf-8' src='../../3/js/hengfu2.js'></script>");
fwrite($s,"<hr>");
//fwrite($s,"");
$div1a="<div style='margin:0 auto;background: antiquewhite;margin : 10px 50px 10px 50px;
text-indent:2em;font-family:'宋体';font-size:22px;padding:20px 20px 20px 20px;
min-height:100%; _height:100%;border:0.2px solid darkslategray;border-radius:10px;
text-align: center;line-height: 20px;'>";
$div1b="<div style='margin:0 auto;background: antiquewhite;margin : 10px 50px 10px 50px;
text-indent:2em;font-family:'宋体';font-size:22px;padding:20px 20px 20px 20px;
min-height:100%; _height:100%;border:0.2px solid darkslategray;border-radius:10px;
text-align: center;line-height: 20px;'>";
fwrite($s,"<script>
var system ={};  
var p = navigator.platform;       
system.win = p.indexOf('Win') == 0;  
system.mac = p.indexOf('Mac') == 0;  
system.x11 = (p == 'X11') || (p.indexOf('Linux') == 0);     
if(system.win||system.mac||system.xll){
document.write(");
fwrite($s,'"'.$div1a.'");');
fwrite($s,"}else{ document.write(");
fwrite($s,'"'.$div1b.'");');
fwrite($s,"}</script>");

//fwrite($s,"<div class='div1'>");
fwrite($s,"{$t2}<br><br>{$w19}<br>{$mm2}");

fwrite($s,"</div>");

if($shipin[1]!=""){
$frame="<iframe src='{$shipin[1]}' width='600' height='450'  allowFullScreen='true'></iframe>";
$frame2="<iframe src='{$shipin[1]}' width='100%' height='450' allowFullScreen='true'></iframe>";

fwrite($s,"<center><script>
var system ={};  
var p = navigator.platform;       
system.win = p.indexOf('Win') == 0;  
system.mac = p.indexOf('Mac') == 0;  
system.x11 = (p == 'X11') || (p.indexOf('Linux') == 0);     
if(system.win||system.mac||system.xll){
document.write(");
fwrite($s,'"'.$frame.'");');
fwrite($s,"}else{ document.write(");
fwrite($s,'"'.$frame2.'");');
fwrite($s,"}</script></center>");

    }
fwrite($s,"<hr>");//<hr style=' height:2px;border:none;border-top:2px dotted #185598;' />
fwrite($s,"<script charset='utf-8' src='../../js/sming.js'></script>");
fwrite($s,"</body>");
fwrite($s,"</html>"); 
 
 
 
 
 
//fclose($jpg2);	
fclose($s);

}
}

}

?>




</div>




