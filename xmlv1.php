<?php
$ies = [];

$udp1 = [
    'FUNDAMENTOS DE PROGRAMACIÓN',
    'REDES E INTERNET',
    'ANÁLISIS Y DISEÑO DE SISTEMAS',
    'INTRODUCCIÓN DE BASE DE DATOS',
    'ARQUITECTURA DE COMPUTADORAS',
    'COMUNICACIÓN ORAL',
    'APLICACIONES EN INTERNET'
];
$udp2 = [
    'OFIMÁTICA',
    'INTERPRETACIÓN Y PRODUCCIÓN DE TEXTOS',
    'METODOLOGÍA DE DESARROLLO DE SOFTWARE',
    'PROGRAMACIÓN ORIENTADA A OBJETOS',
    'ARQUITECTURA DE SERVIDORES WEB',
    'APLICACIONES SISTEMATIZADAS',
    'TALLER DE BASE DE DATOS'
];
$udp3 = [
    'ADMINISTRACIÓN DE BASE DE DATOS',
    'PROGRAMACIÓN DE APLICACIONES WEB',
    'DISEÑO DE INTERFACES WEB',
    'PRUEBAS DE SOFTWARE',
    'INGLÉS PARA LA COMUNICACIÓN ORAL'
];
$udp4 = [
    'DESARROLLO DE ENTORNOS WEB',
    'PROGRAMACIÓN DE SOLUCIONES WEB',
    'PROYECTOS DE SOFTWARE',
    'SEGURIDAD EN APLICACIONES WEB',
    'COMPRENSIÓN Y REDACCIÓN EN INGLÉS',
    'COMPORTAMIENTO ÉTICO'
];
$udp5 = [
    'PROGRAMACIÓN DE APLICACIONES MÓVILES',
    'MARKETING DIGITAL',
    'DISEÑO DE SOLUCIONES WEB',
    'GESTIÓN Y ADMINISTRACIÓN DE SITIOS WEB',
    'DIAGRAMACIÓN DIGITAL',
    'SOLUCIÓN DE PROBLEMAS',
    'OPORTUNIDADES DE NEGOCIOS'
];
$udp6 = [
    'PLATAFORMA DE SERVICIOS WEB',
    'ILUSTRACIÓN Y GRÁFICA DIGITAL',
    'ADMINISTRACIÓN DE SERVIDORES WEB',
    'COMERCIO ELECTRÓNICO',
    'PLAN DE NEGOCIOS'
];
//------------------------------------PERIODOS-------------------------------//
$p1=[];
$p1['nombre'] = "I";
$p1['unidades_didacticas'] = $udp1;

$p2=array();
$p2['nombre'] = "II";
$p2['unidades_didacticas'] = $udp2;

$p3=[];
$p3['nombre'] = "III";
$p3['unidades_didacticas'] = $udp3;

$p4=[];
$p4['nombre'] = "IV";
$p4['unidades_didacticas'] = $udp4;

$p5=array();
$p5['nombre'] = "V";
$p5['unidades_didacticas'] = $udp5;

$p6=[];
$p6['nombre'] = "VI";
$p6['unidades_didacticas'] = $udp6;

//-----------------modulos---------------------//
$m1 = array();
$m1['nombre'] = "ANALISIS Y DISEÑO Y SISTEMAS WEB";
$m1['periodos'] = [$p1, $p2];

$m2 = array();
$m2['nombre'] = "DESARROLLO DE APLICACIONES WEB";
$m2['periodos'] = [$p3, $p4];

$m3 = array();
$m3['nombre'] = "DISEÑO DE SERVICIOS WEB";
$m3['periodos'] = [$p5, $p6];

//________________________PROGRAMAS DE ESTUDIO--------------------------
$pe1 = array();
$pe1['nombre'] = "DISEÑO Y PROGRAMACION WEB";
$pe1['modulos'] = [$m1, $m2, $m3];


$pe2 = array();
$pe1['nombre'] = "ENFERMERIA TECNICA";
$pe1['modulos'] = [];
$pe3 = array();
$pe1['nombre'] = "INDUSTRIA DE ALIMENTOS Y BEBIDAS";
$pe1['modulos'] = [];
$pe4 = array();
$pe1['nombre'] = "PRODUCCION AGROPECUARIA";
$pe1['modulos'] = [];
$pe5 = array();
$pe1['nombre'] = "MECATRONICA AUTOMOTRIZ";
$pe1['modulos'] = [];

$ies['nombre'] = "IES Público HUANTA";
$ies['programas_estudio'] = [$pe1, $pe2, $pe3, $pe4, $pe5];

$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;

$et1=$xml->createElement('ies');
$xml->appendChild($et1);


$nombre_ies = $xml->createElement("nombre", $ies['nombre']);
$programas_ies = $xml->createElement("programas_estudio");
foreach ($ies["programas_estudio"]as $indice => $PEs) {
    $num_pe = $xml->createEletemt("pe".$indice+1);
    $nombre_pe = $xml->createElement("nombre", $PEs['nombre']);
    $num_pe->appendChild($nombre_pe);
    $programas_ies->appendChild($num_pe);
}

$archivo = "ies.xml";
$xml->save($archivo);



?>