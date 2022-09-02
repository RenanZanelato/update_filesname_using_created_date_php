<?php

$local_files_dir = dirname(__DIR__,3)."Backup";

echo "<pre>";

$arr_files = array_diff(scandir($local_files_dir), ['..', '.']);
foreach ($arr_files as $key => $value) {
	$local_file = $local_files_dir."\\".$value;
	echo "oldname-> ".$local_file;
	$arr_path_info = pathinfo($local_file);

	$format = $arr_path_info["extension"];
	
	$newName = $local_files_dir."\\".date("Ymd_His", filemtime($local_file))."_".uniqid().".".strtolower($format);

	echo "<br>";
	echo "newName-> ".$newName;
	echo "<br><br>";

	//rename($local_file, $newName);
}


echo "</pre>";
