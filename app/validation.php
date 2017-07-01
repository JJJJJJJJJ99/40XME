<?php 
$connection=mysqli_connect('50.62.177.142','jjtest','jj@test','xme'); 
if (isset($_POST['username'])&&isset($_POST['password'])){
    $investname = $_POST['username'];
    $investpass = $_POST['password'];
}else{
    echo json_encode("Something wrong with database.");
}

$sql = "SELECT id, name, balance FROM investor where name = '{$investname}' and password = '{$investpass}'";
$query_result = mysqli_query($connection, $sql);
if (!$query_result){
    echo json_encode("Query Failed " . mysqli_error($connection));
}

if (mysqli_num_rows($query_result) == 0) {
    echo json_encode("Invalid username or passowrd.");
} else{
    $userinfo = mysqli_fetch_assoc($query_result);
    $userinfo['status'] = 'success';
    echo json_encode($userinfo);
}
?>