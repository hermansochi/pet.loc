#!/bin/sh
set -e

find /app/public \
  -type f \
  -name '*.js' \
  -exec sed -i "s+%%REACT_APP_AUTH_URL%%+${REACT_APP_AUTH_URL:?}+g" '{}' \;

find /app/public \
  -type f \
  -name '*.js' \
  -exec sed -i "s+%%REACT_APP_API_URL%%+${REACT_APP_API_URL:?}+g" '{}' \;

find /app/public \
  -type f \
  -name '*.js' \
  -exec sed -i "s+%%REACT_APP_API_VER%%+${REACT_APP_API_VER:?}+g" '{}' \;

find /app/public \
  -type f \
  -name '*.js' \
  -exec sed -i "s+%%REACT_APP_AVATARS%%+${REACT_APP_AVATARS:?}+g" '{}' \;

exec /docker-entrypoint.sh "$@"