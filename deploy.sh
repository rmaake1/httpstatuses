build="build-${CIRCLE_BUILD_NUM}"
sudo mkdir ~/${build}
sudo cp -R ~/httpstatus.es/build/. ~/${build}
echo "Deploying ${build} to ${DEPLOY_TARGET}"
rsync -r -l ~/${build} ${DEPLOY_TARGET}:/srv/www/httpstatus.es
ssh ${DEPLOY_TARGET} "ln -sfn /srv/www/httpstatus.es/${build} /srv/www/httpstatus.es/live"
echo "Build deployed and pushed live"