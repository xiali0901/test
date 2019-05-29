<?php
	var_dump((bool)'');
	var_dump((bool)1);
	var_dump((bool)3.14);
	var_dump((bool)'abcd');
	var_dump((bool)true);
	var_dump((bool)FALSE);
	var_dump((bool)array());
	var_dump((bool)array(1));
	
	var_dump((int)'');
	var_dump((int)1);
	var_dump((int)'abc');
	var_dump((int)'10abc');
	var_dump((int)array());
	var_dump((int)array(2));
	var_dump((int)TRUE);
	var_dump((int)FALSE);
	
	var_dump((string)'');
	var_dump((string)1);
	var_dump((string)'abc');
	var_dump((string)true);
	var_dump((string)FALSE);
	var_dump((string)array());
	var_dump((string)array(1));
	
	echo '<br />';
	
	$arr=array(1,2,3,4,5);
	end($arr);
	while (TRUE) {
		echo key($arr).'=>'.current($arr);
		if(!prev($arr)){
			break;
		}
		echo '<br />';
	}
	echo '<br />';
	$arr2=array(1,2,3,4,5);
	for($i=0;$i<count($arr2);$i++){
		echo $arr2[$i];
		echo '<br />';
	}
	echo '<br />';
	
	$arr3=array('101'=>'test','102'=>'test2');
	foreach ($arr3 as $key => $value) {
		echo $key.'=>'.$value;
		echo '<br />';
	}
	/*
	 * 十一月二十七号晚自习作业
	 */
?>