<?php
 require_once 'settings.php';
require_once 'result.php';
 require_once 'getData.php';

  //$link_bel = "base1.xml";
  $link_bel = "http://www.nbrb.by/Services/XmlExRates.aspx?ondate=".date('m/d/Y');

  //$link_rus = "base2.xml";
  $link_rus = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".date('d/m/Y');

  //$link_lit = "litva.csv";
  $link_lit = "http://www.lb.lt/exchange/Results.asp?S=csv&x=34321";

  //$link_lat = "latvia.xml";
  $link_lat = "http://www.bank.lv/vk/xml.xml?date=".date("Ymd");

  //$link_pol = "poland.xml";
  $link_pol = "http://www.nbp.pl/kursy/xml/a153z130808.xml";

  //$link_ukr = "ukraine.htm";
  $link_ukr = "http://www.bank.gov.ua/control/uk/curmetal/detail/currency?period=daily";

   addInfo(getDataBel($link_bel),TBEL);
   addInfo(getDataRus($link_rus),TRUS);
   addInfo(getDataLat($link_lat),TLAT);
   addInfo(getDataLit($link_lit),TLIT);
   addInfo(getDataPol($link_pol),TPOL);
   addInfo(getDataUkr($link_ukr),TUKR);
   /*
  print_r(getDataBel($link_bel));
  print_r(getDataRus($link_rus));
  print_r(getDataLat($link_lat));
  print_r(getDataLit($link_lit));
  print_r(getDataPol($link_pol));
  print_r(getDataUkr($link_ukr));

  */


?>