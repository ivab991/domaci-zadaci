<?php

function fHideNum($phone) {
	$hidePhone = substr_replace($phone, '****', -6, -2);
	echo $hidePhone;
}