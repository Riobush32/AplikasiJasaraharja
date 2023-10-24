<?php 

// pesan login
function pesan($name, $type, $message){
	$CI = &get_instance();
	$pesan = "<div class='alert alert-" . $type . " alert-dismissible'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
	<b>$message</b>
	</div>";

	return $CI->session->set_flashdata($name, $pesan);
}

// Format tangal ke yyyy-mm-dd
function date_to_en($tanggal){
	$tgl = date('Y-m-d', strtotime($tanggal));
	if ($tgl == '1970-01-01') {
		return '';
	} else {return $tgl;}
}

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal){
	$tgl = date('d/m/Y', strtotime($tanggal));
	if ($tgl == '01-01-1970') {
		return '';
	} else {  return $tgl; }
}