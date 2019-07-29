$sorgente = explode("|", $_COOKIE['origineTraffico'])[0];
$sorgente_ = substr($sorgente, 7);
$mezzo = explode("|", $_COOKIE['origineTraffico'])[1];
$mezzo_ = substr($mezzo, 7);
$campagna = explode("|", $_COOKIE['origineTraffico'])[2];
$campagna_ = substr($campagna, 7);
