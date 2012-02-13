<?php
// just for local viewing
if ('127.0.0.1' !== $_SERVER['REMOTE_ADDR']) {
    return;
}

require_once 'lib/twig/lib/Twig/Autoloader.php';
require_once 'class/GetsData.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates/');
$twig = new Twig_Environment($loader);

$data = new GetsData();

echo $twig->render("index.twig", array(
        'installed'     => $data->installedPackages(), 
        'removed'       => $data->removedPackages(), 
        'system'        => $data->system(), 
        'syslog'        => $data->syslog(), 
        'procs'         => $data->procs(), 
        'mounted'       => $data->mounted(), 
        'netstat'       => $data->netstat()
    ));

?>