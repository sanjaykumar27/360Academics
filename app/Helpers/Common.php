<?php
/*
*for print array/string
*/
function pr($content='',$die_or_not=0,$show_content='') {
	echo "<pre>";
	if(!empty($content)) {
		print_r($content);
	}
	echo "</pre>";
	if($die_or_not == 1) {
		die($show_content);
	}
}
/*
*get Machine IP address
*/
function get_client_ip() {
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}
/*
*get UTC time
*/
function utcTime($type='Y-m-d H:i:s') {
	return date($type);
}

/*
*get local time
*time return time zone like (5.5 for ist)
*formate indicates which date formate we need  
*/
function getLocalTime($date,$type='Y-m-d H:i:s') {
	$timezone = \Cookie::get('timezone');
	$diffTime = $timezone * 60;
	return date($type,strtotime($diffTime." minutes",strtotime($date)));
}
/*
*remove 
*formate indicates which date formate we need  
*/
function _clean($string) {
	if (is_array($string)) {
		foreach ($string as $k => $v) {
			$string[$k] = _clean($v);
		}
		return $string;
	}
	if(!empty($string))
		$string = trim($string);
	return $string;
}


//inser in error_log table
/* function insertErrorLog($errorlog)
{
	DB::table('error_log')->insert(_clean($errorlog));
} */

/* function notification_log($Arr)
{
	$CurDate = utcTime();
	$arr = array(
					'to_user'=>$Arr['to_user'],
					'sender'=> isset($Arr['sender']) ? $Arr['sender'] : 'virendra.singh@byteclues.com',
					'type'=>isset($Arr['type']) ? $Arr['type'] : 'Account Notifications',
					'event'=>$Arr['event'],
					'entity_status'=>'Active',
					'created_by'=>isset($Arr['created_by']) ? $Arr['created_by'] : 'Website',
					'creation_date'=>$CurDate,
					);
	DB::table('notification_log')->insert(_clean($arr));
	if(\Auth::user()->id) {
		if(\Auth::user()->email == $Arr['to_user']) {
			$notification['count'] = \DB::table('notification_log')->where('to_user',\Auth::user()->email)->where('entity_status','=','Active')->count();
			$notification['list'] = \DB::table('notification_log')->where('to_user',\Auth::user()->email)->orderBy('id','DESC')->select('event','id','entity_status')->get();
			\Session::set('notification', $notification);
		}
	}
	return TRUE;
} */
	/* function sendsms($msg='',$to='') {
	if(!empty($to) && !empty($msg) ) {
		$sid = env('TWILIO_SID', 'AC16097b2301a4034e18991e1277a739b2');
		$token = env('TWILIO_TOKEN', 'ade475fb4add1fd9e57da7e301fe8411');
		$client = new Twilio\Rest\Client($sid, $token);

		$message = $client->account->messages->create(
			$to,
			array(
				'from' => env('TWILIO_FROM', '+16097388539'),
				'Body' => $msg
			)
		);
		return true;
	} else {
		return false;
	}
} */
?>
