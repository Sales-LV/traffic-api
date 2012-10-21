<?php
	require('traffic-api.php');

	define('API_KEY', '1234567890abcdef');

	function error_output(TrafficAPI $APIObject)
	{
		if ($APIObject -> ErrNo)
		{
			echo 'Error #'.$APIObject -> ErrNo.': '.$APIObject -> Error;
		}
	}

	function results_output($Data)
	{
		echo '<pre>'.print_r($Data, 1).'</pre>';
		echo '<hr />';
	}

	function debug_output(TrafficAPI $APIObject)
	{
		echo '<pre>'.print_r($APIObject -> Debug, 1).'</pre>';
	}

	$TrafficAPI = new TrafficAPI(API_KEY, API_CAMPAIGN);

/*
	// Retrieving campaign information
	echo '<h2>Campaign information</h2>';
	$Info = $TrafficAPI -> Info_Get();
	debug_output($TrafficAPI);
	error_output($TrafficAPI);
	results_output($Info);

	// Statistics
	echo '<h2>Campaign statistics</h2>';
	$Stats = $TrafficAPI -> Statistics_General();
	debug_output($TrafficAPI);
	error_output($TrafficAPI);
	results_output($Stats);

	// Messages
	echo '<h2>Message list retrieval</h2>';
	$Messages = $TrafficAPI -> Messages_List(array(
		'Time' => date('c', strtotime('2010-02-07'))
	), array(
		'Time' => date('c', strtotime('2010-02-09'))
	));
	debug_output($TrafficAPI);
	error_output($TrafficAPI);
	results_output($Messages);

	echo '<h2>Single message</h2>';
	$Message = $TrafficAPI -> Messages_Get(93248);
	debug_output($TrafficAPI);
	error_output($TrafficAPI);
	results_output($Message);

	echo '<h2>Create a new message</h2>';
	$Message = $TrafficAPI -> Messages_Create(array(
		'Phone' => 21234567,
		'FirstName' => 'George',
		'LastName' => 'Brown',
		'ReceiptUnique' => '123/456',
		'IP' => $_SERVER['REMOTE_ADDR']
	));
	debug_output($TrafficAPI);
	error_output($TrafficAPI);
	results_output($Message);
	*/
?>