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