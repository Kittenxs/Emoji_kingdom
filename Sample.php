<?php

function SkandiaAKEmotes($str){
        $emojis = array( 		
		'#\(:))#si' => '1',
		'#\(XD)#si' => '2',
		'#\(fight)#si' => '3',
		'#\(:P)#si' => '4',
		'#\(:\'()#si' => '6',
		'#\(unsure)#si' => '7',
		'#\(angry)#si' => '8',
		'#\(:$)#si' => '9',
		'#\(cry)#si' => '11',
		'#\(kiss)#si' => '12',
		'#\(heart)#si' => '13',
		'#\(brokenheart)#si' => '14',
		'#\(:&)#si' => '15',
		'#\(:X)#si' => '16',
		'#\(sleep)#si' => '17',
		'#\(evil)#si' => '18',
		'#\(nosebleed)#si' => '19',
		'#\(goodjob)#si' => '20',
		'#\(:o)#si' => '5',
		'#\(:()#si' => '10',
);
return preg_replace(array_flip($emojis), $emojis, $str);
}

$myTestString = "(:$)";
echo "<img src='icons/"+SkandiaAKEmotes($myTestString)+".png' style='weight: 24px; height: 24px;'>";

?>
