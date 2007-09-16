#!/bin/sh
#marcelogarrone, 2007-09-14

mv ../include/config.* ~
rm -f download/openthesaurus-es_src.tar.bz2
tar -cjvf openthesaurus-es_src.tar.bz2 ../*
mv ~/config.* ../include
#mv openthesaurus-es_src.tar.gz download
