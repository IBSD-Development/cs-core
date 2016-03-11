#!/bin/sh -x

PATH_OF_CURRENT_SCRIPT="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source $PATH_OF_CURRENT_SCRIPT/vagrant-functions.sh
USER=apache

if [ "$#" == "0" ]; then
	FOLDER="app"
else
	FOLDER="$1"
fi

run_in_vagrant -c "sudo rm -rf /var/www/cs-core"
run_in_vagrant -c "sudo ln -s /campusSportswear/cs-core /var/www/cs-core"
run_in_vagrant -c "cd /var/www/cs-core && sudo php app/console oro:migration:load --force"
