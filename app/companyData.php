<?php 
$connection=mysqli_connect('50.62.177.142','jjtest','jj@test','xme'); 
$companyid = $_POST['id'];
$sql = "SELECT units, amount, name, shares, opendate FROM company where id = '{$companyid}'";
$sqlfile = "SELECT path, filename FROM files where companyid = '{$companyid}'";
$query_result = mysqli_query($connection, $sql);
$file_result = mysqli_query($connection, $sqlfile);
if (!$query_result&!$file_result){
    echo json_encode("Query Failed " . mysqli_error($connection));
}
$companyinfo = mysqli_fetch_assoc($query_result);


$fileArray = array();
while($row = mysqli_fetch_assoc($file_result)) {
    $temp = array();
    $temp['path'] = $row['path'];
    $temp['filename'] = $row['filename'];
    array_push($fileArray, $temp);
}
$companyinfo['status'] = 'success';
$companyinfo['file'] = $fileArray;
echo json_encode($companyinfo);
?>