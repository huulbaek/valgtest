<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <style>
        .yes, .no, .forward {
            cursor: pointer;
        }
        .loop-me div {
            -webkit-transition:width 300ms ease-in-out, height 300ms ease-in-out;
            -moz-transition:width 300ms ease-in-out, height 300ms ease-in-out;
            -o-transition:width 300ms ease-in-out, height 300ms ease-in-out;
            transition:width 300ms ease-in-out, height 300ms ease-in-out;
        }
        body {
            -webkit-font-smoothing: antialiased;
        }
        @media screen and (max-width: 60em) {
            h1 {
                font-size: 1.6em !important;
            }
            #test-content {
                font-size: 0.9em !important;
                position: static !important;
            }
            #right {
                width: 100% !important;
                float: none !important;
            }
            #left {
                width: 100% !important;
                float: none !important;
            }
            #left div {
                height: 25px !important;
            }
            #left div img {
                width: 25px !important;
            }
            #left div div div {
                height: 25px !important;
                line-height: 25px !important;
            }
            #left div div {
                height: 25px !important;
                line-height: 25px !important;
            }
        }
        @media screen and (max-width: 40.625em) {
            h1 {
                font-size: 1.3em !important;
            }
            #test-content {
                font-size: 0.8em !important;
                position: static !important;
            }
            #right {
                width: 100% !important;
                clear: both !important;
            }
            #left {
                width: 100% !important;
                clear: both !important;
            }
            #left div {
                height: 25px !important;
            }
            #left div img {
                width: 25px !important;
            }
            #left div div div {
                height: 25px !important;
                line-height: 25px !important;
            }
            #left div div {
                height: 25px !important;
                line-height: 25px !important;
            }
        }
    </style>
</head>
<body>

