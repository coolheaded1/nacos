<link rel="stylesheet" type="text/css" href="loaderPayStack.css">
<div class="loader-ordinary-text"></div>
<?php $sanitizer = filter_var_array($_POST,FILTER_SANITIZE_STRING);
$gtpay_echo_data = http_build_query (array(
	'formNum' => $gtpay_cust_id,
	'email' => $Email,
	'FirstName' => $FirstName,
	'MiddleName' => $MiddleName,
	'Surname' => $Surname,
	'Telephone' => $Telephone,
	'Address' => $Address,
	'transID' => $gtpay_tranx_id
));

// at the call back url 
 parse_str($gtpay_echo_data, $output);
?>