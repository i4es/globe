<?php	$geoip = geoip_detect2_get_info_from_current_ip();
$country = $geoip->raw[ 'country' ][ 'iso_code' ];
if ( 'AF' == $country ) : ?>
    <?php if($afganistan = get_field('afganistan')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $afganistan; ?>
        </span>
    <?php endif; ?>
<?php elseif ('AM' == $country) : ?>
    <?php if($armenia = get_field('armenia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $armenia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AZ' == $country) : ?>
    <?php if($azerbaijan = get_field('azerbaijan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $azerbaijan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BH' == $country) : ?>
    <?php if($bahrain = get_field('bahrain')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $bahrain; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BD' == $country) : ?>
    <?php if($bangladesh = get_field('bangladesh')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $bangladesh; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BT' == $country) : ?>
    <?php if($bhutan = get_field('bhutan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $bhutan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BN' == $country) : ?>
    <?php if($brunei = get_field('brunei')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $brunei; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KH' == $country) : ?>
    <?php if($cambodia = get_field('cambodia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $cambodia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CN' == $country) : ?>
    <?php if($china = get_field('china')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $china; ?>
        </span>
    <?php endif; ?>
<?php  elseif('EG' == $country) : ?>
    <?php if($egypt = get_field('egypt')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $egypt; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GE' == $country) : ?>
    <?php if($georgia = get_field('georgia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $georgia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IN' == $country) : ?>
    <?php if($india = get_field('india')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $india; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ID' == $country) : ?>
    <?php if($indonesia = get_field('indonesia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $indonesia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IR' == $country) : ?>
    <?php if($iran = get_field('iran')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $iran; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IQ' == $country) : ?>
    <?php if($iraq = get_field('iraq')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $iraq; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IL' == $country) : ?>
    <?php if($israel = get_field('israel')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $israel; ?>
        </span>
    <?php endif; ?>
<?php  elseif('JP' == $country) : ?>
    <?php if($japan = get_field('japan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $japan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('JO' == $country) : ?>
    <?php if($jordan = get_field('jordan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $jordan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KZ' == $country) : ?>
    <?php if($kazakhstan = get_field('kazakhstan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $kazakhstan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KW' == $country) : ?>
    <?php if($kuwait = get_field('kuwait')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $kuwait; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KG' == $country) : ?>
    <?php if($kyrgyzstan = get_field('kyrgyzstan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $kyrgyzstan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LA' == $country) : ?>
    <?php if($laos = get_field('laos')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $laos; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LB' == $country) : ?>
    <?php if($lebanon = get_field('lebanon')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $lebanon; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MY' == $country) : ?>
    <?php if($malasia = get_field('malasia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $malasia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MV' == $country) : ?>
    <?php if($maldives = get_field('maldives')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $maldives; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MN' == $country) : ?>
    <?php if($mongolia = get_field('mongolia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $mongolia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NP' == $country) : ?>
    <?php if($nepal = get_field('nepal')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $nepal; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KP' == $country) : ?>
    <?php if($northKorea = get_field('north_korea')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $northKorea; ?>
        </span>
    <?php endif; ?>
<?php  elseif('OM' == $country) : ?>
    <?php if($oman = get_field('oman')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $oman; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PK' == $country) : ?>
    <?php if($pakistan = get_field('pakistan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $pakistan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PS' == $country) : ?>
    <?php if($palestineState = get_field('palestine_state')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $palestineState; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PH' == $country) : ?>
    <?php if($philippines = get_field('philippines')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $philippines; ?>
        </span>
    <?php endif; ?>
<?php  elseif('QA' == $country) : ?>
    <?php if($qatar = get_field('qatar')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $qatar; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SA' == $country) : ?>
    <?php if($saudiArabia = get_field('saudi_arabia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $saudiArabia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SG' == $country) : ?>
    <?php if($singapore = get_field('singapore')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $singapore; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KR' == $country) : ?>
    <?php if($southKorea = get_field('south_korea')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $southKorea; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LK' == $country) : ?>
    <?php if($sriLanka = get_field('sri_lanka')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $sriLanka; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SY' == $country) : ?>
    <?php if($syria = get_field('syria')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $syria; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TJ' == $country) : ?>
    <?php if($tajikistan = get_field('tajikistan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $tajikistan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TH' == $country) : ?>
    <?php if($thailand = get_field('thailand')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $thailand; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TL' == $country) : ?>
    <?php if($timorLeste = get_field('timor-leste')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $timorLeste; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TR' == $country) : ?>
    <?php if($turkey = get_field('turkey')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $turkey; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TM' == $country) : ?>
    <?php if($turkmenistan = get_field('turkmenistan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $turkmenistan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AE' == $country) : ?>
    <?php if($unitedArabEmirates = get_field('united_arab_emirates')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $unitedArabEmirates; ?>
        </span>
    <?php endif; ?>
<?php  elseif('UZ' == $country) : ?>
    <?php if($uzbekistan = get_field('uzbekistan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $uzbekistan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('VN' == $country) : ?>
    <?php if($vietnam = get_field('vietnam')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $vietnam; ?>
        </span>
    <?php endif; ?>
<?php  elseif('YE' == $country) : ?>
    <?php if($yemen = get_field('yemen')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $yemen; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AL' == $country) : ?>
    <?php if($albania = get_field('albania')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $albania; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AD' == $country) : ?>
    <?php if($andorra = get_field('andorra')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $andorra; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AT' == $country) : ?>
    <?php if($austria = get_field('austria')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $austria; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AZ' == $country) : ?>
    <?php if($azerbaijan = get_field('azerbaijan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $azerbaijan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BY' == $country) : ?>
    <?php if($belarus = get_field('belarus')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $belarus; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BE' == $country) : ?>
    <?php if($belgium = get_field('belgium')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $belgium; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BA' == $country) : ?>
    <?php if($bosniaAndHerzegovina = get_field('bosnia_and_herzegovina')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $bosniaAndHerzegovina; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BG' == $country) : ?>
    <?php if($bulgaria = get_field('bulgaria')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $bulgaria; ?>
        </span>
    <?php endif; ?>
<?php  elseif('HR' == $country) : ?>
    <?php if($croatia = get_field('croatia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $croatia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CY' == $country) : ?>
    <?php if($cypros = get_field('cypros')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $cypros; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CZ' == $country) : ?>
    <?php if($czechia = get_field('czechia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $czechia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('DK' == $country) : ?>
    <?php if($denmark = get_field('denmark')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $denmark; ?>
        </span>
    <?php endif; ?>
<?php  elseif('EE' == $country) : ?>
    <?php if($estonia = get_field('estonia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $estonia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('FI' == $country) : ?>
    <?php if($finland = get_field('finland')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $finland; ?>
        </span>
    <?php endif; ?>
<?php  elseif('FR' == $country) : ?>
    <?php if($france = get_field('france')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $france; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GE' == $country) : ?>
    <?php if($georgia = get_field('georgia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $georgia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('DE' == $country) : ?>
    <?php if($germany = get_field('germany')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $germany; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GR' == $country) : ?>
    <?php if($greece = get_field('greece')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $greece; ?>
        </span>
    <?php endif; ?>
<?php  elseif('VA' == $country) : ?>
    <?php if($holySee = get_field('holy_see')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $holySee; ?>
        </span>
    <?php endif; ?>
<?php  elseif('HU' == $country) : ?>
    <?php if($hungary = get_field('hungary')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $hungary; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IS' == $country) : ?>
    <?php if($iceland = get_field('iceland')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $iceland; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IE' == $country) : ?>
    <?php if($ireland = get_field('ireland')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $ireland; ?>
        </span>
    <?php endif; ?>
<?php  elseif('IT' == $country) : ?>
    <?php if($italy = get_field('italy')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $italy; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KZ' == $country) : ?>
    <?php if($kazakhstan = get_field('kazakhstan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $kazakhstan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LV' == $country) : ?>
    <?php if($latvia = get_field('latvia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $latvia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LI' == $country) : ?>
    <?php if($liechtenstein = get_field('liechtenstein')) : ?>
        <span class="gc-single-product__price">
          Special price <?php echo $liechtenstein; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LT' == $country) : ?>
    <?php if($lithuania = get_field('lithuania')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $lithuania; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LU' == $country) : ?>
    <?php if($luxembourg = get_field('luxembourg')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $luxembourg; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MT' == $country) : ?>
    <?php if($malta = get_field('malta')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $malta; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MD' == $country) : ?>
    <?php if($moldova = get_field('moldova')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $moldova; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MC' == $country) : ?>
    <?php if($monaco = get_field('monaco')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $monaco; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ME' == $country) : ?>
    <?php if($montenegro = get_field('montenegro')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $montenegro; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NL' == $country) : ?>
    <?php if($netherlands = get_field('netherlands')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $netherlands; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MK' == $country) : ?>
    <?php if($north_macedonia = get_field('north_macedonia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $north_macedonia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NO' == $country) : ?>
    <?php if($norway = get_field('norway')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $norway; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PL' == $country) : ?>
    <?php if($poland = get_field('poland')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $poland; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PT' == $country) : ?>
    <?php if($portugal = get_field('portugal')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $portugal; ?>
        </span>
    <?php endif; ?>
<?php  elseif('RO' == $country) : ?>
    <?php if($romania = get_field('romania')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $romania; ?>
        </span>
    <?php endif; ?>
<?php  elseif('RU' == $country) : ?>
    <?php if($russia = get_field('russia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $russia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SM' == $country) : ?>
    <?php if($san_marino = get_field('san_marino')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $san_marino; ?>
        </span>
    <?php endif; ?>
<?php  elseif('RS' == $country) : ?>
    <?php if($serbia = get_field('serbia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $serbia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SK' == $country) : ?>
    <?php if($slovakia = get_field('slovakia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $slovakia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SI' == $country) : ?>
    <?php if($slovenia = get_field('slovenia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $slovenia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ES' == $country) : ?>
    <?php if($spain = get_field('spain')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $spain; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SE' == $country) : ?>
    <?php if($sweden = get_field('sweden')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $sweden; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CH' == $country) : ?>
    <?php if($switzerland = get_field('switzerland')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $switzerland; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TR' == $country) : ?>
    <?php if($turkey = get_field('turkey')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $turkey; ?>
        </span>
    <?php endif; ?>
<?php  elseif('UA' == $country) : ?>
    <?php if($ukraine = get_field('ukraine')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $ukraine; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GB' == $country) : ?>
    <?php if($united_kingdom = get_field('united_kingdom')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $united_kingdom; ?>
        </span>
    <?php endif; ?>
<?php  elseif('DZ' == $country) : ?>
    <?php if($algeria = get_field('algeria')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $algeria; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AO' == $country) : ?>
    <?php if($angola = get_field('angola')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $angola; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BJ' == $country) : ?>
    <?php if($benin = get_field('benin')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $benin; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BW' == $country) : ?>
    <?php if($botswana = get_field('botswana')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $botswana; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BF' == $country) : ?>
    <?php if($burkina_faso = get_field('burkina_faso')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $burkina_faso; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BI' == $country) : ?>
    <?php if($burundi = get_field('burundi')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $burundi; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CI' == $country) : ?>
    <?php if($cote_divoire = get_field('cote_divoire')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $cote_divoire; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CV' == $country) : ?>
    <?php if($cabo_verde = get_field('cabo_verde')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $cabo_verde; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CM' == $country) : ?>
    <?php if($cameroon = get_field('cameroon')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $cameroon; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CF' == $country) : ?>
    <?php if($central_african_republic = get_field('central_african_republic')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $central_african_republic; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TD' == $country) : ?>
    <?php if($chad = get_field('chad')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $chad; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KM' == $country) : ?>
    <?php if($comoros = get_field('comoros')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $comoros; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CD' == $country) : ?>
    <?php if($congo = get_field('congo')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $congo; ?>
        </span>
    <?php endif; ?>
<?php  elseif('DJ' == $country) : ?>
    <?php if($djibouti = get_field('djibouti')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $djibouti; ?>
        </span>
    <?php endif; ?>
<?php  elseif('EG' == $country) : ?>
    <?php if($egypt = get_field('egypt')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $egypt; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GQ' == $country) : ?>
    <?php if($equatorial_guinea = get_field('equatorial_guinea')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $equatorial_guinea; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ER' == $country) : ?>
    <?php if($eritrea = get_field('eritrea')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $eritrea; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ET' == $country) : ?>
    <?php if($ethiopia = get_field('ethiopia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $ethiopia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GA' == $country) : ?>
    <?php if($gabon = get_field('gabon')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $gabon; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GM' == $country) : ?>
    <?php if($gambia = get_field('gambia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $gambia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GH' == $country) : ?>
    <?php if($ghana = get_field('ghana')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $ghana; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GN' == $country) : ?>
    <?php if($guinea = get_field('guinea')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $guinea; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GW' == $country) : ?>
    <?php if($guineaBissau = get_field('guinea-bissau')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $guineaBissau; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KE' == $country) : ?>
    <?php if($kenya = get_field('kenya')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $kenya; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LS' == $country) : ?>
    <?php if($lesotho = get_field('lesotho')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $lesotho; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LR' == $country) : ?>
    <?php if($liberia = get_field('liberia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $liberia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LY' == $country) : ?>
    <?php if($libya = get_field('libya')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $libya; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MG' == $country) : ?>
    <?php if($madagascar = get_field('madagascar')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $madagascar; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MW' == $country) : ?>
    <?php if($malawi = get_field('malawi')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $malawi; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ML' == $country) : ?>
    <?php if($mali = get_field('mali')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $mali; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MR' == $country) : ?>
    <?php if($mauritania = get_field('mauritania')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $mauritania; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MU' == $country) : ?>
    <?php if($mauritius = get_field('mauritius')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $mauritius; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MA' == $country) : ?>
    <?php if($morocco = get_field('morocco')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $morocco; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MZ' == $country) : ?>
    <?php if($mozambique = get_field('mozambique')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $mozambique; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NA' == $country) : ?>
    <?php if($namibia = get_field('namibia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $namibia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NE' == $country) : ?>
    <?php if($niger = get_field('niger')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $niger; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NG' == $country) : ?>
    <?php if($nigeria = get_field('nigeria')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $nigeria; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PT' == $country) : ?>
    <?php if($portugal = get_field('portugal')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $portugal; ?>
        </span>
    <?php endif; ?>
<?php  elseif('RW' == $country) : ?>
    <?php if($rwanda = get_field('rwanda')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $rwanda; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ST' == $country) : ?>
    <?php if($sao_tome_and_principe = get_field('sao_tome_and_principe')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $sao_tome_and_principe; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SN' == $country) : ?>
    <?php if($senegal = get_field('senegal')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $senegal; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SC' == $country) : ?>
    <?php if($seychelles = get_field('seychelles')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $seychelles; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SL' == $country) : ?>
    <?php if($sierra_leone = get_field('sierra_leone')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $sierra_leone; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SO' == $country) : ?>
    <?php if($somalia = get_field('somalia')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $somalia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('ZA' == $country) : ?>
    <?php if($south_africa = get_field('south_africa')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $south_africa; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SS' == $country) : ?>
    <?php if($south_sudan = get_field('south_sudan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $south_sudan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SD' == $country) : ?>
    <?php if($sudan = get_field('sudan')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $sudan; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TZ' == $country) : ?>
    <?php if($tanzania = get_field('tanzania')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $tanzania; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TG' == $country) : ?>
    <?php if($togo = get_field('togo')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $togo; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AG' == $country) : ?>
    <?php if($antigua_and_barbuda = get_field('antigua_and_barbuda')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $antigua_and_barbuda; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BS' == $country) : ?>
    <?php if($bahamas = get_field('bahamas')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $bahamas; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BB' == $country) : ?>
    <?php if($barbados = get_field('barbados')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $barbados; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BZ' == $country) : ?>
    <?php if($belize = get_field('belize')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $belize; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CA' == $country) : ?>
    <?php if($canada = get_field('canada')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $canada; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CR' == $country) : ?>
    <?php if($costaRica = get_field('costa-rica')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $costaRica; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CU' == $country) : ?>
    <?php if($cuba = get_field('ccuba')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $cuba; ?>
        </span>
    <?php endif; ?>
<?php  elseif('DM' == $country) : ?>
    <?php if($dominica = get_field('cdominica')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $dominica; ?>
        </span>
    <?php endif; ?>
<?php  elseif('DO' == $country) : ?>
    <?php if($dominican_republic = get_field('cdominican_republic')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $dominican_republic; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GD' == $country) : ?>
    <?php if($grenada = get_field('cgrenada')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $grenada; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GT' == $country) : ?>
    <?php if($guatemala = get_field('cguatemala')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $guatemala; ?>
        </span>
    <?php endif; ?>
<?php  elseif('HT' == $country) : ?>
    <?php if($haiti = get_field('chaiti')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $haiti; ?>
        </span>
    <?php endif; ?>
<?php  elseif('HN' == $country) : ?>
    <?php if($honduras = get_field('chonduras')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $honduras; ?>
        </span>
    <?php endif; ?>
<?php  elseif('JM' == $country) : ?>
    <?php if($jamaica = get_field('cjamaica')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $jamaica; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MX' == $country) : ?>
    <?php if($mexico = get_field('cmexico')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $mexico; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NI' == $country) : ?>
    <?php if($nicaragua = get_field('cnicaragua')) : ?>
        <span class="gc-single-product__price">
           Special price <?php echo $nicaragua; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PA' == $country) : ?>
    <?php if($panama = get_field('panama')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $panama; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KN' == $country) : ?>
    <?php if($saint_kitts_and_nevis = get_field('saint_kitts_and_nevis')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $saint_kitts_and_nevis; ?>
        </span>
    <?php endif; ?>
<?php  elseif('LC' == $country) : ?>
    <?php if($saint_lucia = get_field('saint_lucia')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $saint_lucia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('VC' == $country) : ?>
    <?php if($saint_vincent_and_the_grenadines = get_field('saint_vincent_and_the_grenadines')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $saint_vincent_and_the_grenadines; ?>
        </span>
    <?php endif; ?>
<?php  elseif('US' == $country) : ?>
    <?php if($united_states_of_america = get_field('united_states_of_america')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $united_states_of_america; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AR' == $country) : ?>
    <?php if($argentina = get_field('argentina')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $argentina; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BO' == $country) : ?>
    <?php if($bolivia = get_field('bolivia')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $bolivia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('BR' == $country) : ?>
    <?php if($brazil = get_field('brazil')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $brazil; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CL' == $country) : ?>
    <?php if($chile = get_field('chile')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $chile; ?>
        </span>
    <?php endif; ?>
<?php  elseif('CO' == $country) : ?>
    <?php if($columbia = get_field('columbia')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $columbia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('EC' == $country) : ?>
    <?php if($ecuador = get_field('ecuador')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $ecuador; ?>
        </span>
    <?php endif; ?>
<?php  elseif('GY' == $country) : ?>
    <?php if($guyana = get_field('guyana')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $guyana; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SR' == $country) : ?>
    <?php if($suriname = get_field('suriname')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $suriname; ?>
        </span>
    <?php endif; ?>
<?php  elseif('AU' == $country) : ?>
    <?php if($australia = get_field('australia')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $australia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('FJ' == $country) : ?>
    <?php if($fiji = get_field('fiji')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $fiji; ?>
        </span>
    <?php endif; ?>
<?php  elseif('KI' == $country) : ?>
    <?php if($kiribati = get_field('kiribati')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $kiribati; ?>
        </span>
    <?php endif; ?>
<?php  elseif('MH' == $country) : ?>
    <?php if($marshall_islands = get_field('marshall_islands')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $marshall_islands; ?>
        </span>
    <?php endif; ?>
<?php  elseif('FM' == $country) : ?>
    <?php if($micronesia = get_field('micronesia')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $micronesia; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NR' == $country) : ?>
    <?php if($nauru = get_field('nauru')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $nauru; ?>
        </span>
    <?php endif; ?>
<?php  elseif('NZ' == $country) : ?>
    <?php if($new_zealand = get_field('new_zealand')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $new_zealand; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PW' == $country) : ?>
    <?php if($palau = get_field('palau')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $palau; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PG' == $country) : ?>
    <?php if($papua_new_guinea = get_field('papua_new_guinea')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $papua_new_guinea; ?>
        </span>
    <?php endif; ?>
<?php  elseif('WS' == $country) : ?>
    <?php if($samoa = get_field('samoa')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $samoa; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SB' == $country) : ?>
    <?php if($solomon_islands = get_field('solomon_islands')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $solomon_islands; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TO' == $country) : ?>
    <?php if($tonga = get_field('tonga')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $tonga; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TV' == $country) : ?>
    <?php if($tuvalu = get_field('tuvalu')) : ?>
        <span class="gc-single-product__price">
            <?php echo $tuvalu; ?>
        </span>
    <?php endif; ?>
<?php  elseif('VU' == $country) : ?>
    <?php if($vanuatu = get_field('vanuatu')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $vanuatu; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SV' == $country) : ?>
    <?php if($el_salvador = get_field('el_salvador')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $el_salvador; ?>
        </span>
    <?php endif; ?>
<?php  elseif('SZ' == $country) : ?>
    <?php if($eswatini_fmr_swaziland = get_field('eswatini_fmr_swaziland')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $eswatini_fmr_swaziland; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PY' == $country) : ?>
    <?php if($paraguay = get_field('paraguay')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $paraguay; ?>
        </span>
    <?php endif; ?>
<?php  elseif('PE' == $country) : ?>
    <?php if($peru = get_field('peru')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $peru; ?>
        </span>
    <?php endif; ?>
<?php  elseif('TT' == $country) : ?>
    <?php if($trinidad_and_tobago = get_field('trinidad_and_tobago')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $trinidad_and_tobago; ?>
        </span>
    <?php endif; ?>
<?php  elseif('UY' == $country) : ?>
    <?php if($uruguay = get_field('uruguay')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $uruguay; ?>
        </span>
    <?php endif; ?>
<?php  elseif('VE' == $country) : ?>
    <?php if($venezuela = get_field('venezuela')) : ?>
        <span class="gc-single-product__price">
            Special price <?php echo $venezuela; ?>
        </span>
    <?php endif; ?>
<?php else : ?>
    <?php echo " " ?>
<?php  endif;	?>

