build="build-${CIRCLE_BUILD_NUM}"
echo "Preparing ${build}"
sudo mkdir ~/${build}
sudo cp -R ~/httpstatuses/build/. ~/${build}

echo "Deploying ${build} to ${DEPLOY_TARGET}"
rsync -r -l ~/${build} ${DEPLOY_TARGET}:${MY_DIRECTORY}
ssh ${DEPLOY_TARGET} "ln -sfn ${MY_DIRECTORY}/${build} ${MY_DIRECTORY}/live"
echo "Build deployed and pushed live"

echo "Creating CloudFront invalidation"
aws configure set preview.cloudfront true
aws cloudfront create-invalidation --distribution-id ${DISTRIBUTION_ID} --paths "/*"
echo "CloudFront invalidation submitted, invalidation will take up to 15 minutes"
