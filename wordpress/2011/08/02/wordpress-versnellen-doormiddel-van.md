title: Wordpress versnellen doormiddel van .htaccess aanpassing
link: http://vandersluijs.nl/blog/2011/08/wordpress-versnellen-doormiddel-van.html
author: tvdsluijs
description: 
post_id: 229
created: 2011/08/02 00:22:00
created_gmt: 2011/08/02 00:22:00
comment_status: open
post_name: wordpress-versnellen-doormiddel-van
status: publish
post_type: post

# Wordpress versnellen doormiddel van .htaccess aanpassing

Nu wordpress 3.x uit is (nu 3.2.1, maar als je dit leest is er waarschijnlijk al weer een nieuwere versie uit) wordt het tijd om Wordpress eens supersnel te maken.  
  
Waarschijnlijk heb je gemerkt dat Wordpress 3.2 al veel sneller is geworden, maar het kan nog sneller!  
  
Het sneller maken van Wordpress kan redelijk eenvoudig door wat regels toe te voegen aan je .htaccess file.  
  
Een .htaccess-bestand is een simpel tekstbestandje waarmee je dingen kunt uitvoeren en sommige (server-)instellingen kunt wijzigen of omzeilen.  
  
En hiermee kan je dus ook je wordpress sneller maken.  
  
Met het volgende stukje tekst wat je boven aan je bestaande .htaccess zet (dus voor de standaard wordpress .htaccess) zet je je site in de zogenaamde comprimeer mode. Eigenlijk zipt de server ieder bestand voordat hij hem naar de bezoeker stuurt. Zijn browser pakt het automatisch weer uit en toont het in de browser.  
  
Doordat het bestand vele malen kleiner is (inclusief javascript, css, plaatjes enz) heeft de bezoeker hem veel sneller binnen.  
  
Okay, genoeg theorie, de code:  
  
  
mod_gzip_on Yes  
mod_gzip_dechunk Yes  
mod_gzip_item_include file .(html?|txt|css|js|php|pl)$  
mod_gzip_item_include handler ^cgi-script$  
mod_gzip_item_include mime ^text/.*  
mod_gzip_item_include mime ^application/x-javascript._  
mod_gzip_item_exclude mime ^image/._  
mod_gzip_item_exclude rspheader ^Content-Encoding:._gzip._  
  
  
  
ExpiresActive On  
ExpiresDefault "access plus 1 seconds"  
ExpiresByType text/html "access plus 1 seconds"  
ExpiresByType image/gif "access plus 2592000 seconds"  
ExpiresByType image/jpeg "access plus 2592000 seconds"  
ExpiresByType image/png "access plus 2592000 seconds"  
ExpiresByType text/css "access plus 604800 seconds"  
ExpiresByType text/javascript "access plus 216000 seconds"  
ExpiresByType application/x-javascript "access plus 216000 seconds"  
  
  
  
  
Header set Cache-Control "max-age=2592000, public"  
  
  
Header set Cache-Control "max-age=604800, public"  
  
  
Header set Cache-Control "max-age=216000, private"  
  
  
Header set Cache-Control "max-age=216000, public, must-revalidate"  
  
  
Header set Cache-Control "max-age=1, private, must-revalidate"  
  
  
  
  
Header unset ETag  
  
FileETag None  
  
  
  
Download de .htaccess code