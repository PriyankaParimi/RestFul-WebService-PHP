<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="hw4"; 

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Database Connection Error";
}
$path =$_SERVER['REQUEST_URI'];
$temp = explode('/', $path);
$id= $temp[count($temp)-1];
if(preg_match('/^[0-9]*$/', $id))
{
    $query="SELECT Book.title,Book.year,Book.price,Book.category,GROUP_CONCAT(Authors.Author_name) AS Authors from Book,Book_Authors,Authors where Book.Book_id=Book_Authors.Book_id AND Book_Authors.Author_id=Authors.Author_id AND Book.Book_id=$id"; 
	$results=mysqli_query($conn,$query);
	while($row1= mysqli_fetch_assoc($results))
    {
		$entire_list_array[]=$row1; /* fetching row which consists of title,book,price,category,authors based on id */
    }
    echo json_encode($entire_list_array);		
}
else
{
	$sql_query="SELECT title FROM Book";
   $result=mysqli_query($conn,$sql_query);
   while($row = mysqli_fetch_assoc($result))
   {
		
		$entire_array[]=$row;
   }
   
   echo json_encode($entire_array);
	
			
} 
?>