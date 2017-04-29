#!/bin/bash

git clone --depth 1 --branch master git://github.com/elec-club-iitb/elec-club-iitb.github.io _tmp_elec_site

cd _tmp_elec_site
bundle exec jekyll build -d ../public/electronics-club/
cd ..

rm -rf _tmp_elec_site
