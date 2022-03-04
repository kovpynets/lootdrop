<header class="header ">
    <nav class="navbar nav-hyperx navbar-expand-md custom-toggler fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="/assets/svg/hx_logo.svg" height="45" alt="CoolBrand">
            </a>
            <div class="navbar-nav-m">
                <div class="navbar-header pull-right">
                    <a class="navbar-btn pull-right nav-item nav-link nav-link_border-l" href="#" data-toggle="dropdown"><img style="width: 100%;max-width: 26px;" src="/../assets/country-lang/svg/<?php if($gLang == 'portugal'){echo 'brazil';}else{ echo mb_strtolower($gLang);} ?>.svg"></a>
                    <ul class="dropdown-menu realign">
                        <a class="dropdown-item" href="?l=english"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/united-kingdom.svg"></span>English</a>
                        <a class="dropdown-item" href="?l=spanish"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/spain.svg"></span>Spanish</a>
                        <a class="dropdown-item" href="?l=french"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/france.svg"></span>French</a>
                        <a class="dropdown-item" href="?l=japanese"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/japan.svg"></span>Japanese</a>
                        <a class="dropdown-item" href="?l=thai"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/thailand.svg"></span>Thai</a>
                        <a class="dropdown-item" href="?l=indonesian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/indonesia.svg"></span>Indonesian</a>
                        <a class="dropdown-item" href="?l=china"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/china.svg"></span>China</a>
                        <a class="dropdown-item" href="?l=russian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/russia.svg"></span>Russian</a>
                        <a class="dropdown-item" href="?l=ukranian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/ukraine.svg"></span>Ukranian</a>
                        <a class="dropdown-item" href="?l=turkish"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/turkey.svg"></span>Turkish</a>
                        <a class="dropdown-item" href="?l=belarussian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/belarus.svg"></span>Belarussian</a>
                        <a class="dropdown-item" href="?l=portuguese"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/brazil.svg"></span>Portuguese</a>
                        <a class="dropdown-item" href="?l=portuguese"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/saudi-arabia.svg"></span>Arabic</a>
                    </ul>
                </div>
                <a target="_blank" href="https://www.hyperxgaming.com" class="nav-item nav-link nav-link_border"><img src="/assets/img/q.png"></a>
            </div>


            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <img src="/assets/img/f.png">
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <!--
                    <a href="#north-america" class="nav-item nav-link"><?= $langInside['north_america'];?></a>
                     -->
                    <a href="#south-america" class="nav-item nav-link"><?= $langInside['south_america'];?></a>
                    <a href="#eastern-europe" class="nav-item nav-link"><?= $langInside['eastern_europe'];?></a>
                    <a href="#europe" class="nav-item nav-link"><?= $langInside['europe'];?></a>
                    <a href="#asia" class="nav-item nav-link"><?= $langInside['asia'];?></a>
                    <!--
                    <a href="#middle-east" class="nav-item nav-link"><?= $langInside['middle_east'];?></a>
                    -->
                </div>
                <div class="navbar-nav navbar-nav-d">
                    <div class="dropdown">
                        <div class="dropdown-toggle nav-item nav-link nav-link_border-l" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                            <img style="width: 100%;max-width: 26px;" src="/../assets/country-lang/svg/<?php if($gLang == 'portugal'){echo 'brazil';}else{ echo mb_strtolower($gLang);} ?>.svg">
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?l=english"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/united-kingdom.svg"></span>English</a>
                            <a class="dropdown-item" href="?l=spanish"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/spain.svg"></span>Spanish</a>
                            <a class="dropdown-item" href="?l=french"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/france.svg"></span>French</a>
                            <a class="dropdown-item" href="?l=japanese"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/japan.svg"></span>Japanese</a>
                            <a class="dropdown-item" href="?l=thai"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/thailand.svg"></span>Thai</a>
                            <a class="dropdown-item" href="?l=indonesian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/indonesia.svg"></span>Indonesian</a>
                            <a class="dropdown-item" href="?l=china"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/china.svg"></span>China</a>
                            <a class="dropdown-item" href="?l=russian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/russia.svg"></span>Russian</a>
                            <a class="dropdown-item" href="?l=ukranian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/ukraine.svg"></span>Ukranian</a>
                            <a class="dropdown-item" href="?l=turkish"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/turkey.svg"></span>Turkish</a>
                            <a class="dropdown-item" href="?l=belarussian"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/belarus.svg"></span>Belarussian</a>
                            <a class="dropdown-item" href="?l=portuguese"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/brazil.svg"></span>Portuguese</a>
                            <a class="dropdown-item" href="?l=arabic"> <span><img style="max-width: 24px;max-height: 24px;width: 100%;" src="../assets/country-lang/svg/saudi-arabia.svg"></span>Arabic</a>
                        </div>
                    </div>
                    <a target="_blank" href="https://www.hyperxgaming.com" class="nav-item nav-link nav-link_border"><img src="/assets/img/q.png"></a>
                </div>
            </div>
        </div>
    </nav>
</header>