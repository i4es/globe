<script>

    jQuery(document).ready(function($){
        var mapStyle = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
            ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
            ]
        }
        ];

        var markerIcon = {
            path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
            fillColor: '#e25a00',
            fillOpacity: 0.95,
            scale: 1.5,
            strokeColor: '#fff',
            strokeWeight: 3,
            anchor: new google.maps.Point(12, 24)
        };
 // Create the map
    var map = new google.maps.Map($('.map-canvas')[0], {
        zoom: 3,
        styles: mapStyle,
        icon: markerIcon,
        center: new google.maps.LatLng(13.92, 18.94)
    });



// ADD MARKERS


    // Kuwait
    var contentStringKw = '<div class="si-content">' +
                '<h2 class="country">Kuwait</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company">Q Eighty United General Trading & Cont. Co. W.L.L</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>Sharq – Ahmed Al Jaber St., Al Raed Center, 7th Floor</li>' +
                '<h5>Contact:</h5>' +
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+22458328 / 22452775 / 22432467 \'>22458328 / 22452775 / 22432467 </a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel: 22458329 / 22452776\'>+(965) 22458329 / 22452776</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:Sales@Q80united.com\'>Sales@Q80united.com</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var kuwait = new google.maps.InfoWindow({
        content: contentStringKw
    });
    var markerKw = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(29.37, 47.41),
        title: 'Kuwait'
    });
    markerKw.addListener('click', function() {
        kuwait.open(map, markerKw);
    });

    // Saudi Arabia
    var contentStringSa = '<div class="si-content">' +
                '<h2 class="country">SAUDI ARABIA  - Sole Dealer</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company">AL DOUSOR INTERNATIONAL COMPANY LTD</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>AL ROWDAH DISTRICT NEAR SQUARE BRIDGE PO BOX.10027  JEDDAH-21433 SAUDI ARABIA</li>' +
                '<li class="att">Att: Ashim Sarkar</li>' +
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Phone: <a href=\'tel:+966543646365\'>+966-543646365</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:ashim1@dousor-sa.com\'>ashim1@dousor-sa.com</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var saudiArabia = new google.maps.InfoWindow({
        content: contentStringSa
    });
    var markerSa = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(21.56, 39.14),
        title: 'Saudi Arabia'
    });
    markerSa.addListener('click', function() {
        saudiArabia.open(map, markerSa);
    });

    // Iraq
    var contentStringIq = '<div class="si-content">' +
                '<h2 class="country">Iraq</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company">Tech-Equipments General Trading& Contracting Co W.LL.Arassat El Hindyia, Hay Babil</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>Arassat El Hindyia, Hay Babil Build # 15 вЂ“ Way 929 вЂ“ Side Street # 17 Baghdad, Iraq</li>' +
                '<h5>Contact:</h5>' +
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Phone: <a href=\'tel:+9647809150348\'>+9647809150348</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Phone: <a href=\'tel:+9647809150346\'>+9647809150346</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Phone: <a href=\'tel:+9647809150350\'>+9647809150350</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Phone: <a href=\'tel:+9647809150343\'>+9647809150343</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var iraq = new google.maps.InfoWindow({
        content: contentStringIq
    });
    var markerIq = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(32.29, 44.42),
        title: 'Iraq'
    });
    markerIq.addListener('click', function() {
        iraq.open(map, markerIq);
    });

    // Malasia
    var contentStringMa = '<div class="si-content">' +
                '<h2 class="country">Malaysia, South East Asia</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company-agent">Authorized agent</h3>' +
                '<h3 class="company">LYI Technology</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>No 13, Jalan PUJ 2/9 Bandar Putra Permaim, Taman Punjak Jalil, 43300 Seri Kembangan, Selangor D.E., Malaysia</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">Att: Mr. Colin Phua</li>' +
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+60395469822\'>+603 9546 9822</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:lyitechnology@gmail.com\'>lyitechnology@gmail.com</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var malasia = new google.maps.InfoWindow({
        content: contentStringMa
    });
    var markerMa = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(3.01, 101.67),
        title: 'Malasia'
    });
    markerMa.addListener('click', function() {
        malasia.open(map, markerMa);
    });

    // Argentina
    var contentStringAr = '<div class="si-content">' +
                '<h2 class="country">Argentina</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company-agent">Authorized agent</h3>' +
                '<h3 class="company">Enrique Spitzer</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>Av Belgrano 355 Piso 7, Buenos Aires</li>' +
                '<h5>Contact:</h5>' +
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel/fax: <a href=\'tel:+54 911 4421 1000\'>+54 911 4421 1000</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:spitzer@ingspitzer.com.ar\'>spitzer@ingspitzer.com.ar</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var argentina = new google.maps.InfoWindow({
        content: contentStringAr
    });
    var markerAr = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(-34.61, -58.37),
        title: 'Argentina'
    });
    markerAr.addListener('click', function() {
        argentina.open(map, markerAr);
    });

    // CostaRica
    var contentStringCr = '<div class="si-content">' +
                '<h2 class="country">Costa Rica</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company-agent">Authorized agent</h3>' +
                '<h3 class="company">GC Electric S.A </h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>San JosГ©, Costa Rica, Contiguo a Plaza Villa Columbus</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">Att: JosГ© Mora</li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:506 83236784\'>506 83236784</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:jose.mora@globecore.com\'>jose.mora@globecore.com</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var costaRica = new google.maps.InfoWindow({
        content: contentStringCr
    });
    var markerCr = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(9.93, -84.06),
        title: 'Costa-Rica'
    });
    markerCr.addListener('click', function() {
        costaRica.open(map, markerCr);
    });


    // UAE
    var contentStringUe = '<div class="si-content">' +
                '<h2 class="country">UAE</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company-agent">Authorized agent</h3>' +
                '<h3 class="company">Globecore FZE  Middle East</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>RAKIA Business Centre 5, Building No. A4, Office No. 403, Ras Al Khaimah, United Arab Emirates.</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">P.O. Box 86584, Al Jazeera Al Hamra, Ras Al Khaimah, United Arab Emirates.</li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+971 50 2324838\'>+971 50 2324838</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:wasim.uae@globecore.de\'>uae@globecore.de</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var uae = new google.maps.InfoWindow({
        content: contentStringUe
    });
    var markerUe = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(25.80, 55.96),
        title: 'UAE'
    });
    markerUe.addListener('click', function() {
        uae.open(map, markerUe);
    });

    // Germany
    var contentStringGr = '<div class="si-content">' +
                '<h2 class="country">Globecore  Germany</h2>' +
                '<div class="si-inner">' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>Globecore GmbHEdewechter LandstraГџe 173, Oldenburg-Eversten, Deutschland, 26131</li>' +
                '<h5>Contact:</h5>' +
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49 4412 097 88 57\'>+49 4412 097 88 57</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49 4484 202 35 92\'>+49 4484 202 35 92</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49151 57 36 0287\'>+49151 57 36 0287</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49 4484 202 35 91\'>+49 4484 202 35 91</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49 4484 202 35 97\'>+49 4484 202 35 97</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49 4484 202 35 94\'>+49 4484 202 35 94</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+49 421 3658 3211\'>+49 421 3658 3211</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+493021788826\'>+493021788826</a></li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+4942136583208\'>+4942136583208</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:info@globecore.de\'>info@globecore.de</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:sales@globecore.de\'>sales@globecore.de</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:uservice@globecore.de\'>uservice@globecore.de</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:energie@globecore.de\'>energie@globecore.de</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var germany = new google.maps.InfoWindow({
        content: contentStringGr
    });
    var markerGr = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(53.12, 8.16),
        title: 'Germany'
    });
    markerGr.addListener('click', function() {
        germany.open(map, markerGr);
    });

    // USA magnetic
    var contentStringUs = '<div class="si-content">' +
                '<h2 class="country">USA</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company">Magnetic mill</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li> 2 Craftsman Rd., Area 9 East Windsor, Connecticut 06088</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">Att: Mr. Eugene Pruglo</li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+1 860 638 91 24\'>+1 860 638 91 24</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:marketing@globecore.de\'>marketing@globecore.de</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var usaMagnetic = new google.maps.InfoWindow({
        content: contentStringUs
    });
    var markerUs = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(41.91, -72.62),
        title: 'USA Magnetic'
    });
    markerUs.addListener('click', function() {
        usaMagnetic.open(map, markerUs);
    });

    // Hong-Kong
    var contentStringHong = '<div class="si-content">' +
                '<h2 class="country">China</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company">ASIA GCtransformer</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>Room 1403, 14/F,  Capital Centre, 151 Gloucester Road, Wanchai, Hong Kong</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">Att: Mr. Eugene Pruglo</li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+65-3159-0628\'>+65-3159-0628</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\asia@globecore.com\'>asia@globecore.com</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var hongKong = new google.maps.InfoWindow({
        content: contentStringHong
    });
    var markerHong = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(22.27, 114.17),
        title: 'Hong-Kong'
    });
    markerHong.addListener('click', function() {
        hongKong.open(map, markerHong);
    });

    // USA
    var contentStringUsa2 = '<div class="si-content">' +
                '<h2 class="country">Globecore USA</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company">Sales and Service center</h3>' +
                '<h3 class="company">GC Technologies LLC</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>1110 Paige Houston, Texas 77003</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">Att: Dave Wilson</li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:713-202-7983\'>713-202-7983</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>E-mail: <a href=\'mailto:dave@wilson.work\'>dave@wilson.work</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var usa = new google.maps.InfoWindow({
        content: contentStringUsa2
    });
    var markerUsa2 = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(29.74, -95.34),
        title: 'USA'
    });
    markerUsa2.addListener('click', function() {
        usa.open(map, markerUsa2);
    });

    // Brazil
    var contentStringBrasil = '<div class="si-content">' +
                '<h2 class="country">Brazil</h2>' +
                '<div class="si-inner">' +
                '<h3 class="company"> Engemet Eletrica</h3>' +
                '<ul>'+
                '<h5 class="address">Address:</h5>' +
                '<i class="fas fa-map-marker-alt"></i><li>Rua Dr. JosГ© Bento Ferreira, 97 ГЃgua Funda, SГЈo Paulo</li>' +
                '<h5>Contact:</h5>' +
                '<li class="att">Att: Roberto Brandt</li>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:1150735222\'>1150735222</a></li>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:roberto.brandt@engemet.com\'>roberto.brandt@engemet.com</a></li>'+
                '</ul>'+
                '</div>'+
                '</div>';

    var brazil = new google.maps.InfoWindow({
        content: contentStringBrasil
    });
    var markerBrasil = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: new google.maps.LatLng(-23.63, -46.62),
        title: 'Brazil'
    });
    markerBrasil.addListener('click', function() {
        brazil.open(map, markerBrasil);
    });

        // Ecuador
        var contentStringEcuador = '<div class="si-content">' +
            '<h2 class="country">Ecuador</h2>' +
            '<div class="si-inner">' +
            '<h3 class="company">Fainca Group Ecuador C.A.</h3>' +
            '<ul>'+
            '<h5 class="address">Address:</h5>' +
            '<i class="fas fa-map-marker-alt"></i><li>Cdla La FAE, manzana 23, solar 10,  Guayaquil, Ecuador</li>' +
            '<h5>Contact:</h5>' +
            '<li class="att">Att: Benita Canizalez</li>'+
            '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+593983322633\'>+593983322633</a></li>'+
            '<li class="att">Att: Wildkad Rodríguez</li>'+
            '<i class="fa fa-phone" aria-hidden="true"></i><li>Tel: <a href=\'tel:+593963009752\'>+593963009752</a></li>'+
            '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:info@fainca-group.com\'>info@fainca-group.com</a></li>'+
            '<i class="fa fa-envelope" aria-hidden="true"></i><li>Email: <a href=\'mailto:wrodriguez@fainca-group.com\'>wrodriguez@fainca-group.com</a></li>'+
            '</ul>'+
            '</div>'+
            '</div>';

        var ecuador = new google.maps.InfoWindow({
            content: contentStringEcuador
        });
        var markerEcuador = new google.maps.Marker({
            map: map,
            icon: markerIcon,
            position: new google.maps.LatLng(-1.83, -78.18),
            title: 'Ecuador'
        });
        markerEcuador.addListener('click', function() {
            ecuador.open(map, markerEcuador);
        });

});
</script>
<div class="map-canvas"></div>