<?php
    // Database
    $link = mysqli_connect("localhost", "database_user", "database_password", "database");
    // Manuelt udvalgte forslag
    $forslag = array();
    $forslag[1]["ftid"] = 'B 23';
    $forslag[1]["samling"] = '2013-14';
    $forslag[1]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_forsgsordning_med_krekort_til_17-a';
    $forslag[1]["titel"] = 'Skal vi lave et forsøg med kørekort til 17-årige?';
    $forslag[2]["ftid"] = 'B 30';
    $forslag[2]["samling"] = '2013-14';
    $forslag[2]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_at_traekke_aktstykke_37_af_3._december_';
    $forslag[2]["titel"] = 'Skulle vi have stoppet for salget af DONG?';
    $forslag[3]["ftid"] = 'B 69';
    $forslag[3]["samling"] = '2013-14';
    $forslag[3]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_opholdstilladelse_til_edward_snowden';
    $forslag[3]["titel"] = 'Skulle vi tilbyde Edward Snowden opholdstilladelse?';
    $forslag[4]["ftid"] = 'B 88';
    $forslag[4]["samling"] = '2013-14';
    $forslag[4]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_genindfrelse_af_pointsystemet_for_aegte';
    $forslag[4]["titel"] = 'Skal vi genindføre pointsystemet for ægtefællesammenføring?';
    $forslag[5]["ftid"] = 'B 3';
    $forslag[5]["samling"] = '2014-15';
    $forslag[5]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_halvering_af_genoptjeningsperioden_for_';
    $forslag[5]["titel"] = 'Skal vi halvere genoptjeningsperioden for arbejdsløshedsdagpenge?';
    $forslag[6]["ftid"] = 'B 10';
    $forslag[6]["samling"] = '2014-15';
    $forslag[6]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_beslutningsforslag_om_forbud_mod_maskering_og_heldaekkende_bekl';
    $forslag[6]["titel"] = 'Skal vi have forbud mod maskering og heldækkende beklædning i det offentlige rum?';
    $forslag[7]["ftid"] = 'B 12';
    $forslag[7]["samling"] = '2014-15';
    $forslag[7]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_oplsning_af_grimhjmoskeen_i_aarhus';
    $forslag[7]["titel"] = 'Skal regeringen arbejde på at få Grimhøjmoskeen i Aarhus opløst?';
    $forslag[8]["ftid"] = 'B 19';
    $forslag[8]["samling"] = '2014-15';
    $forslag[8]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_etablering_af_en_ungdomsdomstol_for_ung';
    $forslag[8]["titel"] = 'Skal vi etablere en ungdomsdomstol for unge mellem 12 og 17 år?';
    $forslag[9]["ftid"] = 'B 33';
    $forslag[9]["samling"] = '2014-15';
    $forslag[9]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_etablering_af_et_realkreditinstitut_for';
    $forslag[9]["titel"] = 'Skal vi etablere et realkreditinstitut for lån til ejerboliger og erhvervsejendomme i yderområder?';
    $forslag[10]["ftid"] = 'L 160';
    $forslag[10]["samling"] = '2011-12';
    $forslag[10]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_offentlig_digital_post';
    $forslag[10]["titel"] = 'Skal det være obligatorisk at kunne modtage digital post fra det offentlige med NemID?';
    $forslag[11]["ftid"] = 'L 106';
    $forslag[11]["samling"] = '2011-12';
    $forslag[11]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_lov_om_aegteskabs_indgaelse_og_oplsning_lov_';
    $forslag[11]["titel"] = 'Skal to personer af samme køn kunne blive gift?';
    $forslag[12]["ftid"] = 'B 54';
    $forslag[12]["samling"] = '2011-12';
    $forslag[12]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_afskaffelse_af_registreringsafgiften';
    $forslag[12]["titel"] = 'Skal registreringsafgiften afskaffes?';
    $forslag[13]["ftid"] = 'L 189';
    $forslag[13]["samling"] = '2012-13';
    $forslag[13]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_lov_om_fremstilling_praesentation_og_salg_af';
    $forslag[13]["titel"] = 'Skal salg af løs snus være forbudt i Danmark?';
    $forslag[14]["ftid"] = 'L 144';
    $forslag[14]["samling"] = '2012-13';
    $forslag[14]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_offentlighed_i_forvaltningen';
    $forslag[14]["titel"] = 'Var det korrekt at vedtage den nye offentlighedslov i 2013?';
    $forslag[15]["ftid"] = 'L 185';
    $forslag[15]["samling"] = '2012-13';
    $forslag[15]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_lov_om_radio-_og_fjernsynsvirksomhed._forbud';
    $forslag[15]["titel"] = 'Skal der være lov imod på nogen måde at fremme terrorisme i radio- og tv-programmer?';
    $forslag[16]["ftid"] = 'B 116';
    $forslag[16]["samling"] = '2012-13';
    $forslag[16]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_fjernelse_af_transknnede_fra_sygdomslis';
    $forslag[16]["titel"] = 'Skal transkønnede fjernes fra sygdomslisten over psykiske lidelser?';
    $forslag[17]["ftid"] = 'B 69';
    $forslag[17]["samling"] = '2012-13';
    $forslag[17]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_afskaffelse_af_foraeldelsesfristen1';
    $forslag[17]["titel"] = 'Skal forældelsesfristen for pædofilisager afskaffes?';
    $forslag[18]["ftid"] = 'B 31';
    $forslag[18]["samling"] = '2012-13';
    $forslag[18]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_indfrelse_af_nummerplader_med_dannebrog';
    $forslag[18]["titel"] = 'Skal det gøres muligt at vælge nummerplader med dannebrog?';
    $forslag[19]["ftid"] = 'L 182';
    $forslag[19]["samling"] = '2013-14';
    $forslag[19]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_lov_om_det_centrale_personregister._til';
    $forslag[19]["titel"] = 'Skal man kunne få nyt personnummer, hvis man føler sig tilhørende et andet køn?';
    $forslag[20]["ftid"] = 'B 124';
    $forslag[20]["samling"] = '2013-14';
    $forslag[20]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_sttte_til_kurdernes_kamp_mod_isil_i_syr';
    $forslag[20]["titel"] = 'Skal vi sende våben og humanitær hjælp til de kurdiske områder i Syrien, så de kurdiske styrker kan forsvare sig mod angreb fra terrororganisationen ISIL?';
    $forslag[21]["ftid"] = 'L 26';
    $forslag[21]["samling"] = '2014-15';
    $forslag[21]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_adoptionsloven._adgang_for_samlevende_til_at';
    $forslag[21]["titel"] = 'Skal samlevende have ret til at adoptere sammen?';
    $forslag[22]["ftid"] = 'L 111';
    $forslag[22]["samling"] = '2013-14';
    $forslag[22]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_lov_om_fyrvaerkeri_og_andre_pyrotekniske_art';
    $forslag[22]["titel"] = 'Skulle perioden for salg og anvendelse af fyrværkeri indskrænkes?';
    $forslag[23]["ftid"] = 'L 50';
    $forslag[23]["samling"] = '2014-15';
    $forslag[23]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_straffeloven_og_lov_om_fuldbyrdelse_af_straf';
    $forslag[23]["titel"] = 'Skulle vi gøre øget brug af samfundstjeneste som alternativ til ubetinget fængsel?';
    $forslag[24]["ftid"] = 'B 29';
    $forslag[24]["samling"] = '2013-14';
    $forslag[24]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_dansk_bidrag_til_fns_og_opcws_mission_i';
    $forslag[24]["titel"] = 'Skulle vi bidrage til FN’s og OPCW’s mission i Syrien?';
    $forslag[25]["ftid"] = 'L 53';
    $forslag[25]["samling"] = '2012-13';
    $forslag[25]["link"] = 'https://www.parlamentet.dk/folketinget/lovforslag/forslag_til_lov_om_aendring_af_lov_om_en_aktiv_beskaeftigelsesindsats_';
    $forslag[25]["titel"] = 'Skulle vi have gennemført reformen af førtidspension og fleksjob i 2012?';
    $forslag[26]["ftid"] = 'B 77';
    $forslag[26]["samling"] = '2013-14';
    $forslag[26]["link"] = 'https://www.parlamentet.dk/folketinget/beslutningsforslag/forslag_til_folketingsbeslutning_om_skaerpet_strafniveau_ved_gruppevold';
    $forslag[26]["titel"] = 'Skulle voldelig kriminalitet straffes hårdere, hvis det udføres af flere i forening (gruppevold)?';

    foreach ($forslag as $key => $value) {
        $ftid = $value["ftid"];
        $samling = $value["samling"];
        $result = mysqli_query($link, "SELECT * FROM ft_results_parties WHERE ftid='$ftid' AND samling='$samling' ORDER BY ftid,samling ASC");
        while ($row = mysqli_fetch_array($result)) {
            $parti = $row['parti'];
            $yes = $row['yes'];
            $no = $row['no'];
            $total = $row['total'];
            $percent_yes = $row['percent_yes'];
            $percent_no = $row['percent_no'];
            $url = $row['url'];
            $readable = $row['readable'];
            $short = $row['short'];
            $status = $row['status'];
            $id = $samling.$ftid;
            $id = str_replace(' ','',$id);
            $id = str_replace('-','',$id);
            $allLaws[$id][$parti]["yes"] = $yes;
            $allLaws[$id][$parti]["no"] = $no;
            $allLaws[$id][$parti]["percent_yes"] = $percent_yes;
            $allLaws[$id][$parti]["percent_no"] = $percent_no;
            $lawinfo[$id]["ftid"] = $ftid;
            $lawinfo[$id]["samling"] = $samling;
            $lawinfo[$id]["url"] = $url;
            if ($readable != '') {
                $lawinfo[$id]["title"] = $readable;
            }
            else {
                $lawinfo[$id]["title"] = $short;
            }
        }
    }
    $totallawcount = count($allLaws);
    $totalvedtaget = 0;
    $totalforkastet = 0;
    foreach ($allLaws as $id => $parti) {
        $yes = 0; $no = 0;
        foreach ($parti as $key => $value) {
            $yes = $yes + $value["yes"];
            $no = $no + $value["no"];
        }
        if ($yes > $no) {
            $totalvedtaget++;
            $lawinfo[$id]["status"] = 'vedtaget';
        }
        else {
            $totalforkastet++;
            $lawinfo[$id]["status"] = 'forkastet';
        }
    }
    $json = json_encode($allLaws);
    $lawinfoJSON = json_encode($lawinfo);

    echo "<script>var allLaws = $json;</script>";
