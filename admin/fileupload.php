<?php 
$data = array();
if(isset($_FILES['upload']['name']))
{
	$file_name= $_FILES['upload']['name'];
	$file_path= 'uploads/'.$file_name;
	$file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
	$allowed_extensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
	if (in_array($file_extension, $allowed_extensions))
	{
		if(move_uploaded_file($_FILES['upload']['tmp_name'], $file_path))
		{
			$data['file']= $file_name;
			$data['url']= $file_path;
			$data['uploaded']= 1;
		}
		else
		{
			$data['uploaded']= 0;
			$data['error']['message']= 'Error! File not uploaded';
		}
	}
	else
	{
		$data['uploaded']= 0;
		$data['error']['message']= 'Invalid extension';
	}
}
echo json_encode($data);
?>