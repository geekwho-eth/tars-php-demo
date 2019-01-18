<?php
  require_once("./vendor/autoload.php");

  // 指定主控ip、port
  $host = "172.17.0.5";
  $port = "2019";
  $routeInfo[] = [
      'sIp' => $host,
      'iPort' => $port,
  ];
  $config = new \Tars\client\CommunicatorConfig();
  //$config->setLocator(sprintf('tars.tarsregistry.QueryObj@tcp -h %s -p %s',$host,$port));
  $config->setRouteInfo($routeInfo);
  $config->setModuleName('PHPTest.PHPServer');
  $config->setCharsetName('UTF-8');

  $servant = new Client\servant\PHPTest\PHPServer\obj\TestTafServiceServant($config);

  $name = 'ted';
  $intVal = $servant->sayHelloWorld($name, $greetings);

  echo '<p>'.$greetings.'</p>';
