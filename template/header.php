<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}

$timer_soon= parse_ini_file("../timer_soon.ini");
$timer_run = parse_ini_file("../timer_run.ini");

$date_soon = $timer_soon[$lang['lang']];
$date_soonFix =  substr($timer_soon[$lang['lang']],0,-3);
$date_runFix =  substr($timer_run[$lang['lang']],0,-3);

$date = date('m/d/Y H:i:s');
$ip_user = $_SERVER['REMOTE_ADDR'];
//$ip_user = '176.37.74.28';

//$geo = file_get_contents('http://api.sypexgeo.net/xoI1e/json/'.$ip_user.'');
//$geo = file_get_contents('http://ipwhois.app/json/2600:387:8:f::3e');
$geo = file_get_contents('http://ipwhois.pro/json/'.$ip_user.'?key=MFjlPagh9obyNVdk');
//$geo = file_get_contents('http://ipwhois.app/json/'.$ip_user.'?key=MFjlPagh9obyNVdk');
$geo = json_decode($geo);

//var_dump($geo);

$time_soon = $timer_soon[$lang['lang']];
$time_run = $timer_run[$lang['lang']];

//$nameTimezone = $geo->region->timezone;

// На продакшене
$nameTimezone = $geo->timezone;
//$nameTimezone = 'Europe/Kiev';

$date = new DateTime(null);

$date = new DateTime(null, new DateTimeZone($nameTimezone));

//echo $nameTimezone.': <br>'.($date->getTimestamp() + $date->getOffset()).'<br />'."\r\n";

//echo '<br>';

//echo '</br>';
$date = $date->getTimestamp() + $date->getOffset();



//  $date = 1615852860000;

function getHost($Address) {
    $parseUrl = parse_url(trim($Address));
    return $parseUrl['host'];
}
function getRegion($Region){
    //$parseUrl = parse_url(trim($Region));
    //return $parseUrl['region'];
    $regs = str_replace(" ","-",$Region);
    $reg = mb_strtolower($regs);
    return $reg;
}

function getCountry($Country){
    //$parseUrl = parse_url(trim($Region));
    //return $parseUrl['region'];
    $regs = str_replace(" ","-",$Country);
    $regCountry = mb_strtolower($regs);
    return $regCountry;
}

function onCli($link, $region, $country){
    //return "dataLayer.push({'event': 'GAevent','eventCategory':  'Partner','eventAction': 'Partner-".getHost($link)."','eventLabel': 'Partner',});";

    return "dataLayer.push({'event': 'GAevent','eventCategory':  'Partner','eventAction': 'Partner-".getHost($link).'-'.getRegion($region)."','eventLabel': 'Partner-click-".getHost($link).'-'.getRegion($region).'-'.getCountry($country)."',});";
}

function getPartners($region, $country)
{
    $data = file_get_contents('../data/partners.json');
    $json = json_decode($data);

    $countryNew = str_replace(" ","-",$country);

    echo '<div class="container"><div class="row">
            <div class="col-12">
                <div class="card-header header-country text-center RBNo3-bold">
                    <span style="max-width: 80px;max-height: 80px;width: 100%;" class="d-inline-block btn"><img class="img-fluid img-flag" src="/assets/country/svg/'.mb_strtolower($countryNew).'.svg"></span>
                    <span class="d-inline-block btn"><h2 class="text-uppercase partner_header">'.$country.'</h2></span>
                </div>
            </div>
          </div>';
    echo '<div class="row justify-content-center">';
    foreach ($json as $item) {
        if ($item->region == $region and $item->country == $country) {
            echo '<div class="col-6 col-md-4 justify-content-center my-auto text-center partner_item">
                    <a onclick="'.onCli($item->link, $item->region, $item->country).'" href="'.$item->link.'" target="_blank"><img class="gg-img" src="/assets/partners/'.$item->image.'" alt="'.$item->partner.'" title="'.$item->partner.'"></a>
                  </div>';
        }
    }
    echo '</div></div>';

}

//include '../lang/country/lang-inside.us.php';

//include '../lang/lang'.$lang['lang'].'.php';

?>
<!doctype html>
<html lang="<?= $lang['lang'] ?>"
    <?php
    if($lang['lang'] == "sa" OR $lang['lang'] == 'kw' OR $lang['lang'] == 'ae'){
    echo 'dir="rtl"';
    }
    ?>
