<?php
	$validateData = array();
	if($_REQUEST['act'] == 'data1'){
		if (strtolower($_REQUEST['sName']) == "harry potter" || strtolower($_REQUEST['sName']) == "hermione grangers")
		{
			$validateData['data1'] = 1;
		}else if(1 == preg_match('~[0-9]~', $_REQUEST['sName'])){
			$validateData['data1'] = 2;
		}else if($_REQUEST['sName'] == null){
			$validateData['data1'] = 0;
		}
	}else if($_REQUEST['act'] == 'data2'){
		if (1 == preg_match('~[0]{9}~', $_REQUEST['sID']) || $_REQUEST['sID'] == "111111111" || $_REQUEST['sID'] == "222222222" || $_REQUEST['sID'] == "333333333" || $_REQUEST['sID'] == "444444444" || $_REQUEST['sID'] == "555555555" || $_REQUEST['sID'] == "666666666" || $_REQUEST['sID'] == "777777777" || $_REQUEST['sID'] == "888888888" || $_REQUEST['sID'] == "999999999")
		{
			$validateData['data2'] = 1;
		}else if(!preg_match("/^[0-9]+$/", $_REQUEST['sID']) && !($_REQUEST['sID'] == null)){
			$validateData['data2'] = 2;
		}else if($_REQUEST['sID'] == null){
			$validateData['data2'] = 0;
		}
	}else if($_REQUEST['act'] == 'data3'){
		if(strtolower($_REQUEST['program']) == "basket weaving" || strtolower($_REQUEST['program']) == "beanstalk climbing"){
			$validateData['data3'] = 1;
		}else if(strtolower($_REQUEST['program']) == "geology" || strtolower($_REQUEST['program']) == "microbiology"){
			$validateData['data3'] = 2;
		}else if($_REQUEST['program'] == null){
			$validateData['data3'] = 0;
		}
	}
	
	
	
	echo json_encode($validateData);
	
?>