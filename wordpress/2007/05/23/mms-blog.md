title: MMS blog
link: http://vandersluijs.nl/blog/2007/05/mms-blog.html
author: tvdsluijs
description: 
post_id: 547
created: 2007/05/23 21:20:00
created_gmt: 2007/05/23 21:20:00
comment_status: open
post_name: mms-blog
status: publish
post_type: post

# MMS blog

Vragen… vragen …. bergen vragen krijg ik altijd over het MMS blog component dat ik in Joomla gebruik. Vanmiddag belde er iemand uit amsterdam, voor een amsterdamse portal, en een maand geleden kreeg ik een mail van een radio 538 dj die het ook graag werkend wilde hebben. De site van de maker van MMS blog <http://mms.pipp.no/> ligt er overigens uit. Misschien nu je dit bericht leest niet meer. Overigens kom ik wel weer op <http://www2.pipp.no/> maar die is erg traag. Maar goed, daarom lees je dit bericht niet want waarschijnlijk wist je dat al. Nee je leest dit stuk omdat je waarschijnlijk wilt weten waarom ik het MMS blog component wel aan de praat heb gekregen en jij niet. Hele hordes mensen vragen naar mijn zogenaamde “geheim”. Tja… eerst moet ik zeggen dat ik ook heb zitten kloten om het werkend te krijgen. Het MMS blog werkt gewoon zoals het moet werken, echter dien je wel de juiste instellingen in te voeren. Overigens weet ik niet welke versie ik gebruik, maar deze is vast ouder dan de versie die nu te krijgen is via de joomlaforge. Maar goed… de instellingen Bij Mailbox heb ik de volgende regel staan. {mail.vandersluijs.nl:110/pop3/notls}INBOX Natuurlijk dien je mail.vandersluijs.nl te voorzien van je eigen pop3 mailbox naam. Ook niet onbelangrijk is dat de imap functie in de php.ini aan staat. Deze wil nog wel eens uit staan op diverse servers. Natuurlijk kan je nog even kijken op de documentatie pagina van onze MMS blog component maker <http://mms.pipp.no/doku.php/mmsblog/documentation> Gmail gebruikers dienen overigens de volgende regel bij Mailbox neerzetten: {pop.gmail.com:995/pop3/ssl/novalidate-cert}INBOX Ook kan het nog zijn dat jou server andere instellingen gebruikt. Die weet ik natuurlijk niet. Kijk hier voor de overige instellingen voor een juiste configuratie van MMS Blog. <http://bg.php.net/manual/en/function.imap-open.php> Om het plaatje rond te maken gebruiken sommige providers ook een andere poort, bijvoorbeeld: {mail.my-domain.com:143}INBOX Je kan dit dus het beste even vragen aan je hostingprovider. Tja… meer kan ik er eigenlijk niet over zeggen.