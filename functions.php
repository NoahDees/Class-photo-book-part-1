<?php
	function calcage($birthyear){
		$date = date('Y');
		$usablebday = substr($birthyear,0,4);
		$age = $date - $usablebday;
		return $age;
	}
	function agespec($birthday){
		$date = date_create(date('Y-m-d'));
		$birthday = date_create($birthday);
		$agefull = date_diff($date,$birthday);
		return $agefull->format('%y years %m months %d days');
	}