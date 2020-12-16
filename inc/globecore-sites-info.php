<?php

function globecore2016_bodyid()
{
    global $blog_id;
    echo " id='site".$blog_id."'";
}


function globecore_get()
{
    global $catalog_btn;
    global $contactHeader;
    global $g_analitic;
    global $google_domain;
    global $yam_count;
    global $chat;
    global $email_adr;
    global $youtube_video;
    global $blog_id;
    global $zendesk;
    global $contacts;
    global $subscribe_form;
	global $price_form;
	global $subscribe_form_es;
	global $sales_form;
	global $sales_form_es;
	global $subscribe_form_fr;
	global $price_form_es;
	global $subscribe_form_pt;
	global $youtube_video_es;
	global $youtube_video_pt;
	global $subscribe_form_sw;
	global $rightForm;
    switch ($blog_id)
    {
		case 1:
                    # globecore.com
                    $email="marketing@globecore.de" ;
                    $ga_id="UA-41076319-7";
                    $ga_domain="globecore.com";
                    $yam_id=21267559;
                    $id_siteheart=null; //596753;
                    $youtube_video="https://www.youtube.com/user/GlobeCoreCom/videos";
					$youtube_video_es="https://www.youtube.com/channel/UCs_IqTCznlWJw3beN6KQ_9A/videos";
					$youtube_video_pt="https://www.youtube.com/channel/UC33VMGRzsGkDJNkVwNOwNeQ/videos";
                    $zendesk= "https://v2.zopim.com/?5VQQB2FUhyrDUgyYvfgtFnHfxHEmGW1j";
                    $subscribe_form = do_shortcode('[contact-form-7 id="9217" title="Subscribe form"]');
					$price_form = do_shortcode('[contact-form-7 id="13218" title="Price Form"]');
					$price_form_es = do_shortcode('[contact-form-7 id="20161" title="Price form ES"]');
					$subscribe_form_es = do_shortcode('[contact-form-7 id="13235" title="Subscribe form ES"]');
					$subscribe_form_fr = do_shortcode('[contact-form-7 id="15857" title="Subscribe form FR"]');
					$sales_form = do_shortcode('[contact-form-7 id="14191" title="Sales Form"]');
					$sales_form_es = do_shortcode('[contact-form-7 id="14295" title="Sales Form ES"]');
					$subscribe_form_pt = do_shortcode('[contact-form-7 id="20994" title="Subscribe form PT"]');
					$subscribe_form_sw = do_shortcode('[contact-form-7 id="26576" title="Subscribe form SW"]');
					$rightForm = do_shortcode('[contact-form-7 id="3552" title="RIGHT"]');
                    break;

		case 2:
                    # fuelcleaning.globecore.com
                    $email="oksana@globecore.com";
                    $ga_id="UA-41076319-6";
                    $ga_domain="fuelcleaning.globecore.com";
                    $yam_id=24542960;
                    $id_siteheart=null;
                    $youtube="https://www.youtube.com/watch?v=Hrpco8Jx49s&list=PLk0V80G-XrXt86s1wv2kKQ2_3p4Za2rkW";
                    $zendesk="https://v2.zopim.com/?4iQm6AoNyO3hYU6qBysKRl8iiVxq74bp";
                    $contact_header = "<div class=\"headerContacts\"><p>+(494) 484-202-3594</p> <p></div>";
                    $catalog_btn = "<a target=\"blank\" href =\"https://fuelcleaning.globecore.com/wp-content/cataloge/Oil-processing-equipment-PDF-Oksana.pdf\"><div class=\"catalog_btn\"></div></a>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="5141" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="5425" title="Sales form"]');
					$rightForm = do_shortcode('[contact-form-7 id="4512" title="RIGHT"]');
                    break;

		case 3:
                    # asphalt.globecore.com
                    $email="sales@globecore.de";
                    $ga_id="UA-41076319-8";
                    $ga_domain="asphalt.globecore.com";
                    $yam_id=23583469;
                    $id_siteheart=null;//596753;
                    $youtube="https://www.youtube.com/playlist?list=PLFh9HIE-WejPgsP0J10wGMLVuXYlNlLIS";
                    $zendesk="https://v2.zopim.com/?4scg8AEt6GKCKFpT1sOQgvT3tPfqLuvq";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4521" title="Subscribe form"]');
                    break;

		case 4:
                    # modified.globecore.com
                    $email="chyk@globecore.de";
                    $ga_id="UA-41076319-48";
                    $ga_domain="modified.globecore.com";
                    $yam_id=23583493;
                    $id_siteheart=null; //701392;
                    $youtube="https://www.youtube.com/playlist?list=PLFh9HIE-WejPgsP0J10wGMLVuXYlNlLIS";
                    $zendesk="https://v2.zopim.com/?4s8NnFmdVelh86hFcE5x7GR6g6g1DAnn";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4545" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4638" title="Sales form"]');
					$rightForm = do_shortcode('[contact-form-7 id="1935" title="RIGHT"]');
                    break;

               case 5:
                    # oil.globecore.com
                    $email="sales@globecore.de";
                    $ga_id="UA-41076319-3";
                    $ga_domain="oil.globecore.com";
                    $yam_id="43921739";
                    //$id_siteheart="677114";
                    $youtube="https://www.youtube.com/playlist?list=PLQ029GY56smOPjuqETruzU4CwKvbqZx8O";
                    $subscribe_form = do_shortcode('[contact-form-7 id="5199" title="Subscribe form"]');
                    $zendesk="https://v2.zopim.com/?4scg8AEt6GKCKFpT1sOQgvT3tPfqLuvq";
					$sales_form = do_shortcode('[contact-form-7 id="5369" title="Sales form"]');
					$rightForm = do_shortcode('[contact-form-7 id="133" title="RIGHT"]');
                    break;

               case 6:
                    # emulsion.globecore.com
                    $email="asphalt@globecore.de";
                    $ga_id="UA-41076319-18";
                    $ga_domain="emulsion.globecore.com";
                    $yam_id=35945135;
                    $id_siteheart=809263;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/playlist?list=PLFh9HIE-WejPgsP0J10wGMLVuXYlNlLIS";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4525" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4642" title="Sales form"]');
					$phone = "+4942136583213";
					$rightForm = do_shortcode('[contact-form-7 id="3412" title="RIGHT"]');
                    break;

               case 7:
                    #blending.globecore.com
                    $email="energie@globecore.de";
                    $ga_id="UA-41076319-49";
                    $ga_domain="globecoreblending.com";
                    $yam_id="20987347";
                    $id_siteheart=null;
                    $youtube="https://www.youtube.com/channel/UCwOvhyEB8ginAsBjymkzrEQ";
                    $zendesk="https://v2.zopim.com/?4iQm6AoNyO3hYU6qBysKRl8iiVxq74bp";
                    $contact_header = "<div class=\"headerContacts\"><p>+(494) 484-202-3594</p> <p>oksana@globecore.com</div>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4499" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4566" title="Sales form"]');
					$rightForm = do_shortcode('[contact-form-7 id="755" title="RIGHT"]');
                    break;

               case 8:
                    #biodiesel.globecore.com
                    $email="energie@globecore.de";
                    $ga_id="UA-41076319-16";
                    $ga_domain="biodiesel.globecore.com";
                    $yam_id="25881515";
                    $id_siteheart=null;
                    $youtube="https://www.youtube.com/channel/UCwOvhyEB8ginAsBjymkzrEQ";
                    $zendesk="https://v2.zopim.com/?4iQm6AoNyO3hYU6qBysKRl8iiVxq74bp";
                    $contact_header = "<div class=\"headerContacts\"><p>+(494) 484-202-3594</p> <p>oksana@globecore.com</div>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4546" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4630" title="Sales Form"]');
					$rightForm = do_shortcode('[contact-form-7 id="687" title="RIGHT"]');
                    break;


               case 10:
                    # oilRegeneration.globecore.com (former gcEquipment)
                    $email="uservice@globecore.de";
                    $ga_id="UA-41076319-2";
                    $ga_domain="oilRegeneration.globecore.com";
                    $yam_id="25922036";
                    $id_siteheart= null; //701393;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    $zendesk="https://v2.zopim.com/?4s8NnFmdVelh86hFcE5x7GR6g6g1DAnn";
                    $catalog_btn = "<a target=\"blank\" href =\"https://globecore.com/wp-content/cataloge/Oil-processing-equipment-PDF-Golovachyk.pdf\"><div class=\"catalog_btn\"></div></a>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4693" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="5000" title="Sales form"]');
					$rightForm = do_shortcode('[contact-form-7 id="4327" title="RIGHT"]');
                    break;


               case 28:
                    # cs.globecore.com

                    $ga_id="UA-41076319-27";
                    $ga_domain="cs.globecore.com";
                    $yam_id="37656925";
                    $id_siteheart=809263;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    break;

               case 26:
                    # hu.globecore.com

                    $ga_id="UA-41076319-29";
                    $ga_domain="hu.globecore.com";
                    $yam_id="37656995";
                    $id_siteheart=809263;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    break;

               case 27:
                    # sr.globecore.com

                    $ga_id="UA-41076319-28";
                    $ga_domain="sr.globecore.com";
                    $yam_id=37656965;
                    $id_siteheart=809263;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    break;

               case 25:
                    # hr.globecore.com

                    $ga_id="UA-41076319-30";
                    $ga_domain="hr.globecore.com";
                    $yam_id=37657015;
                    $id_siteheart=809263;
                    $id_jivosite=null;
                     $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    break;

              case 24:
                    # bg.globecore.com

                    $ga_id="UA-41076319-31";
                    $ga_domain="bg.globecore.com";
                    $yam_id=37657030;
                    $id_siteheart=809263;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/videos";
                    break;

               case 15:
                    # oils.globecore.com

                    $ga_id="UA-41076319-35";
                    $yam_id="43921964";
                    $ga_domain="oils.globecore.com";
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4491" title="Subscribe form"]');
                    break;

               case 16:
                    # es.globecore.com

                    $ga_id="UA-41076319-19";
                    $ga_domain="es.globecore.com";
                    $yam_id=43921884;
                    //$id_siteheart=677114;
                    $id_jivosite=null;
                    //$id_siteheart="679644";
                    $youtube="https://www.youtube.com/playlist?list=PLQ029GY56smMShzi71y_5khwEsXrMPYhZ";
                    $zendesk="https://v2.zopim.com/?4scg8AEt6GKCKFpT1sOQgvT3tPfqLuvq";
                    $subscribe_form = do_shortcode('[contact-form-7 id="1725" title="Subscribe form"]');
					$rightForm = do_shortcode('[contact-form-7 id="4327" title="RIGHT"]');
                    break;

                case 17:
                    # pl.globecore.com
                    $email="energie@globecore.de";
                    $ga_id="UA-41076319-23";
                    $yam_id=43921799;
                    $ga_domain="pl.globecore.com";
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4481" title="Subscribe form"]');
                    break;

                case 18:
                    # Regen.globecore.com
                    $email="info@globecore.de";
                    $ga_id="UA-41076319-50";
                    $ga_domain="Regen.globecore.com";
                    $yam_id="43922079";
                    $id_siteheart=null;//597194;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/featured";
                    $zendesk="https://v2.zopim.com/?4sAfjSxrRREzUXFEParvfORUAw1mH7gp";
                    $catalog_btn = "<a target=\"blank\" href =\"https://globecore.com/wp-content/cataloge/Oil-processing-equipment-PDF-Glushenko.pdf\"><div class=\"catalog_btn\"></div></a>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4577" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4720" title="Sales Form"]');
                    break;

                case 19:
                    # pt.globecore.com
                    $email="sales@globecore.de";
                    $ga_id="UA-41076319-21";
                    $ga_domain="pt.globecore.com";
                    $yam_id=43922219;
                    $id_siteheart="677114";
                    $id_jivosite=null;
                   $youtube="https://www.youtube.com/playlist?list=PLQ029GY56smMTlS34UZKIKwcAXbs-ut6D";
                    $subscribe_form = do_shortcode('[contact-form-7 id="1983" title="Subscribe form"]');
                   //$zendesk="https://v2.zopim.com/?4scg8AEt6GKCKFpT1sOQgvT3tPfqLuvq";
					$sales_form = do_shortcode('[contact-form-7 id="2060" title="Sales Form"]');
                    break;

                case 20:
                    # fr.globecore.com
                    $email="sales@globecore.de";
                    $ga_id="UA-41076319-22";
                    $ga_domain="fr.globecore.com";
                    $yam_id=43922259;
                    $id_siteheart=677114;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/playlist?list=PLQ029GY56smM2GtqlST_3gvXaR9DwK3tP";
                    $subscribe_form = do_shortcode('[contact-form-7 id="819" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="989" title="Sales Form"]');
                    break;

                case 21:
                    # bitumen.globecore.com
                    $email="info@globecore.de";
                    $ga_id="UA-41076319-51";
                    $ga_domain="bitumen.globecore.com";
                    $yam_id="31327693";
                    $id_siteheart=null;//597194;
                    $youtube="https://www.youtube.com/playlist?list=PLFh9HIE-WejPgsP0J10wGMLVuXYlNlLIS";
                     $zendesk="https://v2.zopim.com/?4sAfjSxrRREzUXFEParvfORUAw1mH7gp";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4498" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4574" title="Sales Form"]');
                    break;

                case 22:
                    # avs.globecore.com
                    $email="energie@globecore.de";
                    $ga_id="UA-41076319-25";
                    $ga_domain="avs.globecore.com";
                    $yam_id=41203729;
                    $id_siteheart=null;
                    $youtube="https://www.youtube.com/channel/UCGbMb9syaf0bvJsQSJ5fXNg";
                    $zendesk="https://v2.zopim.com/?4iQm6AoNyO3hYU6qBysKRl8iiVxq74bp";
                    $contact_header = "<div class=\"headerContacts\"><p>+(494) 484-202-3594</p> <p>oksana@globecore.com</div>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="1645" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="1736" title="Sales Form"]');
                    break;

                case 23:
                    # //oilfiltration.globecore.com
                    $email="uservice@globecore.de";
                    $ga_id="UA-41076319-26";
                    $ga_domain="oilfiltration.globecore.com";
                    $yam_id=null;
                    $odoo_id = null;
                    $id_siteheart= null;  //828119
                    $zendesk="https://v2.zopim.com/?4s8NnFmdVelh86hFcE5x7GR6g6g1DAnn";
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/videos";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4521" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="4640" title="Sales Form"]');
                    break;


               case 30:
                    # aceite.globecore.com
                    $email="cliente@globecore.de";
                    $ga_id="UA-12193380-13";
                    $ga_domain="aceite.globecore.com";
                    $yam_id="38099155";
                    $id_siteheart= null; //847294;
                    $id_jivosite=null;
                    $odoo_id = null;
                    $zendesk = "https://v2.zopim.com/?5GdpE9LEV5mLKq9I10pNq9M2B79ECeBu";
                    $youtube="https://www.youtube.com/playlist?list=PLQ029GY56smMShzi71y_5khwEsXrMPYhZ";
                    $catalog_btn = "<a target=\"blank\" href =\"https://globecore.com/wp-content/cataloge/Oil-processing-equipment-PDF-Sabagash.pdf\"><div class=\"catalog_btn\"></div></a>";
                    $subscribe_form = do_shortcode('[contact-form-7 id="3358" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="3457" title="Sales Form"]');
                    break;

               case 31:
                   // mill.globecore.com globecore.eu
                    $email="mill@globecore.de";
                    $ga_id="UA-41076319-52'";
                    $ga_domain="auto";
                    $yam_id=22621489;
                    $id_siteheart=677037;  //677037 =globecore.eu only
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/channel/UCVcW79-zpW_fX7oBLqvqlSQ";
                    $subscribe_form = do_shortcode('[contact-form-7 id="3813" title="Subscribe form"]');
					$sales_form = do_shortcode('[contact-form-7 id="3890" title="Sales Form"]');
                   break;

                case 32:
                    # ua.globecore.com
                    $ga_id="UA-41076319-33";
                    $ga_domain="usa.globecore.com";
