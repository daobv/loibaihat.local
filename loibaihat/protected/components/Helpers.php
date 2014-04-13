<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helpers {

    public static function curl($url) {
        error_reporting(0);
        $loading = sys_getloadavg();
        $limit = 15;
        if ($loading [0] >= $limit)
            header('HTTP/1.1 503 Too busy, try again later');
        $timeout = 30;
        $user = 'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_COOKIESESSION, TRUE);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, $user);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 1);
        $data = array('quality' => $_GET['quality'], 'token' => $_GET['token'], 'q' => $_GET['q'], 't' => $_GET['t'], 'page' => $_GET['page'], 'id' => $_GET['id']);
        curl_setopt($ch, CURLOPT_POSTFILEDS, $data);

        $ret = curl_exec($ch);
        return $ret;
    }

    public static function getTag($attr, $value, $replace, $html) {

        $attr = preg_quote($attr);
        $value = preg_quote($value);
        $tag_regex = '/<div[^>]*' . $attr . '="' . $value . '">(.*?)<\\/div>/si';
        $html = preg_replace($tag_regex, $replace, $html);
        return $html;
    }

    public static function pick($bd, $kt, $n) {
        $a = explode($bd, $n);
        $b = explode($kt, $a[1]);
        $c = $b[0];
        return $c;
    }

    public static function getData($html) {
        $home = "/";

        $html = str_replace('/<div class="mp3rank1">(.*?)<\/div>/s', " ", $html);
        $html = preg_replace('|<!DOC(.*?)</form>|is', '', $html);

        $html = preg_replace('|<div style="margin-top:2px">'
                . '<a href="http://login.(.*?)"(.+?)</a>(.+?)</a> '
                . '\(miễn phí\)|is', '<div style="margin-top:2px">'
                . '<a href="' . $link . '" class="btnsubmit" style="background-color:#80A5D5">Download 128kbps</a></div>'
                . '<div style="margin-top:8px"><a href="http://mp3.zing.vn/download/vip/song/' . $_GET['id'] . '" class="btnsubmit" style="background-color:#C780D5">Download 320kbps</a></div><div style="margin-top:8px"><iframe src="//www.facebook.com/plugins/like.php?href=http://' . $_SERVER["SERVER_NAME"] . '' . $_SERVER["REQUEST_URI"] . '&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe></div>', $html);

        $html = preg_replace('|<div id="footer">(.*?)</html>|is', '', $html);
        $html = preg_replace('/<ul[^>]*class="tag-page">(.*?)<\\/ul>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="main-nav">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu2" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu3" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu4" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu5" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu6" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu7" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu8" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*id="_menu9" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*class="secp-nav">(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*class="upload">(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<li[^>]*class="off-ads" [^>]*>(.*?)<\\/li>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="login[^>]*" [^>]*>(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="fix-user-vip[^>]*" [^>]*>(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<script[^>]*>(.*?)<\\/script>/si', " ", $html);
        $html = preg_replace('/<h2[^>]*class="bxh-icon-select">(.*?)<\\/h2>/si', " ", $html);
        $html = preg_replace('/<div[^>]*style="top[^>]*" [^>]*>(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="genre-categories">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<h1[^>]*class="new-content-block-title">(.*?)<\\/h1>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="bxh-option">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*id="inputDate[^>]*" [^>]*>(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="date-option">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="sidebar-block">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<a[^>]*class="ads-650-60" [^>]*>(.*?)<\\/a>/si', " ", $html);
        $html = preg_replace('/<a[^>]*class="ads-650-60" [^>]*>(.*?)<\\/a>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="zing-top-song[^>]*">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="footer">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="link-group">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<p[^>]*class="link-group-title">(.*?)<\\/p>/si', " ", $html);
        $html = preg_replace('/<p[^>]*class="copyright">(.*?)<\\/p>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="fixed-function">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="link-group last-child">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<p[^>]*class="author">(.*?)<\\/p>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="sidebar">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<iframe[^>]*>(.*?)<\\/iframe>/si', " ", $html);
        $html = preg_replace('/<div[^>]*data-font="tahoma"[^>]*>(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="zme-like">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="_[^>]*">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*id="_[^>]*">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<a[^>]*class="scroll-top"[^>]*>(.*?)<\\/a>/si', " ", $html);
        $html = preg_replace('/<link(.*?)>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="wrapper[^>]*">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="rank-info">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<span[^>]*class="z-chart[^>]*">(.*?)<\\/span>/si', " ", $html);
        $html = preg_replace('/<div[^>]*class="z-chart[^>]*">(.*?)<\\/div>/si', " ", $html);
        $html = preg_replace('/<span[^>]*class="order-number[^>]*">(.*?)<\\/span>/si', " ", $html);

        $html = preg_replace('/<\/?a[^>]*class="new-singer-img[^>]*"[^>]*\>/i', "", $html);
        $html = preg_replace('/<a[^>]*class="_strCut"[^>]*\>/i', "<a>", $html);

        $html = explode('<div class="fr">', $html);

        for ($i = 0; $i < count($html); $i++) {
            $out.=$html[$i] . ($i % 2 ? (($i != count($html) - 1) ? '<div class="album-item">' : '') : (($i != count($html) - 1) ? '<div class="menu">' : ''));
        }
        $html = '<div class="menu">
<form method="get" action= "/site/search">
<input class="input" name="q" value="' . $_GET['q'] . '" type="text" />
<select name="t">
<option value="0">Bài hát</option>
<option value="2">Ca sĩ</option>
<option value="1">Album</option>
</select>
<input class="btnsubmit" value="Tìm kiếm" type="submit" /></form>' . $out;
        return $html;
    }

    public static function getMobileZing($url) {
        $home = '/music/zing/';
        $html = Helpers::curl($url);
        $token = !empty($_GET['token']) ? $_GET['token'] : Helpers::pick('token=', '"', $html);
        $status = Helpers::pick('<form', '</form', $html);
        $udl = 'http://mp3.zing.vn/bai-hat/tylg/' . $_GET['id'] . '.html';
        $dl = Helpers::curl($udl);
        $link = 'http://mp3.zing.vn/download/song/' . Helpers::pick('"http://mp3.zing.vn/download/song/', '"', $dl);
        $html = str_replace(array('href="/web/song', 'href="http://mp3.m.zing.vn/web/song'), 'href="/site', $html);
        $html = str_replace('head01', 'bmenu', $html);
        $html = str_replace('snav2', 'snav2', $html);
        $html = preg_replace('|<!DOC(.*?)</form>|is', '', $html);
        $html = preg_replace('/<a href="(.+?)" class="btnsubmit">Play 128kbps<\/a>/is', '
<object type="application/x-shockwave-flash" data="http://wapmienphi.com/player/player_mp3.swf" width="200" height="20">
<param name="wmode" value="transparent" />
<param name="movie" value="http://wapmienphi.com/player/player_mp3.swf" />
<param name="FlashVars" value="mp3=' . $link . '&amp;showstop=1&amp;showinfo=1&amp;showvolume=1&amp;autoplay=1" />
<a href="' . $link . '" class="btnsubmit">Play 128kbps</a>
</object>
', $html);
        $html = preg_replace('|<div style="margin-top:2px"><a href="http://login.(.*?)"(.+?)</a>(.+?)</a> \(miễn phí\)|is', '<div style="margin-top:2px"><a href="' . $link . '" class="btnsubmit" style="background-color:#80A5D5">Download 128kbps</a></div><div style="margin-top:8px"><a href="http://mp3.zing.vn/download/vip/song/' . $_GET['id'] . '" class="btnsubmit" style="background-color:#C780D5">Download 320kbps</a></div><div style="margin-top:8px"><iframe src="//www.facebook.com/plugins/like.php?href=http://' . $_SERVER["SERVER_NAME"] . '' . $_SERVER["REQUEST_URI"] . '&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe></div>', $html);
        $html = preg_replace('|<div id="footer">(.*?)</html>|is', '', $html);
        $html = preg_replace('|Ca sĩ</a></span>(.*?)</div>|is', 'Ca sĩ</a></span></div>', $html);
        $html = str_replace('<a href="">« Trở về</a>', '', $html);
        $html = str_replace('?quality=1&ver=w', '', $html);
        $html = str_replace('&quality=1&ver=w', '', $html);
        $html = str_replace('&from=hotsong', '', $html);
        $html = str_replace('&from=relatealbum', '', $html);
        $html = str_replace('inv snavselect', 'currentpage', $html);
        $html = str_replace('bpaging nobrd', 'menu', $html);
        $html = str_replace('tabnav3', 'bmenu', $html);
        $html = str_replace('web/search', 'site/search', $html);
        $html = explode('<div class="fr">', $html);
        for ($i = 0; $i < count($html); $i++) {
            $out.=$html[$i] . ($i % 2 ? (($i != count($html) - 1) ? '<div class="menu">' : '') : (($i != count($html) - 1) ? '<div class="menu">' : ''));
        }
        $html = '<div class="menu">
<form method="get" action= "/site/search">
<input class="input" name="q" value="' . $_GET['q'] . '" type="text" />
<select name="t">
<option value="0">Bài hát</option>
<option value="2">Ca sĩ</option>
<option value="1">Album</option>
</select>
<input class="btnsubmit" value="Tìm kiếm" type="submit" /></form>' . $out;
        $textl = Helpers::pick('<strong>', '</strong>', $html);
        $textl = strip_tags($textl);
        return $html;
    }

    public static function getTextBetweenTags($string, $tagname) {
        $pattern = "/<$tagname ?.*>(.*)<\/$tagname>/";
        preg_match($pattern, $string, $matches);
        return $matches[1];
    }

}
