<?php

  return array(
      'appName' => 'PHPTest',
      'serverName' => 'PHPServer',
      'objName' => 'obj',
      'withServant' => false,//决定是服务端,还是客户端的自动生成
      'tarsFiles' => array(
          './test.tars'
      ),
      'dstPath' => './',
      'namespacePrefix' => 'Client\servant',
  );