//                    $yam_id="39341880";
                    $id_siteheart=null;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/videos";
                    break;

                case 33:
                    # bitumunit.globecore.com/
                    //$ga_id="UA-12193380-14";
                    $email="support@globecore.de";
                    $ga_id="UA-41076319-53";
                    $ga_domain="bitumunit.globecore.com/";
                    $yam_id="39361985";
                    $id_siteheart=null;
                    $id_jivosite=null;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/videos";
                    $subscribe_form = do_shortcode('[contact-form-7 id="4490" title="Subscribe form"]');
                    break;
                case 34:
                    # wind.globecore.com
                    $yam_id="44528515";
                    $ga_id="UA-41076319-38";
                    break;
                case 35:
                    # oiltreat.globecore.com
                    $yam_id="44528476";
                    $ga_id="UA-41076319-37";
                    $ga_domain="oiltreat.globecore.com";
                    $id_siteheart=null;
                    $youtube="https://www.youtube.com/channel/UCGbMb9syaf0bvJsQSJ5fXNg";
                    $zendesk="https://v2.zopim.com/?54L7gRSZKqZlg2pnyKmJWUWN2acM0MkM";
					$sales_form = do_shortcode('[contact-form-7 id="6224" title="Sales Form"]');
                    break;

		default:
                    $email="marketing@globecore.com";
                    $ga_id=null;
                    $ga_domain="$blog_id.globecore.com";
                    $yam_id=null;
                    $id_siteheart=596753;
                    $youtube="https://www.youtube.com/user/GlobeCoreCom/videos";

                    echo "=======unrecognized blog_id: $blog_id ==========";
	}
        return array(
			$ga_id,
			$ga_domain,
			$yam_id,
			$id_siteheart,
			$id_jivosite,
			$email,
			$youtube_video,
			$social_disable,
			$contact_header,
			$zendesk,
			$catalog_btn,
			$contacts,
			$subscribe_form,
			$price_form,
			$subscribe_form_es,
			$sales_form,
			$sales_form_es,
			$subscribe_form_fr,
			$price_form_es,
			$subscribe_form_pt,
			$youtube_video_es,
			$youtube_video_pt,
			$phone,
			$subscribe_form_sw,
			$rightForm,
			);
}
?>
   <?php function youtube_playlist()
{

    $video_1 = "NT_L6QeteI4"; // GlobeCore manufacturing
    $video_2 = "NHSoV3Dc1HA"; // New Oil treatment unit CMM-2,2H
    $video_3 = "iq437v6Z14o"; // Oil purification machine. Stainless System for Transformer Oil Degassing
    $video_4 = "kx_L7orThQM"; // Portable oil filtration systems with capacity 600 liters per hour
    $video_5 = "2ISlWhpvhDw"; // Transformer Oil Degasifier CMM-0,6 by GlobeCore
    $video_6 = "zM4n-_Yms04"; // Transformer Oil Recycling System - CMM-12R
    $video_7 = "8f4CCCnbk2A"; // Sorbent reactivation technology. CMM-4RP unit for adsorbent regeneration
    $video_8 = "WL4VwH-E4yo"; // CMM 12R Transformer Oil Regeneration Unit was Launched in Quito, Ecuador
    $video_9 = "frYuXLTrM6w"; // Gear Oil Changer CMM-G. Wind turbine oil change
    $video_10 = "29HIaK8ETFU"; // Bitumen emulsion production. GlobeCore UVB-1 Units
    $video_11 = "x9EXTNv9Hag"; // The fuel oil blending with water by means of emulsifier on vortex layer devices
    $video_12 = "EYmIF29RZUs"; // Fuel blending and increasing of gasoline octane number
    $video_13 = "VZQd5nfVRdo"; // The biodiesel plant for fuel production of used fats
    $video_14 = "dIu_ULY-eU0"; // The diesel fuel purification from sulphur
    $video_15 = "7ctIZGRVdBg"; // Planta móvil de tratamiento de aceite CMM-0.5
    $video_16 = "NlCBKTG_CMQ"; // Aseguramiento de la calidad de los equipos GlobeCore purificación de aceite
    $video_17 = "wg3DGf4f8Xo"; // GlobeCore regeneración de aceite. CMM-12R
    $video_18 = "L2kwOSpdc90"; // La restauración de las propiedades del adsorbente a través de CMM-4RP

    $video_19 = "FzJ0Z380ImQ"; // Unité de régénération pour le sorbant de traitement de l’huile usée CMM-4RP
    $video_20 = "GZDNGrsJk4M"; // GlobeCore: l'huile de transformateur peut être régénérée
    $video_21 = "RD6ifPXUkHM"; // L’unité pour remplacer de l'huile à transmission dans le réducteur de turbine éolienne CMMG
    $video_22 = "uN8fhjoTZB0"; // Assurance de qualité par des équipements de GlobeCore pour la filtration des huiles usées
    $video_23 = "EdXWr6_fNFQ"; // Installation pour le traitement de l’huile CMM-0,5

	// ES Video
	$video_24 = "7ctIZGRVdBg"; // Portable oil filtration systems with capacity 600 liters per hour -
	$video_25 = "L2kwOSpdc90"; // Sorbent reactivation technology. CMM-4RP unit for adsorbent regeneration -
	$video_26 = "HiUcJpzUN3k"; // Gear Oil Changer CMM-G. Wind turbine oil change -
	$video_27 = "T2uiTZcPBmc"; // CMM 12R Transformer Oil Regeneration Unit was Launched in Quito, Ecuador -
	$video_30 = "wg3DGf4f8Xo"; // Transformer Oil Recycling System - CMM-12R -

	//Com Video
	$video_28 = "flWnlVqQSBk"; //Transformer oil purification machine Clean Marine on off-shore drilling rigs
	$video_29 = "rtFQqqfaQa4"; //Horseback riding sports school competitions for kids

	//globecore.com/pt-pt
	$video_31 = "89QBPj_0w0A"; //Portable oil filtration systems with capacity 600 liters per hour -
	$video_32 = "_Uuw7liiiVM";  //Transformer Oil Recycling System - CMM-12R
	$video_33 = "4kBK4M3qW3E";  //Sorbent reactivation technology. CMM-4RP unit for adsorbent regeneration
	$video_34 = "myKPfVKF2yk"; //Gear Oil Changer CMM-G. Wind turbine oil change

    return array (
		$video_1,
		$video_2,
		$video_3,
		$video_4,
		$video_5,
		$video_6,
		$video_7,
		$video_8,
		$video_9,
		$video_10,
		$video_11,
		$video_12,
		$video_13,
		$video_14,
        $video_15,
		$video_16,
		$video_17,
		$video_18,
		$video_19,
		$video_20,
		$video_21,
		$video_22,
		$video_23,
		$video_24,
		$video_25,
		$video_26,
		$video_27,
		$video_28,
		$video_29,
		$video_30,
		$video_31,
		$video_32,
		$video_33,
		$video_34,
		);
}
        ?>
