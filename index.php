<?php

// Carga la libreria de plantillas 
require_once 'libs/Smarty.class.php';

//Crea la instancia
$smarty = new Smarty();

//Configura las ubicaciones de plantillas, compilados, cache y configuraciones
$smarty->setTemplateDir('templates');
$smarty->setConfigDir('configs');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');

// Verificación de carga de libreria y configuración
// $smarty->testInstall();
