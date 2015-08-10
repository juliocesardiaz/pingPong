<?php 
	class PingPong
	{
		function makePingPong($number)
		{
			$i = 1;
			$ping = array();
			while ($i <= $number) {
				if (($i % 5 == 0) && ($i % 3 == 0) ){
					array_push($ping, "ping-pong");
				} elseif($i % 5 == 0) {
					array_push($ping, "pong");
				} elseif($i % 3 == 0) {
					array_push($ping, "ping");
				} else {
					array_push($ping, $i);
				}
				$i++;
			}
			return $ping;
		}
	}
?>