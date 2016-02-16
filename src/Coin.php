<?php
	 class Coin
		{
		 function makeChange($change){
			$quarter = 25;
			$dime = 10;
			$nickel = 5;
			$penny = 1;

		    $quarterQuotient = (int)($change / $quarter);
		    $quarterRemainder = $change % $quarter;
			$dimeQuotient = (int)($quarterRemainder / $dime);
		    $dimeRemainder = $quarterRemainder % $dime;
			$nickelQuotient = (int)($dimeRemainder / $nickel);
		    $nickelRemainder = $dimeRemainder % $nickel;

			$changeArray = array();

			if ($quarterRemainder == 0) {
				array_push($changeArray, $quarterQuotient);
			}

			elseif ($dimeRemainder == 0) {
				array_push($changeArray, $quarterQuotient, $dimeQuotient);
			}

			elseif ($nickelRemainder == 0) {
				array_push($changeArray, $quarterQuotient, $dimeQuotient, $nickelQuotient);
			}

			else {
				array_push($changeArray, $quarterQuotient, $dimeQuotient, $nickelQuotient, $nickelRemainder);
			}

			return $changeArray;
			}
}
?>
