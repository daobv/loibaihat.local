<?php
$home='/music/zing/';

include'curl.php';
$html=get($url);
$token=!empty($_GET['token']) ? $_GET['token'] : pick('token=','"',$html);
$status=pick('<form','</form',$html);

$udl='http://mp3.zing.vn/bai-hat/tylg/'.$_GET['id'].'.html';
$dl=get($udl);
$link='http://mp3.zing.vn/download/song/'.pick('"http://mp3.zing.vn/download/song/','"',$dl);

$html=str_replace(array('href="/web/','href="http://mp3.m.zing.vn/web/'),'href="'.$home.'web/',$html);
$html=str_replace('head01','bmenu',$html);
$html=str_replace('snav2','snav2',$html);
$html=preg_replace('|<!DOC(.*?)</form>|is','',$html);
$html=preg_replace('/<a href="(.+?)" class="btnsubmit">Play 128kbps<\/a>/is','
<object type="application/x-shockwave-flash" data="http://wapmienphi.com/player/player_mp3.swf" width="200" height="20">
<param name="wmode" value="transparent" />
<param name="movie" value="http://wapmienphi.com/player/player_mp3.swf" />
<param name="FlashVars" value="mp3='.$link.'&amp;showstop=1&amp;showinfo=1&amp;showvolume=1&amp;autoplay=1" />
<a href="'.$link.'" class="btnsubmit">Play 128kbps</a>
</object>
',$html);
$html=preg_replace('|<div style="margin-top:2px"><a href="http://login.(.*?)"(.+?)</a>(.+?)</a> \(miễn phí\)|is','<div style="margin-top:2px"><a href="'.$link.'" class="btnsubmit" style="background-color:#80A5D5">Download 128kbps</a></div><div style="margin-top:8px"><a href="http://mp3.zing.vn/download/vip/song/'.$_GET['id'].'" class="btnsubmit" style="background-color:#C780D5">Download 320kbps</a></div><div style="margin-top:8px"><iframe src="//www.facebook.com/plugins/like.php?href=http://'.$_SERVER["SERVER_NAME"].''.$_SERVER["REQUEST_URI"].'&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe></div>',$html);
$html=preg_replace('|<div id="footer">(.*?)</html>|is','',$html);
$html=preg_replace('|Ca sĩ</a></span>(.*?)</div>|is','Ca sĩ</a></span></div>',$html);
$html=str_replace('<a href="">« Trở về</a>','',$html);
$html=str_replace('?quality=1&ver=w','',$html);
$html=str_replace('&quality=1&ver=w','',$html);
$html=str_replace('&from=hotsong','',$html);
$html=str_replace('&from=relatealbum','',$html);
$html=str_replace('inv snavselect','currentpage',$html);
$html=str_replace('bpaging nobrd','menu',$html);
$html=str_replace('tabnav3','bmenu',$html);
$html=explode('<div class="fr">',$html);
for($i=0;$i<count($html); $i++){
$out.=$html[$i].($i % 2 ? (($i!=count($html)-1) ? '<div class="menu">':''):(($i!=count($html)-1) ? '<div class="menu">':'')); }
$html='<div class="menu">
<form method="get" action= "'.$home.'web/search">
<input class="input" name="q" value="'.$_GET['q'].'" type="text" />
<select name="t">
<option value="0">Bài hát</option>
<option value="2">Ca sĩ</option>
<option value="1">Album</option>
</select>
<input class="btnsubmit" value="Tìm kiếm" type="submit" /></form>'.$out;
$textl=pick('<strong>','</strong>',$html);
$textl=strip_tags($textl);
?>