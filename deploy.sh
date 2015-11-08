build="build-${CIRCLE_BUILD_NUM}"
sudo mkdir ~/${build}
sudo cp -R ~/httpstatuses/build/. ~/${build}
echo "Deploying ${build} to ${DEPLOY_TARGET}"
rsync -r -l ~/${build} ${DEPLOY_TARGET}:/srv/www/httpstatuses.com
ssh ${DEPLOY_TARGET} "ln -sfn /srv/www/httpstatuses.com/${build} /srv/www/httpstatuses.com/live"
echo "Build deployed and pushed live"