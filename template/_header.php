<?php
function pre($object)
{
	echo '<pre>';
	print_r($object);
	echo '</pre>';
}
$objCategory = new Category();
$categories = $objCategory->getCategories();

$objBusniess = new Business();
$business = $objBusniess->getBusiness();
//pre($categories);
//die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ecommerce website project</title>
<meta name="description" content="Ecommerce website project" />
<meta name="keywords" content="Ecommerce website project" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="css/core.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="header_in">
		<h5><a href="/"><?php echo $business[0]['name']; ?></a></h5>
	</div>
</div>
<div id="outer">
	<div id="wrapper">
		<div id="left">
			<h2>Categories</h2>
			<ul id="navigation">
				<?php foreach($categories as $category){

					echo "<li><a href="."?page=categor&amp;category=".$category['id'].">".$category['name']."</a></li>";
				}
		?>
				
			</ul>		
		</div>
		<div id="right">