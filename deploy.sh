#!/usr/bin/env sh

set -e

npm run build

cd dist

git init
git checkout -b main
git add -A
git commit -m 'Deploying to gh-pages'

git subtree push --prefix dist origin gh-pages
