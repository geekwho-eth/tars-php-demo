<?php

  return array(
      'appName' => 'PHPTest', //tars服务servant name 的第一部分
      'serverName' => 'PHPServer', //tars服务servant name 的第二部分
      'objName' => 'obj', //tars服务servant name 的第三部分
      'withServant' => true,//决定是服务端,还是客户端的自动生成
      'tarsFiles' => array(
          './test.tars' //tars文件的地址
      ),
      'dstPath' => '../src/servant', //生成php文件的位置
      'namespacePrefix' => 'Server\servant', //生成php文件的命名空间前缀
  );
