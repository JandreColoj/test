pApp.controller('PagosCtrl', function ($scope,$document, $http, $timeout, $log) {
	$scope.pago={};
	console.log(elplan);

	if(elplan=='plan1'){
		$scope.pago.price='Plan Q25';
	}else if(elplan=='plan2'){
		$scope.pago.price='Plan Q45';
	}else if(elplan=='plan3'){
		$scope.pago.price='Plan Q65';
	}else if(elplan=='plan4'){
	    $scope.pago.price='Plan Q80';
	}

    $scope.pago.cantidad = $scope.pago.cantidad === undefined ? 0 : $scope.pago.cantidad;
     //PRECIO + CANTIDAD DE PERSONAS
     if($scope.pago.price == 'Plan Q25'){
        $scope.elprecio = 25;
        $scope.can      = $scope.pago.cantidad*5;
        $scope.subto    = $scope.elprecio+$scope.can;
    }else if($scope.pago.price == 'Plan Q45'){
        $scope.elprecio = 45;
        $scope.can      = $scope.pago.cantidad*5;
        $scope.subto    = $scope.elprecio+$scope.can;
    }else if($scope.pago.price == 'Plan Q65'){
        $scope.elprecio = 65;
        $scope.can      = $scope.pago.cantidad*5;
        $scope.subto    = $scope.elprecio+$scope.can;
    }else if($scope.pago.price == 'Plan Q80'){
        $scope.elprecio = 80;
        $scope.can      = $scope.pago.cantidad*5;
        $scope.subto    = $scope.elprecio+$scope.can;
    }

    $scope.formPago=true;
    $scope.formRes=false;

    $scope.paises = [
        {name: 'Afghanistan', code: 'AF'},
        {name: 'Åland Islands', code: 'AX'},
        {name: 'Albania', code: 'AL'},
        {name: 'Algeria', code: 'DZ'},
        {name: 'American Samoa', code: 'AS'},
        {name: 'AndorrA', code: 'AD'},
        {name: 'Angola', code: 'AO'},
        {name: 'Anguilla', code: 'AI'},
        {name: 'Antarctica', code: 'AQ'},
        {name: 'Antigua and Barbuda', code: 'AG'},
        {name: 'Argentina', code: 'AR'},
        {name: 'Armenia', code: 'AM'},
        {name: 'Aruba', code: 'AW'},
        {name: 'Australia', code: 'AU'},
        {name: 'Austria', code: 'AT'},
        {name: 'Azerbaijan', code: 'AZ'},
        {name: 'Bahamas', code: 'BS'},
        {name: 'Bahrain', code: 'BH'},
        {name: 'Bangladesh', code: 'BD'},
        {name: 'Barbados', code: 'BB'},
        {name: 'Belarus', code: 'BY'},
        {name: 'Belgium', code: 'BE'},
        {name: 'Belize', code: 'BZ'},
        {name: 'Benin', code: 'BJ'},
        {name: 'Bermuda', code: 'BM'},
        {name: 'Bhutan', code: 'BT'},
        {name: 'Bolivia', code: 'BO'},
        {name: 'Bosnia and Herzegovina', code: 'BA'},
        {name: 'Botswana', code: 'BW'},
        {name: 'Bouvet Island', code: 'BV'},
        {name: 'Brazil', code: 'BR'},
        {name: 'British Indian Ocean Territory', code: 'IO'},
        {name: 'Brunei Darussalam', code: 'BN'},
        {name: 'Bulgaria', code: 'BG'},
        {name: 'Burkina Faso', code: 'BF'},
        {name: 'Burundi', code: 'BI'},
        {name: 'Cambodia', code: 'KH'},
        {name: 'Cameroon', code: 'CM'},
        {name: 'Canada', code: 'CA'},
        {name: 'Cape Verde', code: 'CV'},
        {name: 'Cayman Islands', code: 'KY'},
        {name: 'Central African Republic', code: 'CF'},
        {name: 'Chad', code: 'TD'},
        {name: 'Chile', code: 'CL'},
        {name: 'China', code: 'CN'},
        {name: 'Christmas Island', code: 'CX'},
        {name: 'Cocos (Keeling) Islands', code: 'CC'},
        {name: 'Colombia', code: 'CO'},
        {name: 'Comoros', code: 'KM'},
        {name: 'Congo', code: 'CG'},
        {name: 'Congo, The Democratic Republic of the', code: 'CD'},
        {name: 'Cook Islands', code: 'CK'},
        {name: 'Costa Rica', code: 'CR'},
        {name: 'Cote D\'Ivoire', code: 'CI'},
        {name: 'Croatia', code: 'HR'},
        {name: 'Cuba', code: 'CU'},
        {name: 'Cyprus', code: 'CY'},
        {name: 'Czech Republic', code: 'CZ'},
        {name: 'Denmark', code: 'DK'},
        {name: 'Djibouti', code: 'DJ'},
        {name: 'Dominica', code: 'DM'},
        {name: 'Dominican Republic', code: 'DO'},
        {name: 'Ecuador', code: 'EC'},
        {name: 'Egypt', code: 'EG'},
        {name: 'El Salvador', code: 'SV'},
        {name: 'Equatorial Guinea', code: 'GQ'},
        {name: 'Eritrea', code: 'ER'},
        {name: 'Estonia', code: 'EE'},
        {name: 'Ethiopia', code: 'ET'},
        {name: 'Falkland Islands (Malvinas)', code: 'FK'},
        {name: 'Faroe Islands', code: 'FO'},
        {name: 'Fiji', code: 'FJ'},
        {name: 'Finland', code: 'FI'},
        {name: 'France', code: 'FR'},
        {name: 'French Guiana', code: 'GF'},
        {name: 'French Polynesia', code: 'PF'},
        {name: 'French Southern Territories', code: 'TF'},
        {name: 'Gabon', code: 'GA'},
        {name: 'Gambia', code: 'GM'},
        {name: 'Georgia', code: 'GE'},
        {name: 'Germany', code: 'DE'},
        {name: 'Ghana', code: 'GH'},
        {name: 'Gibraltar', code: 'GI'},
        {name: 'Greece', code: 'GR'},
        {name: 'Greenland', code: 'GL'},
        {name: 'Grenada', code: 'GD'},
        {name: 'Guadeloupe', code: 'GP'},
        {name: 'Guam', code: 'GU'},
        {name: 'Guatemala', code: 'GT'},
        {name: 'Guernsey', code: 'GG'},
        {name: 'Guinea', code: 'GN'},
        {name: 'Guinea-Bissau', code: 'GW'},
        {name: 'Guyana', code: 'GY'},
        {name: 'Haiti', code: 'HT'},
        {name: 'Heard Island and Mcdonald Islands', code: 'HM'},
        {name: 'Holy See (Vatican City State)', code: 'VA'},
        {name: 'Honduras', code: 'HN'},
        {name: 'Hong Kong', code: 'HK'},
        {name: 'Hungary', code: 'HU'},
        {name: 'Iceland', code: 'IS'},
        {name: 'India', code: 'IN'},
        {name: 'Indonesia', code: 'ID'},
        {name: 'Iran, Islamic Republic Of', code: 'IR'},
        {name: 'Iraq', code: 'IQ'},
        {name: 'Ireland', code: 'IE'},
        {name: 'Isle of Man', code: 'IM'},
        {name: 'Israel', code: 'IL'},
        {name: 'Italy', code: 'IT'},
        {name: 'Jamaica', code: 'JM'},
        {name: 'Japan', code: 'JP'},
        {name: 'Jersey', code: 'JE'},
        {name: 'Jordan', code: 'JO'},
        {name: 'Kazakhstan', code: 'KZ'},
        {name: 'Kenya', code: 'KE'},
        {name: 'Kiribati', code: 'KI'},
        {name: 'Korea, Democratic People\'S Republic of', code: 'KP'},
        {name: 'Korea, Republic of', code: 'KR'},
        {name: 'Kuwait', code: 'KW'},
        {name: 'Kyrgyzstan', code: 'KG'},
        {name: 'Lao People\'S Democratic Republic', code: 'LA'},
        {name: 'Latvia', code: 'LV'},
        {name: 'Lebanon', code: 'LB'},
        {name: 'Lesotho', code: 'LS'},
        {name: 'Liberia', code: 'LR'},
        {name: 'Libyan Arab Jamahiriya', code: 'LY'},
        {name: 'Liechtenstein', code: 'LI'},
        {name: 'Lithuania', code: 'LT'},
        {name: 'Luxembourg', code: 'LU'},
        {name: 'Macao', code: 'MO'},
        {name: 'Macedonia, The Former Yugoslav Republic of', code: 'MK'},
        {name: 'Madagascar', code: 'MG'},
        {name: 'Malawi', code: 'MW'},
        {name: 'Malaysia', code: 'MY'},
        {name: 'Maldives', code: 'MV'},
        {name: 'Mali', code: 'ML'},
        {name: 'Malta', code: 'MT'},
        {name: 'Marshall Islands', code: 'MH'},
        {name: 'Martinique', code: 'MQ'},
        {name: 'Mauritania', code: 'MR'},
        {name: 'Mauritius', code: 'MU'},
        {name: 'Mayotte', code: 'YT'},
        {name: 'Mexico', code: 'MX'},
        {name: 'Micronesia, Federated States of', code: 'FM'},
        {name: 'Moldova, Republic of', code: 'MD'},
        {name: 'Monaco', code: 'MC'},
        {name: 'Mongolia', code: 'MN'},
        {name: 'Montserrat', code: 'MS'},
        {name: 'Morocco', code: 'MA'},
        {name: 'Mozambique', code: 'MZ'},
        {name: 'Myanmar', code: 'MM'},
        {name: 'Namibia', code: 'NA'},
        {name: 'Nauru', code: 'NR'},
        {name: 'Nepal', code: 'NP'},
        {name: 'Netherlands', code: 'NL'},
        {name: 'Netherlands Antilles', code: 'AN'},
        {name: 'New Caledonia', code: 'NC'},
        {name: 'New Zealand', code: 'NZ'},
        {name: 'Nicaragua', code: 'NI'},
        {name: 'Niger', code: 'NE'},
        {name: 'Nigeria', code: 'NG'},
        {name: 'Niue', code: 'NU'},
        {name: 'Norfolk Island', code: 'NF'},
        {name: 'Northern Mariana Islands', code: 'MP'},
        {name: 'Norway', code: 'NO'},
        {name: 'Oman', code: 'OM'},
        {name: 'Pakistan', code: 'PK'},
        {name: 'Palau', code: 'PW'},
        {name: 'Palestinian Territory, Occupied', code: 'PS'},
        {name: 'Panama', code: 'PA'},
        {name: 'Papua New Guinea', code: 'PG'},
        {name: 'Paraguay', code: 'PY'},
        {name: 'Peru', code: 'PE'},
        {name: 'Philippines', code: 'PH'},
        {name: 'Pitcairn', code: 'PN'},
        {name: 'Poland', code: 'PL'},
        {name: 'Portugal', code: 'PT'},
        {name: 'Puerto Rico', code: 'PR'},
        {name: 'Qatar', code: 'QA'},
        {name: 'Reunion', code: 'RE'},
        {name: 'Romania', code: 'RO'},
        {name: 'Russian Federation', code: 'RU'},
        {name: 'RWANDA', code: 'RW'},
        {name: 'Saint Helena', code: 'SH'},
        {name: 'Saint Kitts and Nevis', code: 'KN'},
        {name: 'Saint Lucia', code: 'LC'},
        {name: 'Saint Pierre and Miquelon', code: 'PM'},
        {name: 'Saint Vincent and the Grenadines', code: 'VC'},
        {name: 'Samoa', code: 'WS'},
        {name: 'San Marino', code: 'SM'},
        {name: 'Sao Tome and Principe', code: 'ST'},
        {name: 'Saudi Arabia', code: 'SA'},
        {name: 'Senegal', code: 'SN'},
        {name: 'Serbia and Montenegro', code: 'CS'},
        {name: 'Seychelles', code: 'SC'},
        {name: 'Sierra Leone', code: 'SL'},
        {name: 'Singapore', code: 'SG'},
        {name: 'Slovakia', code: 'SK'},
        {name: 'Slovenia', code: 'SI'},
        {name: 'Solomon Islands', code: 'SB'},
        {name: 'Somalia', code: 'SO'},
        {name: 'South Africa', code: 'ZA'},
        {name: 'South Georgia and the South Sandwich Islands', code: 'GS'},
        {name: 'Spain', code: 'ES'},
        {name: 'Sri Lanka', code: 'LK'},
        {name: 'Sudan', code: 'SD'},
        {name: 'Suriname', code: 'SR'},
        {name: 'Svalbard and Jan Mayen', code: 'SJ'},
        {name: 'Swaziland', code: 'SZ'},
        {name: 'Sweden', code: 'SE'},
        {name: 'Switzerland', code: 'CH'},
        {name: 'Syrian Arab Republic', code: 'SY'},
        {name: 'Taiwan, Province of China', code: 'TW'},
        {name: 'Tajikistan', code: 'TJ'},
        {name: 'Tanzania, United Republic of', code: 'TZ'},
        {name: 'Thailand', code: 'TH'},
        {name: 'Timor-Leste', code: 'TL'},
        {name: 'Togo', code: 'TG'},
        {name: 'Tokelau', code: 'TK'},
        {name: 'Tonga', code: 'TO'},
        {name: 'Trinidad and Tobago', code: 'TT'},
        {name: 'Tunisia', code: 'TN'},
        {name: 'Turkey', code: 'TR'},
        {name: 'Turkmenistan', code: 'TM'},
        {name: 'Turks and Caicos Islands', code: 'TC'},
        {name: 'Tuvalu', code: 'TV'},
        {name: 'Uganda', code: 'UG'},
        {name: 'Ukraine', code: 'UA'},
        {name: 'United Arab Emirates', code: 'AE'},
        {name: 'United Kingdom', code: 'GB'},
        {name: 'United States', code: 'US'},
        {name: 'United States Minor Outlying Islands', code: 'UM'},
        {name: 'Uruguay', code: 'UY'},
        {name: 'Uzbekistan', code: 'UZ'},
        {name: 'Vanuatu', code: 'VU'},
        {name: 'Venezuela', code: 'VE'},
        {name: 'Viet Nam', code: 'VN'},
        {name: 'Virgin Islands, British', code: 'VG'},
        {name: 'Virgin Islands, U.S.', code: 'VI'},
        {name: 'Wallis and Futuna', code: 'WF'},
        {name: 'Western Sahara', code: 'EH'},
        {name: 'Yemen', code: 'YE'},
        {name: 'Zambia', code: 'ZM'},
        {name: 'Zimbabwe', code: 'ZW'}
    ];

    $scope.estadosUS=[
        {
            nombre: "Alabama",
            abrevacion: "AL"
        },
        {
            nombre: "Alaska",
            abrevacion: "AK"
        },
        {
            nombre: "American Samoa",
            abrevacion: "AS"
        },
        {
            nombre: "Arizona",
            abrevacion: "AZ"
        },
        {
            nombre: "Arkansas",
            abrevacion: "AR"
        },
        {
            nombre: "California",
            abrevacion: "CA"
        },
        {
            nombre: "Colorado",
            abrevacion: "CO"
        },
        {
            nombre: "Connecticut",
            abrevacion: "CT"
        },
        {
            nombre: "Delaware",
            abrevacion: "DE"
        },
        {
            nombre: "District Of Columbia",
            abrevacion: "DC"
        },
        {
            nombre: "Federated States Of Micronesia",
            abrevacion: "FM"
        },
        {
            nombre: "Florida",
            abrevacion: "FL"
        },
        {
            nombre: "Georgia",
            abrevacion: "GA"
        },
        {
            nombre: "Guam",
            abrevacion: "GU"
        },
        {
            nombre: "Hawaii",
            abrevacion: "HI"
        },
        {
            nombre: "Idaho",
            abrevacion: "ID"
        },
        {
            nombre: "Illinois",
            abrevacion: "IL"
        },
        {
            nombre: "Indiana",
            abrevacion: "IN"
        },
        {
            nombre: "Iowa",
            abrevacion: "IA"
        },
        {
            nombre: "Kansas",
            abrevacion: "KS"
        },
        {
            nombre: "Kentucky",
            abrevacion: "KY"
        },
        {
            nombre: "Louisiana",
            abrevacion: "LA"
        },
        {
            nombre: "Maine",
            abrevacion: "ME"
        },
        {
            nombre: "Marshall Islands",
            abrevacion: "MH"
        },
        {
            nombre: "Maryland",
            abrevacion: "MD"
        },
        {
            nombre: "Massachusetts",
            abrevacion: "MA"
        },
        {
            nombre: "Michigan",
            abrevacion: "MI"
        },
        {
            nombre: "Minnesota",
            abrevacion: "MN"
        },
        {
            nombre: "Mississippi",
            abrevacion: "MS"
        },
        {
            nombre: "Missouri",
            abrevacion: "MO"
        },
        {
            nombre: "Montana",
            abrevacion: "MT"
        },
        {
            nombre: "Nebraska",
            abrevacion: "NE"
        },
        {
            nombre: "Nevada",
            abrevacion: "NV"
        },
        {
            nombre: "New Hampshire",
            abrevacion: "NH"
        },
        {
            nombre: "New Jersey",
            abrevacion: "NJ"
        },
        {
            nombre: "New Mexico",
            abrevacion: "NM"
        },
        {
            nombre: "New York",
            abrevacion: "NY"
        },
        {
            nombre: "North Carolina",
            abrevacion: "NC"
        },
        {
            nombre: "North Dakota",
            abrevacion: "ND"
        },
        {
            nombre: "Northern Mariana Islands",
            abrevacion: "MP"
        },
        {
            nombre: "Ohio",
            abrevacion: "OH"
        },
        {
            nombre: "Oklahoma",
            abrevacion: "OK"
        },
        {
            nombre: "Oregon",
            abrevacion: "OR"
        },
        {
            nombre: "Palau",
            abrevacion: "PW"
        },
        {
            nombre: "Pennsylvania",
            abrevacion: "PA"
        },
        {
            nombre: "Puerto Rico",
            abrevacion: "PR"
        },
        {
            nombre: "Rhode Island",
            abrevacion: "RI"
        },
        {
            nombre: "South Carolina",
            abrevacion: "SC"
        },
        {
            nombre: "South Dakota",
            abrevacion: "SD"
        },
        {
            nombre: "Tennessee",
            abrevacion: "TN"
        },
        {
            nombre: "Texas",
            abrevacion: "TX"
        },
        {
            nombre: "Utah",
            abrevacion: "UT"
        },
        {
            nombre: "Vermont",
            abrevacion: "VT"
        },
        {
            nombre: "Virgin Islands",
            abrevacion: "VI"
        },
        {
            nombre: "Virginia",
            abrevacion: "VA"
        },
        {
            nombre: "Washington",
            abrevacion: "WA"
        },
        {
            nombre: "West Virginia",
            abrevacion: "WV"
        },
        {
            nombre: "Wisconsin",
            abrevacion: "WI"
        },
        {
            nombre: "Wyoming",
            abrevacion: "WY"
        }
    ];

    $scope.meses = [
        {nombre:'01'},
        {nombre:'02'},
        {nombre:'03'},
        {nombre:'04'},
        {nombre:'05'},
        {nombre:'06'},
        {nombre:'07'},
        {nombre:'08'},
        {nombre:'09'},
        {nombre:'10'},
        {nombre:'11'},
        {nombre:'12'},
    ];

    $scope.anosven = [
        {nombre:'2017'},
        {nombre:'2018'},
        {nombre:'2019'},
        {nombre:'2020'},
        {nombre:'2021'},
        {nombre:'2022'},
        {nombre:'2023'},
        {nombre:'2024'},
        {nombre:'2025'},
        {nombre:'2026'},
        {nombre:'2027'},
        {nombre:'2028'},
        {nombre:'2029'},
        {nombre:'2030'},
    ];

    $scope.bancos = [
        {nombre:'Banco Industrial'},
        {nombre:'GyT Continental'},
        {nombre:'Banrural'},
        {nombre:'BAC | Reformador'},
        {nombre:'Banco de Antigua'},
        {nombre:'Banco de los trabajadores'},
        {nombre:'Banco Agromercantil'},
        {nombre:'Interbanco'},
        {nombre:'Banco Azteca'},
        {nombre:'Banco Promerica'},
        {nombre:'Ficohsa'},
        {nombre:'Banco Inmobiliario'},
        {nombre:'ViviBanco'},
        {nombre:'Banco CHN'},
        {nombre:'Banco de Crédito'},
    ];

    $scope.tdocumento = [
        { nombre: 'Pasaporte', id:'Pasaporte'},
        { nombre:'DPI',id:'DPI'}
    ];

    $scope.sexos = [
        {nombre:'Masculino',id:'Masculino'},
        {nombre:'Femenino',id:'Femenino'}
    ];

    $scope.estadoCivil = [
        {nombre:'Soltero',id:'Soltero'},
        {nombre:'Casado',id:'Casado'}
    ];

    $scope.parentescos = [
        {nombre:'Hijo(a)', id:'Hijo'},
        {nombre:'Hermano(a)',id:'Hermano'},
        {nombre: 'Padre', id: 'Padre' },
        {nombre: 'Madre', id: 'Madre' },
        {nombre: 'Esposo(a)', id: 'Esposo(a)' }
    ];

    $scope.tipoTarjeta = [
        {nombre:'Debito',id:'Debito'},
        {nombre:'Credito',id:'Credito'}
    ];

    $scope.tipoTarjeta2 = [
        {nombre:'Visa',id:'Visa'},
        {nombre:'Mastercard',id:'Mastercard'}
    ];

    $scope.areaespera        = false;
    $scope.areaaceptada      = false;
    $scope.arearechazada     = false;
    $scope.formPersonal      = true;
    $scope.formPersonald     = false;
    $scope.formBeneficiarios = false;
	$scope.formTarjeta       = false;

	//input tipo range
	$scope.pago.value=100;
	$scope.pago.participacion1 = 0;
	$scope.pago.participacion2 = 0;
	$scope.pago.participacion3 = 0;
	$scope.pago.participacion4 = 0;
	$scope.min = 0;
	$scope.max = 100;

    $scope.activeFormp = function() {

        if ($scope.pago.selectDoc==undefined) {
            $scope.val_DPI=true;
        }else{
            $scope.formPersonal  = false;
            $scope.formPersonald = true;                  
        }

        $scope.val_DPI = function() {
          $scope.val_DPI=false;
        };

    };

    $scope.guardar_firma = function (){
        alert("gracias");
    }


    $scope.activeFormbenefi = function (){

        if ($scope.pago.fechanac===undefined) {
            $scope.val_fecNac=true;
        }else if($scope.pago.selectGenero===undefined){
             $scope.val_sexo=true;
        }else if($scope.pago.estadocivil===undefined){
             $scope.val_civil=true;
        }else{

            $scope.formPersonal      = false;
            $scope.formPersonald     = false;
            $scope.formBeneficiarios = true;
        }

        $scope.selet_fecNac = function() {
          $scope.val_fecNac=false;
        };
        $scope.selet_sexo = function() {
          $scope.val_sexo=false;
        };
        $scope.selet_civil = function() {
          $scope.val_civil=false;
        };
    };

	$scope.formPrimerintegrante = true;
	$scope.btnBeneficiariod = true;
	$scope.formSegundointegrante = false;
	$scope.btnBeneficiariot = false;
	$scope.formTercerintegrante = false;
	$scope.btnBeneficiariocua = false;
	$scope.formCuartointegrante = false;
	$scope.formFirma         = false;

    //Validacion de porcentaje de participacion
    /*$scope.val_participacion = function() {
        $scope.max=100;
        console.log($scope.max);

        if ($scope.pago.participacion1!=undefined) {
            $scope.max = $scope.max - $scope.pago.participacion1;
        }
        if ($scope.pago.participacion2!=undefined) {
            $scope.max = $scope.max - $scope.pago.participacion2;
        }
        if ($scope.pago.participacion3!=undefined) {
            $scope.max = $scope.max - $scope.pago.participacion3;
        }
        if ($scope.pago.participacion4!=undefined) {
            $scope.max = $scope.max - $scope.pago.participacion4;
        }

        console.log($scope.max);

    };*/

    //variables validacion de selects
    //

	$scope.activeIntregranted = function() {

        if ($scope.pago.b1selectGenero===undefined) {
            $scope.val_selectGB1=true;

        }else if($scope.pago.b1selectParent===undefined){
            $scope.val_selectPB1=true;

        }else if($scope.pago.participacion1===0){
            $scope.val_selectPorB1=true;

        }else{
            $scope.range1=true;
            $scope.max = $scope.max - $scope.pago.participacion1;
            if ($scope.max > 1) {
                $scope.btnBeneficiariod = false;
                $scope.btnBeneficiariot = true;              
                $scope.formSegundointegrante = true;
            }

        }

        $scope.selectGB1 = function() {
          $scope.val_selectGB1=false;
        }; 
        $scope.selectPB1 = function() {
          $scope.val_selectPB1=false;
        }; 
        $scope.selectPorB1 = function() {
          $scope.val_selectPorB1=false;
        }; 

	};

    $scope.activeIntregrantet = function() {

        if ($scope.pago.b2selectGenero===undefined) {
            $scope.val_selectGB2=true;

        }else if($scope.pago.b2selectParent===undefined){
            $scope.val_selectPB2=true;

        }else if($scope.pago.participacion2===0){
            $scope.val_selectPorB2=true;

        }else{
            $scope.range2=true;
            $scope.max = $scope.max - $scope.pago.participacion2;
          
            if ($scope.max > 1) {
                $scope.btnBeneficiariot   = false       
                $scope.btnBeneficiariocua = true;           
                $scope.formTercerintegrante = true;
            }

        }

        $scope.selectGB2 = function() {
          $scope.val_selectGB2=false;
        }; 
        $scope.selectPB2 = function() {
          $scope.val_selectPB2=false;
        }; 
        $scope.selectPorB2 = function() {
          $scope.val_selectPorB2=false;
        }; 

    };

    $scope.activeIntregrantecua = function() {

        if ($scope.pago.b3selectGenero===undefined) {
            $scope.val_selectGB3=true;

        }else if($scope.pago.b3selectParent===undefined){
            $scope.val_selectPB3=true;

        }else if($scope.pago.participacion3===0){
            $scope.val_selectPorB3=true;

        }else{
            $scope.range3=true;
            $scope.max = $scope.max - $scope.pago.participacion3;
            if ($scope.max > 1) {
                $scope.btnBeneficiariocua = false;
                $scope.formCuartointegrante = true;      
            }

        }

        $scope.selectGB3 = function() {
          $scope.val_selectGB3=false;
        }; 
        $scope.selectPB3 = function() {
          $scope.val_selectPB3=false;
        }; 
        $scope.selectPorB3 = function() {
          $scope.val_selectPorB3=false;
        }; 

    };

      $scope.formFirma       = true;//quitar

	$scope.activeFormFirma = function(){
        //valida  cuarto beneficiario
        if ($scope.formPrimerintegrante && $scope.formSegundointegrante && $scope.formTercerintegrante && $scope.formCuartointegrante) {

            if ($scope.pago.b4selectGenero===undefined) {
                $scope.val_selectGB4=true;
            }else if($scope.pago.b4selectParent===undefined){
                $scope.val_selectPB4=true;

            }else if($scope.pago.participacion4===0){
                $scope.val_selectPorB4=true;

            }else{
                $scope.range4=true;
                $scope.formPersonal      = false;
                $scope.formPersonald     = false;
                $scope.formBeneficiarios = false;
                $scope.formFirma         = true;
            }

            $scope.selectGB4 = function() {
              $scope.val_selectGB4=false;
            }; 
            $scope.selectPB4 = function() {
              $scope.val_selectPB4=false;
            }; 
            $scope.selectPorB4 = function() {
              $scope.val_selectPorB4=false;
            };

        }else if ($scope.formPrimerintegrante && $scope.formSegundointegrante && $scope.formTercerintegrante) {
            //tercero
            $scope.activeIntregrantecua();
            if ($scope.formTercerintegrante || (parseInt($scope.pago.participacion1) + parseInt($scope.pago.participacion2) + parseInt($scope.pago.participacion3)) == 100) {
                $scope.formPersonal      = false;
                $scope.formPersonald     = false;
                $scope.formBeneficiarios = false;
                $scope.formFirma         = true;
            } 

        }else if($scope.formPrimerintegrante && $scope.formSegundointegrante) {
            //segundo
            $scope.activeIntregrantet();
            if ($scope.formTercerintegrante || (parseInt($scope.pago.participacion1) + parseInt($scope.pago.participacion2)) == 100) {
                $scope.formPersonal      = false;
                $scope.formPersonald     = false;
                $scope.formBeneficiarios = false;
                $scope.formFirma         = true;
            }

        } else if ( $scope.formPrimerintegrante) {
            //primero  
            $scope.activeIntregranted(); 
            if ($scope.formSegundointegrante || $scope.pago.participacion1 == 100 ) {
                $scope.formPersonal      = false;
                $scope.formPersonald     = false;
                $scope.formBeneficiarios = false;
                $scope.formFirma         = true;
            }
            
        }

	};
	
    $scope.activeFormpago = function(){
        $scope.formPersonal      = false;
        $scope.formPersonald     = false;
		$scope.formBeneficiarios = false;
		$scope.formFirma         = false;
        $scope.formTarjeta       = true;
    };

    $scope.enviarPago= function(){
        
        if ($scope.pago.selectTarjeta===undefined) {
             $scope.val_tajeta=true;

        }else if($scope.pago.selectTarjeta2===undefined){
            $scope.val_visa=true;

        }else if($scope.pago.selectBanco===undefined){
            $scope.val_banco=true;

        }else{

            $scope.formPago   = false;
            $scope.formRes    = true;
            $scope.areaespera = true;

            var nac  = $scope.pago.fechanac;
            var dd   = nac.getDate();
            var mm   = nac.getMonth() + 1; //Enero es 0
            if (dd < 10)  dd = '0' + dd;
            if (mm < 10)  mm = '0' + mm;

            var datad={
                price      : $scope.subto,
                nombre     : $scope.pago.nombre,
                apellido   : $scope.pago.apellido,
                tipo_doc   : $scope.pago.selectDoc,
                numero_doc : $scope.pago.identeificacion,
                telefono   : $scope.pago.telefono,
                email      : $scope.pago.email,
                direccion  : $scope.pago.direccion,
                zona       : $scope.pago.zona,
                colonia    : $scope.pago.colonia,
                depto      : $scope.pago.city,
                municipio  : $scope.pago.municipio,
                fecha_nac  : nac.getFullYear() + "-" + mm + "-" + dd,
                genero     : $scope.pago.selectGenero,
                estado_civil: $scope.pago.estadocivil,
                ocupacion  : $scope.pago.ocupacion,
                labora_en  : $scope.pago.empresalabora,
                nit        : $scope.pago.nit,
                //beneficiario1
                b1nombre   : $scope.pago.b1nombre,
                b1apellido1: $scope.pago.b1apellido1,
                b1apellido2: $scope.pago.b1apellido2,
                b1genero   : $scope.pago.b1selectGenero,
                b1parent   : $scope.pago.b1selectParent,
                b1parti    : $scope.pago.participacion1,
                //beneficiario2
                b2nombre   : $scope.pago.b2nombre,
                b2apellido1: $scope.pago.b2apellido1,
                b2apellido2: $scope.pago.b2apellido2,
                b2genero   : $scope.pago.b2selectGenero,
                b2parent   : $scope.pago.b2selectParent,
                b2parti    : $scope.pago.participacion2,
                //beneficiario3
                b3nombre   : $scope.pago.b3nombre,
                b3apellido1: $scope.pago.b3apellido1,
                b3apellido2: $scope.pago.b3apellido2,
                b3genero   : $scope.pago.b3selectGenero,
                b3parent   : $scope.pago.b3selectParent,
                b3parti    : $scope.pago.participacion3,
                //beneficiario4
                b4nombre   : $scope.pago.b4nombre,
                b4apellido1: $scope.pago.b4apellido1,
                b4apellido2: $scope.pago.b4apellido2,
                b4genero   : $scope.pago.b4selectGenero,
                b4parent   : $scope.pago.b4selectParent,
                b4parti    : $scope.pago.participacion4,
                //datos tarjeta
                country    : 'GT',
                city       : $scope.pago.city,
                state      : 'Guatemala',
                postalcode : '01001',
                namecard   : $scope.pago.namecard,
                numbercard : $scope.pago.account1+''+$scope.pago.account2+''+$scope.pago.account3+''+$scope.pago.account4,
                mes        : $scope.pago.mes,
                anio       : $scope.pago.anio,
                cvv        : $scope.pago.cvv,
                //datos adicionales tarjeta
                tipoTarj   : $scope.pago.selectTarjeta,
                visaMast   : $scope.pago.selectTarjeta2,
                banco      : $scope.pago.selectBanco,
            };

            console.log('Datos a enviar: ',datad);
            $http({
                method  : 'POST',
                url     : urlprin+'enviar-pago',
                data    : datad,
                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (data, status, headers) {

                $scope.midata   = data;
                $scope.decision = data.decision;

                if($scope.midata.decision==='ACCEPT'){
                    $scope.areaespera    = false;
                    $scope.areaaceptada  = true;
                    $scope.arearechazada = false;
                }else{
                    $scope.arearechazada = true;
                    $scope.areaespera    = false;
                    $scope.areaaceptada  = false;
                }

            }).error(function(err){

            });


        }


        $scope.selectTarjeta = function() {
          $scope.val_tajeta=false;
        }; 
        $scope.selectVisa = function() {
          $scope.val_visa=false;
        }; 
        $scope.selectBanco = function() {
          $scope.val_banco=false;
        }; 

    };

    $scope.intentarNuevo= function(){
        $scope.areaespera   = false;
        $scope.areaaceptada = false;
        $scope.arearechazada= false;
        $scope.formPago     = true;
        $scope.formRes      = false;
    };

    $scope.borrar= function(){
       alert("hola mundo");
     }

});

//signature
pApp.directive("svg",function(){
    return {
    
        link: function (scope, iElement, iAttrs) {
            var svg = (document.createElement('canvas'));
            var signaturePad = new SignaturePad(svg);
            iElement.append(svg);

        }
    
    }
});


                function borrar(){
               alert("hola");
           }