>
<head>
        <?php if($date > $date_soonFix): ?>

            <?php if($date > $date_runFix): ?>

            <script>
                var dataLayer = dataLayer || [];
                dataLayer.push({
                    "promostatus": "end"
                });

            </script>
            <?php elseif($date < $date_runFix): ?>
            <script async src="https://www.hp.com/cma/ng/lib/exceptions/privacy-banner.js"></script>

            <!-- Run -->
            <script>
                var dataLayer = dataLayer || [];
                dataLayer.push({
                    "promostatus": "active"
                });
            </script>

            <?php endif; ?>

        <?php elseif ($date < $date_soonFix): ?>
            <script async src="https://www.hp.com/cma/ng/lib/exceptions/privacy-banner.js"></script>
            <script>
                var dataLayer = dataLayer || [];
                dataLayer.push({
                    "promostatus": "pre-promo"
                });
            </script>
        <?php endif; ?>
    <script>
        if(!window.dataLayer)dataLayer=[]; //create the data layer if needed
        dataLayer.push({ event: 'pb.onOptIn', callback: CallBackFunction, type: [3], or: true }); //register analytics opt-in handler

        /* loadGTM(id) - function loads the specified GTM container */

        var loadGTM=function(id){

            var script=document.createElement('script'); //create <script> tagscript.innerHTML= //script tag contents, a self-executing function that loads the specified GTM container

            "(function(w,d,s,DL,i){\

            w[DL]=w[DL]||[];

w[DL].push({'gtm.start':new Date().getTime(),event:'gtm.js'});

var f=d.getElementsByTagName(s)[0],

            j=d.createElement(s);

j.async=true;

j.src='https://www.googletagmanager.com/gtm.js?id=GTM-'+i+'&l=dataLayer';

f.parentNode.insertBefore(j,f);

        })(window,document,'script','dataLayer','"+id+"');",

        document.getElementsByTagName(document.body?'body':'head')[0].appendChild(script); //add <script> to body or head
        }



        /* create dataLayer array if needed */

        if(!window.dataLayer||window.dataLayer.constructor!=Array)dataLayer=[];

        /* calls loadGTM('GTM-NW4ZGV9') upon retargeting opt-in, resulting in load of GTM container GTM- NW4ZGV9'*/
        dataLayer.push({event:'pb.onOptIn',callback:function(){loadGTM('GTM-NW4ZGV9')},type:3});


        /* end */


    </script>
    <style>
        .kw-country .navbar-nav-m .dropdown-menu .dropdown-item span img, .sa-country .navbar-nav-m .dropdown-menu .dropdown-item span img, .ae-country .navbar-nav-m .dropdown-menu .dropdown-item span img{
            margin-left: 10px;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WFN4LQD');</script>
    <!-- End Google Tag Manager -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $langInside['meta_title'] ?> ≡ HyperX Loot Drop</title>
    <meta name="description" content="<?= $lang['meta_description'] ?>"/>

    <!-- Open Graph -->

    <meta property="og:title" content="<?= $lang['og_title'] ?>"/>
    <meta property="og:description" content="<?= $lang['og_description'] ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME']; ?>/<?= $lang['lang'] . '/' ?>">
    <!--
    <meta property="og:image" content="https://<?= $_SERVER['SERVER_NAME']; ?>/assets/open-graph/lootdrop_<?= $lang['og_img_secure'] ?>.jpg"/>
    <meta property="og:image:secure_url" content="https://<?= $_SERVER['SERVER_NAME']; ?>/assets/open-graph/lootdrop_<?= $lang['og_img_secure'] ?>.jpg"/>
    -->
    <meta property="og:image" content="https://<?= $_SERVER['SERVER_NAME']; ?>/assets/open-graph/lootdrop_default.jpg"/>
    <meta property="og:image:secure_url" content="https://<?= $_SERVER['SERVER_NAME']; ?>/assets/open-graph/lootdrop_default.jpg"/>

    <!-- Open Graph -->

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/font/stylesheet.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/count.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
</head>
<body class="<?= $lang['lang'] ?>-country country-lang_<?= $langInside['lang'] ?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFN4LQD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->