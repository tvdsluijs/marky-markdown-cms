title: dd-wrt router port forward probleem opgelost
link: http://vandersluijs.nl/blog/2012/07/dd-wrt-router-port-forward-problee.html
author: tvdsluijs
description: 
post_id: 190
created: 2012/07/15 22:55:00
created_gmt: 2012/07/15 22:55:00
comment_status: open
post_name: dd-wrt-router-port-forward-problee
status: publish
post_type: post

# dd-wrt router port forward probleem opgelost

Ik kocht een buffalo router omdat ik las dat je hem van dd-wrt kan voorzien.  
  
Dat wil ik graag want ik wil de sterkte zelf graag kunnen instellen.  
  
Maar bij de laatste update van dd-wrt ging het fout.   
  
Geen port forward deed het meer. Ik balen natuurlijk want mijn interne webserver op poort 80 werkte niet meer.  
  
Erger nog ik kwam er niet achter waarom het niet werkte. Alle poorten had ik juist geforward en  stond goed dus het moest echt werken.  
  
Maar nee hoor geen poort forward deed het meer.  
  
Ik heb heel het internet afgezocht en toen kwam ik er achter dat er iets met backloops is en met de firewall.  
  
Efin, na van alles geprobeerd te hebben kwam ik er achter.  
  
Het is eigenlijk vrij simpel  
  
**Ga naar:**  
  
Administratie -> Commando's  
  
**type in:**  
  
_iptables -t nat -A POSTROUTING -j MASQUERADE_  
  
**Klik op:**  
  
bewaar firewall  
  
Reboot even de router voor de zekerheid en de port forward of port-forwards werken weer.