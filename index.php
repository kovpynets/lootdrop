<?php
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    $cf_ip = $_SERVER["HTTP_CF_IPCOUNTRY"];
}

$ip_user = $_SERVER['REMOTE_ADDR'];
//$ip_user = '176.37.74.28';
//$geo = file_get_contents('http://api.sypexgeo.net/xoI1e/json/'.$ip_user.'');
//$geo = file_get_contents('http://ipwhois.app/json/'.$ip_user.'?key=MFjlPagh9obyNVdk');
$geo = file_get_contents('http://ipwhois.pro/json/'.$ip_user.'?key=MFjlPagh9obyNVdk');
$geo = json_decode($geo);

$nameFullCountry = $geo->country;
$nameLangCountry = mb_strtolower($geo->country_code);

if($_SERVER['QUERY_STRING']){
    $query = '/?'.$_SERVER['QUERY_STRING'];
}else{
    $query = '';
}

if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
    $cf_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
    $cf_country_code = mb_strtolower($cf_code);

    if($cf_country_code == 'ca') {
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "jp"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "in"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "dk"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "th"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "id"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "kr"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "tw"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "hk"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "au"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "sg"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "vn"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ph"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "cn"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ar"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "cl"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "pe"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "co"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "uy"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "mx"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "br"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ru"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    //}elseif ($cf_country_code == "ua"){
    //    header('Location: /'.$cf_country_code.$query);
    //    exit();
    //}elseif ($cf_country_code == "kz"){
    //    header('Location: /'.$cf_country_code.$query);
    //    exit();
    //}elseif ($cf_country_code == "uz"){
    //    header('Location: /'.$cf_country_code.$query);
    //    exit();
    //}elseif ($cf_country_code == "by"){
    //    header('Location: /'.$cf_country_code.$query);
    //    exit();
    }elseif ($cf_country_code == "md"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    //}elseif ($cf_country_code == "az"){
    //    header('Location: /'.$cf_country_code.$query);
    //    exit();
    }elseif ($cf_country_code == "gb"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "de"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "fr"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "es"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "it"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "pl"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "no"){
        header('Location: /'.$cf_country_code.'r'.$query);
        exit();
    }elseif ($cf_country_code == "se"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "fi"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "pt"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "sa"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "kw"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ae"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "il"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "tr"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "cy"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "gr"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ro"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "bg"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "hr"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "rs"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "hu"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "si"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ee"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "lv"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "lt"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "be"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "nl"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "cz"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "ch"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    //}elseif ($cf_country_code == "nz"){
    //    header('Location: /'.$cf_country_code.$query);
    //    exit();
    }elseif ($cf_country_code == "cr"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }elseif ($cf_country_code == "gt"){
        header('Location: /'.$cf_country_code.$query);
        exit();
    }else{
        header('Location: /us'.$query);
        exit();
    }
}else{
    if($nameFullCountry == 'Canada') {
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Mexico"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Japan"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "India"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Malaysia"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Thailand"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Indonesia"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "China"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    //}elseif ($nameFullCountry == "Russia"){
    //    header('Location: /'.$nameLangCountry.$query);
    //    exit();
    }elseif ($nameFullCountry == "Ukraine"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Turkey"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Kazakhstan"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Belarus"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Argentina"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Chile"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Peru"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Colombia"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Uruguay"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "Brazil"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }elseif ($nameFullCountry == "United Kingdom"){
        header('Location: /'.$nameLangCountry.$query);
        exit();
    }else{
        header('Location: /us'.$query);
        exit();
    }
}

?>
<!--
<div class="">Lang: <small><?= $geo->country->iso; ?></small>; Сontinent: <small><?= $geo->country->continent; ?></small>; Name: <small><?= $geo->country->name_en; ?></small></div>
-->