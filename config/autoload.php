<?php
	header('Access-Control-Allow-Origin: *');
	
	$POSTDATA = file_get_contents("php://input");
	$REQUEST = json_decode($POSTDATA);						// ตัวแปรสำหรับดึงข้อมูลจากแอพที่ส่งข้อมูล

	include_once("class.database.php");						// ดึง class สำหรับการติดต่อฐานข้อมูล
	define("host", "localhost");
	define("user", "406068045_db");
	define("pass", "0807957899");
	define("dbname", "406068045_db");
	$DATABASE = new Database(host, user, pass, dbname);		// ตัวแปรสำหรับการเชือมต่อข้อมูลในฐานข้อมูล

	// include_once("class.push.php");							// ดึง class สำหรับการส่งแจ้งเตือน
	// define("onesignal_id", "28beb7a0-96b8-416d-8ed9-01e25e43a715");
	// define("onesignal_api_key", "YzI0MGMwYjAtY2Q3NC00ODE2LThkNGUtY2IwNzU4NGYwNmJj");
	// $PUSH = new Push(onesignal_id, onesignal_api_key);		// ตัวแปรสำหรับการส่งแจ้งเตือน
	