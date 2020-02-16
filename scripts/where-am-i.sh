#!/bin/sh

if [[ ! -e application/config/database.php ]]; then
    echo "You are nowhere."
    exit;
fi;

HOSTNAME=`cat application/config/database.php | grep default | grep hostname | sed 's/"/\x27/g'| cut -d\' -f6`
DATABASE=`cat application/config/database.php | grep default | grep database | sed 's/"/\x27/g'| cut -d\' -f6`
WHOAMI=`whoami`

#echo "HOSTNAME=${HOSTNAME}"
#echo "DATABASE=${DATABASE}"
#echo "WHOAMI=${WHOAMI}"

if [[ ${HOSTNAME} == "CDALNSQL02" ]]; then
    echo "PRODUCTION";
    exit;
fi
if [[ ${HOSTNAME} == "CDALNSQLDEV01" ]]; then
    TEST=`echo ${DATABASE} | grep ${WHOAMI}`
    if [[ ${TEST} != "" ]]; then
        echo "SANDBOX [${WHOAMI}]"
    else
        echo "UAT"
    fi
    exit;
fi
echo "I have no idea!";
