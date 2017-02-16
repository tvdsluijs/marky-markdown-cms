title: Van MD5 naar veilige versleuteling
link: http://vandersluijs.nl/blog/2014/01/van-md5-naar-veilige-versleuteling.html
author: tvdsluijs
description: 
post_id: 75
created: 2014/01/18 12:38:00
created_gmt: 2014/01/18 12:38:00
comment_status: open
post_name: van-md5-naar-veilige-versleuteling
status: publish
post_type: post

# Van MD5 naar veilige versleuteling

![](/wp-content/uploads/2014/01/34164244_d529aee319_m.jpg)

Foto door  [Whiskeygonebad](http://www.flickr.com/photos/badwsky/)
Wachtwoord beveiliging is het meest belangrijke als je een website of webshop hebt.  
  
Het is namelijk belangrijk dat je de wachtwoord veiligheid van je site gebruikers, je klanten kan waarborgen.  
  
MD5 leek in het begin leuk toen iedereen nog een 486DX2 in huis had maar met een computer cluster van nog geen 2000 euro kan je 700.000.00 wachtwoorden per seconde kraken!  
  
Goede versleuteling van de wachtwoorden is dus belangrijk. Maar hoe ga je dat doen? Hoe kan je van MD5 overstappen naar een betere manier van versleutelen.  
  
In dit artikel leg ik uit hoe je dat kan doen, waarbij je nu al direct huidige wachtwoorden van MD5 naar bijvoorbeeld SHA265 kan omzetten en nieuwe wachtwoorden in een salted sha512x1000 kan encrypten.  
  
  
Dus je hebt een MD5 versleutelde wachtwoorden gebruikers tabel, en daar wil je zo snel mogelijk vanaf.  
  
Dat kan! En in een paar simpele stappen. Ten eerste moet je er voor gaan zorgen dat al deze MD5 versleutelde wachtwoorden iets veiliger wordt!  
  
Dat gaan we doen met behulp van een SALT en SHA512 en een # (hash teken)  
  
  
Wat doe ik hier precies? Ik kan niet het huidige MD5 wachtwoord terug omzetten naar een normaal te lezen wachtwoord. Nou... dat zou wel, maar laten we even zeggen dat ik niet ieder MD5 versleuteld wachtwoord wil opzoeken op Google en ik wil ook geen 2000 euro uitgeven aan een systeem die dit voor mij kan doen.  
  
Ik wil ook helemaal niet de echte wachtwoorden van mijn gebruikers zien.  
  
Met deze mysql update versleutel ik nog een keer het MD5 versleutelde wachtwoord. Ik zet er het # (hash) teken voor zodat ik mijn code kan laten zien dat ik een MD5 wachtwoord versleuteld heb naar een betere versleuteling en dat dit dus geen out-of-the-box MD5 wachtwoord is.  
  
Dus ik pak het MD5 wachtwoord, daar plak ik een timestamp voor als Salt, deze string versleutel ik als SHA512 hash, dan plak ik er een # hash teken voor en zet ik er achter : (dubbelepunt) timestamp.  
  
Mijn mijn geval is de timestamp dus de creationdate van het record wat redelijk uniek is omdat het om een unixtimestamp gaat.  
  
Nu heb ik al direct de wachtwoorden in mijn database veel veiliger gemaakt, alhoewel het nog steeds de oude MD5 versleutelde wachtwoorden zijn.  
  
Hieronder de code die alles verwerkt bij inloggen met oude versleutelde wachtwoorden en deze ook direct omzet naar veiligere versleutelde wachtwoorden.  
  
Wat doet deze code?  
  
Bij het ophalen van de gebruikergegevens via de user haalt hij ook het wachtwoord op en in het eerste deel kijkt hij of er bij het opgeslagen wachtwoord een # in staat en of dit dus een oud MD5 wachtwoord is.  
_if(substr($this->password, 0, 1) == '#'){_  
_  
_Daarna gaat hij de SALT er af halen (implode op :) en dan hou je dus je salt en je hashed wachtwoord over. Dan neemt hij het ingevoerde wachtwoord wat hij door MD5 gooit en de SALT uit het opgehaalde wachtwoord er voor zet.  
  
Dat hashed hij daarna met SHA512  
  

    
    
      
    _$saved_pw = explode(':', substr($this->password, 1) );_
    
      
    
    
      
    _$salt = $saved_pw[1];_
    
      
    
    
      
    _$data = $salt.md5($passwd);_
    
      
    
    
      
    _$givenPasswd = hash('sha512', $data); //oude manier controle!_
    
      
    

  
Als dit overeenkomt met wat er in de database komt dan heb je een match en is de gebruiker dus wie hij zegt dat hij is.  
  
Op dat moment heeft PHP ook het echte ingevoerde wachtwoord en kan je het dus echt goed versleuteld gaan opslaan.  
  
Dit kan via getHashedPWWithSalt! Je genereert eerst een unieke salt voor deze persoon, en die geef je mee aan getHashedPWWithSalt. Hieruit komt een nieuwe salted SHA512 hash die je kan gebruiken!  

    
    
      
    $salt = generateSalt();
    
      
    
    
      
    $this->password = getHashedPWWithSalt($passwd,$salt);
    
      
    

  
Heb je ook gezien dat ik heb 10x sha512 hashed voordat ik hem terug geef. Dit kan je ook ophoven naar bijvoorbeeld 250 of nog hoger. Hierdoor wordt het steeds moeilijker voor computers om het echte wachtwoord te achterhalen.  
  
Op deze manier kan je van MD5 versleutelde wachtwoorden naar goed versleutelde wachtwoorden.  
  
Overigens is SHA512 eigenlijk nog niet veilig genoeg. Wil je echt veilig dan moet je naar bcrypt.  
  
Heb je nog vragen? Stuur me een mail op theo [at] vandersluijs.nl  


> Met dank aan [Anthony Ferrara](http://blog.ircmaxell.com/), hij zette mij aan het denken tijdens een PHP Congres over hoe ik dit het beste kon gaan oplossen.