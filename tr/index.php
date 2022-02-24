<?php
include '../lang/lang.tr.php';
if(isset($_GET['l'])){
    $gLang = $_GET['l'];
    if($gLang === 'english'){
        $gLang = 'united-kingdom';
        $changeLangGlobal = 'gb';
    }elseif ($gLang === 'spanish'){
        $gLang = 'spain';
        $changeLangGlobal = 'mx';
    }elseif ($gLang === 'french'){
        $gLang = 'france';
        $changeLangGlobal = 'fr';
    }elseif ($gLang === 'japanese'){
        $gLang = 'japan';
        $changeLangGlobal = 'jp';
    }elseif ($gLang === 'thai'){
        $gLang = 'thailand';
        $changeLangGlobal = 'th';
    }elseif ($gLang === 'indonesian'){
        $gLang = 'indonesia';
        $changeLangGlobal = 'id';
    }elseif ($gLang === 'china'){
        $gLang = 'china';
        $changeLangGlobal = 'cn';
    }elseif ($gLang === 'russian'){
        $gLang = 'russia';
        $changeLangGlobal = 'ru';
    }elseif ($gLang === 'ukranian'){
        $gLang = 'ukraine';
        $changeLangGlobal = 'ua';
    }elseif ($gLang === 'turkish'){
        $gLang = 'turkey';
        $changeLangGlobal = 'tr';
    }elseif ($gLang === 'belarussian'){
        $gLang = 'belarus';
        $changeLangGlobal = 'by';
    }elseif ($gLang === 'portuguese'){
        $gLang = 'portugal';
        $changeLangGlobal = 'br';
    }elseif ($gLang === 'hindi'){
        $gLang = 'india';
        $changeLangGlobal = 'in';
    }elseif ($gLang === 'malay'){
        $gLang = 'malaysia';
        $changeLangGlobal = 'my';
    }
}else{
    $gLang = 'turkey';
    $changeLangGlobal = $lang['lang'];
}
?>
<?php include '../lang/country/lang-inside.'.$changeLangGlobal.'.php';  ?>

<?php include '../template/header.php';?>
<div class="wrapper wrapper-<?= $lang['lang'] ?> <?php if($date > $date_soonFix){ echo 'run';}elseif($date < $date_soonFix){echo 'soon';}; ?>  <?php if($date > $date_runFix){echo 'ends';}?>">
    <?php if($date > $date_soonFix): ?>

        <?php if($date > $date_runFix): ?>
            <!-- End -->
            <?php include '../template/nav-end.php';?>
        <?php elseif($date < $date_runFix): ?>
            <!-- Run -->
            <?php include '../template/nav.php';?>
        <?php endif; ?>

    <?php elseif ($date < $date_soonFix): ?>
        <!-- Soon -->
        <?php include '../template/nav-soon.php';?>
    <?php endif; ?>
    <main class="main main-<?= $lang['lang']?>">
        <?php if($date > $date_soonFix): ?>

            <?php if($date > $date_runFix): ?>
                <!-- End -->
                <?php include '../template/event-end.php';?>
            <?php elseif($date < $date_runFix): ?>
                <!-- Run -->
                <?php include '../template/event-run.php';?>
                <?php include '../template/partners.php';?>
            <?php endif; ?>

        <?php elseif ($date < $date_soonFix): ?>
            <?php include '../template/event-soon.php';?>
        <?php endif; ?>
    </main>
</div>

<?php include '../template/footer.php';?>
