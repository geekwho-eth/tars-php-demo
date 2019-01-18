root=$(cd "$(dirname "$0")";cd ..;pwd)
cd $root
cd tars/
php=$(which "php")
if [ -z $php ]; then
    echo '请先安装php'
    exit
fi

$php /root/phptars/tars2php.php ./tars.proto.php