?>

<div id="right-content" style="padding-bottom: 25px;">
    <div style="height: 50px; padding-right: 8px; padding-top: 3px; padding-bottom: 3px;">
        <h1 style="font-variant:small-caps; font-size: 2.5em; line-height: 0.9em; margin-top: 3px; padding-left: 0px;">Den historiske valgtest</h1>
    </div>
    <div id="right" style="float: right; width: 47%; padding-right: 9px; padding-left: 0px; padding-right: 0px; font-size: 1.1em; height: 100%;">
        <div id="test-content" style="margin-right: 8px; position: absolute;">
            <div id="test_content_0">
                <p><em>Den historiske valgtest</em> ser på de reelle afstemninger i Folketinget. Der er derfor ikke tale om, hvad partierne <i>gerne vil</i>, men hvad de <i>i virkeligheden gjorde</i>. På den måde er testen skrællet for løfter.</p>
                <p>Testen består af <?php echo count($forslag); ?> forslag, der er blevet stillet indenfor de sidste 5 år.</p>
                <div style="text-align: center;"><button id="start" class="btn btn-default">START TEST</button></div>
            </div>
            <?php
                $html = '';
                foreach ($forslag as $key => $value) {
                    $id = $value["samling"].$value["ftid"];
                    $id = str_replace(' ','',$id);
                    $id = str_replace('-','',$id);
                    $html .= '<div id="test_content_'.$key.'" class="bill" style="display: none; text-align: center;">
                                <h1>'.$value["titel"].'</h1>
                                <div id="'.$id.'" style="margin-top: 20px;">
                                    <span class="fa fa-thumbs-up fa-5x yes" style="color: #29a429;" alt="Jeg er enig i forslaget!"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-thumbs-down fa-5x no" style="color: #dd4b38;" alt="Jeg er uenig i forslaget!"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-forward fa-5x forward" style="color: #e5db39;" alt="Jeg vil gerne springe over!"></span>
                                </div>
                                <div style="text-align: center; margin-top: 25px;"><a href="'.$value["link"].'" target="_blank" class="btn btn-default">LÆS MERE OM FORSLAGET</a></div>
                              </div>';
                }
                $html .= '<div id="test_content_'.(count($forslag)+1).'" data-finished="1" class="bill" style="display: none; text-align: center;">
                            <h1>Færdig!</h1>
                            <p>Du kan se det færdige resultat herunder (eller til venstre). Testen er mest lavet for sjov og om den reelt kan bruges til noget er helt op til dig selv!</p>
                          </div>';
                echo $html;

            ?>
        </div>
    </div>
    <div id="left" style="width: 48%; margin-bottom: 10px; text-align: left; border-radius: 5px; margin: 5px; font-size: 18px; padding: 5px 5px 5px 5px; background-color: #fff;">
        <?php
            $html = '';
            $parties = array('V', 'S', 'DF', 'RV', 'SF', 'EL', 'LA', 'KF', 'ALT');
            $colors = array('#0092d5', '#c00b1f', '#035387', '#ed008c', '#db5f59', '#ca2146', '#f68920', '#0e4d3d', '#00ff00');
            foreach ($parties as $key => $value) {
                $html .= '<div id="'.$value.'" class="loop-me" data-agree="0" data-count="0" style="padding-bottom: 7px; height: 50px;"><div style="float: left;"><img src="/images/partier/'.$value.'.png" alt="'.$value.'" style="width: 50px;"></div> <div style="float: left; background-color: '.$colors[$key].'; height: 50px; line-height: 50px; font-weight: bold; font-size: 18px; min-width: 128px; margin-left: 15px; color: white; vertical-align: middle;"><span style="margin-left: 8px; margin-right: 8px;">0 / 0 (0%)</span></div><div style="float: left; background-color: '.$colors[$key].'; height: 50px; line-height: 50px; font-weight: bold; font-size: 18px; vertical-align: middle;"></div></div><div style="clear: both; height: 0px !important;"></div>';
            }
            echo $html;
        ?>
    </div>
