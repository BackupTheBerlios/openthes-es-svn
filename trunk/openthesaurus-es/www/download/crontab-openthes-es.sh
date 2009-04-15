### text
w3m -dump http://openthes-es.berlios.de/admin/text_export.php > ~/text_export.log
sleep 5
cd /home/groups/openthes-es/htdocs/download/
tar -cjf Thesaurus_es_ES.txt.tar.bz2 COPYING Thesaurus_es_ES.txt

### Kword
w3m -dump http://openthes-es.berlios.de/admin/kword_export.php > ~/kword_export.log
sleep 5
tar -cjf Kword_thesaurus_es_ES.txt.tar.bz2 COPYING Kword_thesaurus_es_ES.txt

### OOo
w3m -dump http://openthes-es.berlios.de/admin/ooo_export.php > ~/ooo_export.log
sleep 5
cd ../OOo-Thesaurus
tar -cjf OOo-thes_es_ES.tar.bz2 th_es_ES.* README_th_es_ES.txt COPYING 
mv OOo-thes_es_ES.tar.bz2 ../download/

### OOo2
w3m -dump http://openthes-es.berlios.de/admin/ooo_new_export.php > ~/ooo_new_export.log
sleep 5
cd ../OOo2-Thesaurus
tar -cjf OOo2-thes_es_ES.tar.bz2 th_es_ES_v2.idx th_es_ES_v2.dat README_th_es_ES_v2.txt COPYING
mv OOo2-thes_es_ES.tar.bz2 ../download/

### OOo2
w3m -dump http://openthes-es.berlios.de/admin/ooo_oxt_export.php > ~/ooo_oxt_export.log

