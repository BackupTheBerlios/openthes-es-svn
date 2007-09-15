#!/bin/sh
#dnaber, 2003-05-05

mv messages.po old.po
xgettext -n ../../../../include/phplib/loginform.html \
../../../../include/*.php \
../../../../htdocs/thesaurus/*.php \
-o messages.po --keyword=T_
msgmerge old.po messages.po --output-file=messages.po
echo "Update translations (e.g. using KBabel), then call 'msgfmt messages.po'."
