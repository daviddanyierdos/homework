
<?php
$windowtitle = array(
    'title' => 'Our Community',
);

$header = array(
    'source' => 'logo.png',
    'alt' => 'logo'
);

$contacts = array(
	'about' => 'About',
	'about1' => 'About Us',
	'about2' => 'Our Company',
	'about3' => 'History',
	'about4' => 'Contact',
	'about5' => 'Partners',
	'about6' => 'Map',
	'mission' => 'Our Mission',
	'mission1' => 'Our Projects',
	'mission2' => 'Open Projects',
	'mission3' => 'Help Us',
	'mission4' => 'Our Volunteers',
	'resources' => 'Resources',
	'resources1' => 'Booking',
	'resources2' => 'Finances',
	'resources3' => 'Law',
	'team' => 'Team',
	'team1' => 'Our Team',
	'team2' => 'Careers',
	'team3' => 'Positive Message',
	'image' => 'img10.jpg'
);

$footer = array(
    	'address1' => 'Address: ',
	'address2' => '1678 L Street NW Washington, DC 40005',
	'policy' => 'Privacy Policy',
	'important' => 'Important Information',
	'website' => 'Website design by ',
	'company' => 'TechnoWorld Inc.',
	'organization' => 'My Selected Organization'
	
);

$pages = array(
	'/' => array('file' => 'homepage', 'text' => 'HOMEPAGE', 'menun' => array(1,1)),
	'resources' => array('file' => 'resources', 'text' => 'RESOURCES', 'menun' => array(1,1)),
	'gallery' => array('file' => 'gallery', 'text' => 'GALLERY', 'menun' => array(1,1)),
	'contact' => array('file' => 'contact', 'text' => 'CONTACT', 'menun' => array(1,1)),
	'form data' => array('file' => 'form data', 'text' => 'FORM DATA', 'menun' => array(1,1)),
	'upload' => array('file' => 'upload', 'text' => '', 'menun' => array(0,0))
);

$error_page = array ('file' => '404', 'text' => 'Page Not Found!');

$FOLDER = './gallery/';
$TYPES = array ('.jpg', '.png');
$MEDIATYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "m/d/Y H:i";
$MAXSIZE = 500*1024;
?>