<?php
# Original idea for taking 4 words came from the XKCD comic.
# I got my words from http://www.watchout4snakes.com/CreativityTools/RandomWord/RandomPhrase.aspx
$random1 = "subpastor";
$random2 = "bandanaed";
$random3 = "resulphurize";
$random4 = "voetsek";

# salting.
$originalSalt = "fsdahfiuhwq348r439u543p5jprhrfl;eafhdpashfads;lfh;lpsdafghsdklfskdgfhkhsdagfdiusagkfhdasghfiyhkadsfhodsahfkgfisdagfkgdsyufgasfgydysagkfgsdaukfgysda gfsdagfdsahgfk ffdsagfdsafukdgsafyguykusdafgskufygsakdgfkdsgfkdsgakuyfgdsfkysdafkgawierf8aoyoy*&Y&^#&*#^&(*&^&*#^*&^$*&#^$*($^(*&^#&*$%GDJHGJHKDFGDUKUYSGDUAGAKUGDAUKGADUKAYDSGASGKADGDYKAFGDYAKFGYKUDFDASUKFDASUKYFDASUKFADSUDASFGUYASDK";
$saltt = crypt($originalSalt,$originalSalt);
# lel, salting within salts... saltception cont.
$salt = crypt($saltt,$originalSalt);
$debug = true;

?>