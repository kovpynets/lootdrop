<div class="bg-block bg-soon">
    <div class="container">
        <div class="row">
            <div class="col-12 header-h1">
                <h1 class="text-center"><span class="f-500-italic-b"><?= $lang['tagline_header_end'] ?></span></h1>
            </div>
        </div>
    </div>
</div>
<div style="display:none;" class="timer-text">
    <div class="container text-center text-uppercase">
        <!--<h3 style="font-family: 'RBNo3.1'; font-weight: 300; font-style: normal;"><?= $time_soon ?></h3>-->
        <h3 class="cyrillic"><?= $lang['tagline_timer_stop'] ?> </h3>
    </div>
</div>
<?php
$fontLang = 'RBNo3.1';

if($lang['lang'] == 'ru' or $lang['lang'] == 'ua' or $lang['lang'] == 'kz' or $lang['lang'] == 'by' or $lang['lang'] == 'uz'  ){
    $fontLang = 'Russo One';
}
?>
<div style="display: none" class="timer-info">
    <div class="content">
        <script>
            (function() {
                var _id = "471908a468a9acb6caffdf75cf23f492";
                while (document.getElementById("timer" + _id)) _id = _id + "0";
                document.write("<div id='timer" + _id + "' style='min-width:375px;height:70px;'></div>");
                var _t = document.createElement("script");
                _t.src = "../timer/<?= $lang['lang'] ?>.timer.min.js";
                var _f = function(_k) {
                    var l = new MegaTimer(_id, {
                        "view": [1, 1, 1, 1],
                        "type": {
                            "currentType": "1",
                            "params": {
                                "usertime": true,
                                "tz": "3",
                                "utc": <?= $time_soon ?>
                            }
                        },
                        "design": {
                            "type": "plate",
                            "params": {
                                "space": "2",
                                "number-font-family": {
                                    "family": "RBNo3.1",
                                    //"link": "<link href='//fonts.googleapis.com/css?family=Comfortaa&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                },
                                "number-font-size": "55",
                                "number-font-color": "#ffffff",
                                "separator-margin": "10",
                                "separator-on": true,
                                "separator-text": ":",
                                "text-on": true,
                                "text-font-family": {
                                    //"family": "Comfortaa",
                                    "family": "<?= $fontLang ?>",
                                    //"link": "<link href='//fonts.googleapis.com/css?family=Comfortaa&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                },
                                "text-font-size": "13",
                                "text-font-color": "#000000"
                            }
                        },
                        "designId": 1,
                        "theme": "white",
                        "width": 375,
                        "height": 70
                    });
                    if (_k != null) l.run();
                };
                _t.onload = _f;
                _t.onreadystatechange = function() {
                    if (_t.readyState == "loaded") _f(1);
                };
                var _h = document.head || document.getElementsByTagName("head")[0];
                _h.appendChild(_t);
            }).call(this);
        </script>
        <style>
            .timer-separator{
                color:  black!important;
            }
            .timer-flipchart-face{
                background-color: transparent;
            }
            .timer-flipchart-top::before, .timer-flipchart-front::before{
                background-color: rgb(0 0 0 / 0%);!important;
            }
            .timer-flipchart-bottom::before, .timer-flipchart-back::before{
                background-color: rgb(0 0 0 / 0%);!important;
            }
        </style>
    </div>
</div>