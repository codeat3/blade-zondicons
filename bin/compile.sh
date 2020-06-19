#!/usr/bin/env bash

set -e

DIRECTORY=$(cd `dirname $0` && pwd)
ICONS=$DIRECTORY/../dist
RESOURCES=$DIRECTORY/../resources/svg

echo "Compiling Zondicons..."

for FILE in $ICONS/*; do
  FILENAME=${FILE##*/}

  if [ "$FILENAME" == ".gitignore" ]
  then
    break
  fi

  # Compile icons...
  cp $FILE $RESOURCES/${FILENAME}

  CLASS='<svg fill="currentColor"'
  sed -i '' "s/<svg/$CLASS/" $RESOURCES/${FILENAME}
done

echo "All done!"
