<?php

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E',
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

$paroleMancanti = ['Nel', 'di', 'cammin', 'nostra', 'vita', 'una', 'selva', "che'", 'la', 'via', 'smarrita'];
// “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

$result = $paroleMancanti[0]." ".$words1[6][3][0]." ".$paroleMancanti[1]." ".$paroleMancanti[2]." ".$paroleMancanti[1]." ".$paroleMancanti[3]." ".$paroleMancanti[4]." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$paroleMancanti[5]." ".$paroleMancanti[6]." ".$words1[6][0].", ".$paroleMancanti[7]." ".$paroleMancanti[8]." ".$words1[7]." ".$paroleMancanti[9]." ".$words1[6][1]." ".$paroleMancanti[10].".";

echo $result;


?>