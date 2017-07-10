<?php 
$connection=mysqli_connect('50.62.177.142','jjtest','jj@test','xme'); 
$investorId = $_POST['id'];

$sql = "UPDATE investor SET name = '{$_POST['profileName']}', contact = '{$_POST['profileEmail']}', companyaddr = '{$_POST['profileAddress']}', tel = '{$_POST['profiletel']}', contactperson = '{$_POST['profileContactperson']}', companyname='{$_POST['profileCname']}' WHERE id = '{$investorId}'";
$query_result = mysqli_query($connection, $sql);
if (!$query_result){
    echo json_encode("Query Failed " . mysqli_error($connection));
}
$investorinfo['status'] = 'success';
echo json_encode($investorinfo);
?>