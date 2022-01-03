#!/usr/bin/env bash

set -e

DIRECTORY=$(cd `dirname $0` && pwd)
ICONS=$DIRECTORY/../dist
RESOURCES=$DIRECTORY/../resources/svg

cd $ICONS
curl -o zondicons.zip http://www.zondicons.com/zondicons.zip
unzip zondicons.zip
rm -rf __MACOSX
mv zondicons/* ./
rm -rf zondicons
rm zondicons.zip

echo "Extracting Zondicons..."

echo "All done!"