</div>
<script>
    $('#start').click(function() {
        $("#test_content_0").css("display", "none");
        $("#test_content_1").css("display", "block");
    });

    var value = 1; 

    $('.yes, .no, .forward').click(function() {
        var previous_element = '#test_content_' + value;
        value++;
        var next_element = '#test_content_' + value;
        $(previous_element).css("display", "none");
        $(next_element).css("display", "block");
        var finished = $(next_element).data("finished");
        if (finished == "1") {
            updateResult();
        }
        var height = $("#right-content").height() / 2;
        var height2 = $("#test-content").height() / 2;
        var height3 = height - height2 + 'px';
        if ($("#text-content").css("position") != 'static') {
            $("#test-content").css("top", height3);
        }
        var calc_element = $(this).parent().attr('id');

        if ($(this).hasClass("yes") === true) {
            calcAgree(calc_element, "yes");
        }
        else if ($(this).hasClass("no") === true) {
            calcAgree(calc_element, "no");
        }
    });

    function calcAgree(element, vote) {
        $.each(allLaws[element], function( key, value ) { // Key == Party
            var id = "#" + key;
            var block = id + ' div:nth-child(3)';
            var blockspan = id + ' div:nth-child(2) span';
            var agree = $(id).data("agree");
            var count = $(id).data("count");
            var new_agree, width;
            if (((vote == 'yes') && (value.yes > value.no)) || ((vote == 'no') && (value.no > value.yes))) {
                new_agree = agree + 1;
                $(id).data("agree", new_agree);
            }
            else {
                new_agree = agree;
            }
            if ((value.yes + value.no) > 0) {
                var new_count = count + 1;
                $(id).data("count", new_count);
                var pct = Math.floor(new_agree / new_count * 100);
                if ($("#text-content").css("position") == 'static') {
                    width = (pct / 3)+ '%';
                }
                else {
                    width = (pct / 2)+ '%';
                }
                $(id).data("agree", new_agree);
                $(id).data("count", new_count);
                $(block).css("width", width);
                var text = new_agree + ' / ' + new_count + ' (' + pct + '%)';
                $(blockspan).html(text);
            }
        });
    }

    function updateResult() {
        var max = null, initials = null;
        $(".loop-me").each(function(index) {
            var agree = $(this).data("agree");
            var count = $(this).data("count");
            var pct = agree / count;
            if ((max===null) || (pct > max)) {
                max = pct;
                initials = $(this).attr('id');
            }
        });
        
    }

    $(function() {
        if ($("#text-content").css("position") != 'static') {
            var height = $("#right-content").height() / 2;
            var height2 = $("#test-content").height() / 2;
            var height3 = height - height2 + 'px';
            $("#test-content").css("top", height3);
        }
    });
</script>

</body>
</html>
