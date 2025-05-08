find ./ -type f -print0 | xargs -0 perl -pi -e 's/Disciple_Tools_Chatwoot/Disciple_Tools_Chatwoot/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/disciple_tools_chatwoot/disciple_tools_chatwoot/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/disciple-tools-chatwoot/disciple-tools-chatwoot/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/chatwoot_post_type/chatwoot_post_type/g';
find ./ -type f -print0 | xargs -0 perl -pi -e 's/Disciple.Tools Chatwoot/Disciple.Tools Chatwoot/g';
mv disciple-tools-chatwoot.php disciple-tools-chatwoot.php
rm .rename.sh
