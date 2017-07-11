<?php
$connection=mysqli_connect('50.62.177.142','jjtest','jj@test','xme'); 
$companyid = $_POST['id'];
$sql = "SELECT path FROM files where id = '{$companyid}'";
$query_result = mysqli_query($connection, $sql);
if (!$query_result){
    echo json_encode("Query Failed " . mysqli_error($connection));
}
$fileinfo = mysqli_fetch_assoc($query_result);
$fileinfo['status'] = 'success';
echo json_encode($fileinfo);
?>
 