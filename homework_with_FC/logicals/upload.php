
<?php

if (isset($_POST['send'])) {
	foreach($_FILES as $file) {
		if ($file['error'] == 4);
		elseif (!in_array($file['type'], $MEDIATYPES))
			$message[] = " Wrong type: " . $file['name'];
		elseif ($file['error'] == 1 or $file['error'] == 2 or $file['size'] > $MAXSIZE) 
			$message[] = " The file is too large: " . $file['name'];
		else {
			$destination = $FOLDER.strtolower($file['name']);
			if (file_exists($destination))
				$message[] = " The file already exists: " . $file['name'];
			else {
				move_uploaded_file($file['tmp_name'], $destination);
				$message[] = ' Ok: ' . $file['name'];
			}
		}
	}        
}

?>