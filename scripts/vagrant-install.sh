#!/bin/sh -x

PATH_OF_CURRENT_SCRIPT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source $PATH_OF_CURRENT_SCRIPT/vagrant-functions.sh

USER=apache
EMAIL=rohan.poddar@gmail.com
FIRST_NAME=Rohan
LAST_NAME=Poddar
PASSWORD=admin123
ORG_NAME=campusSports
APPLICATION_URL=https://192.168.33.10

if [ "$#" == "0" ]; then
	FOLDER="app"
else
	FOLDER="$1"
fi

run_in_vagrant -c "sudo rm -rf /var/www/cs-core"
run_in_vagrant -c "sudo ln -s /campusSportswear/cs-core /var/www/cs-core"
run_in_vagrant -c "sudo rm -rf /var/resources/*"
run_in_vagrant -c "cd /var/www/cs-core && sudo php app/console oro:install --force --drop-database --env prod --timeout=999999999 --user-email=$EMAIL, --user-firstname=$FIRST_NAME, --user-lastname=$LAST_NAME, --user-password=$PASSWORD --organization-name=$ORG_NAME --application-url=$MACHINE_IP --sample-data=no"
run_in_vagrant -c "sudo chown -R apache:apache /var/resources"
