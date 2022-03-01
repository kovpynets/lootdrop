<?php

$data = file_get_contents('../data/partners.json');
$json = json_decode($data);

//$result_array = array_unique($json);
//print_r($result_array);


?>

<div class="partners">
<!--
    <div class="bg-partners_left partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="north-america"></div>
        <?= getPartners('North America', 'United States'); ?>
    </div>
    -->
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('North America', 'Canada'); ?>
    </div>

<!--
    <div class="bg-partners_right partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="south-america"></div>
        <?= getPartners('South America', 'Argentina'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('South America', 'Chile'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('South America', 'Peru'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('South America', 'Colombia'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('South America', 'Uruguay'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('South America', 'Costa Rica'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('South America', 'Mexico'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('South America', 'Brazil'); ?>
    </div>

    <div class="bg-partners_left partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="eastern-europe"></div>
        <?= getPartners('Eastern Europe', 'Moldova'); ?>
    </div>

    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Romania'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Bulgaria'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Turkey'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Croatia'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Serbia'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Hungary'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Slovenia'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Estonia'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Latvia'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Lithuania'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Poland'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Netherlands'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Sweden'); ?>
    </div>
    -->s
    <div class="bg-partners_left partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="eastern-europe"></div>
        <?= getPartners('Eastern Europe', 'Norway'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Finland'); ?>
    </div>
    <!--<!--
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Switzerland'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Eastern Europe', 'Czech Republic'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Eastern Europe', 'Belgium'); ?>
    </div>
    -->


    <div class="bg-partners_left partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="europe"></div>
        <?= getPartners('Europe', 'United Kingdom'); ?>
    </div>
    <!--
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Europe', 'Germany'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Europe', 'France'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Europe', 'Portugal'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Europe', 'Guatemala'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Europe', 'Spain'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Europe', 'Israel'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Europe', 'Cyprus'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Europe', 'Greece'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Europe', 'Italy'); ?>
    </div>
-->



    <div class="bg-partners_left partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="asia"></div>
        <?= getPartners('Asia', 'China'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Asia', 'Taiwan'); ?>
    </div>
    <!--
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Asia', 'Japan'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Asia', 'India'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Asia', 'Thailand'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Asia', 'Philippine'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Asia', 'Vietnam'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Asia', 'Singapore'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Asia', 'Australia'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Asia', 'South Korea'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Asia', 'Indonesia'); ?>
    </div>

    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Asia', 'Hong Kong'); ?>
    </div>


    <div class="bg-partners_right partners-wrap">
        <div style="position: absolute; margin-top: -60px; display: block"  id="middle-east"></div>
        <?= getPartners('Middle East', 'Saudi Arabia'); ?>
    </div>
    <div class="bg-partners_left partners-wrap">
        <?= getPartners('Middle East', 'Kuwait'); ?>
    </div>
    <div class="bg-partners_right partners-wrap">
        <?= getPartners('Middle East', 'United Arab Emirates'); ?>
    </div>
    -->
</div>