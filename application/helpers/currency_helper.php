<?php
function to_currency($number)
{
	return 'tsh-'.number_format($number, 2, '.', '');
}
?>