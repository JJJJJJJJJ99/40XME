<?php 
$connection=mysqli_connect('50.62.177.142','jjtest','jj@test','xme'); 
$companyid = $_POST['companyid']; // ID from company
$investorid = $_POST['investorid'];
$units = (int) $_POST['units'];

$sqlbuypershare = "SELECT buypershare FROM company WHERE id = '{$companyid}'";
$buypershare_result = mysqli_query($connection, $sqlbuypershare);
$buypershare = (int) mysqli_fetch_assoc($buypershare_result)['buypershare'];


$offer = $buypershare * $units;
$sqla = "SELECT balance FROM investor WHERE id = '{$investorid}'";
$sqla_result = mysqli_query($connection, $sqla);
$new_balance = mysqli_fetch_assoc($sqla_result)['balance'] - $offer;

if ($new_balance < 0){
    echo json_encode("Sorry your account balance is low.");
    exit;
} else{
    $sqlb = "INSERT INTO offer (offer, units, investor, company) VALUES ('{$offer}', '{$units}','{$investorid}','{$companyid}')";
    $insert_result = mysqli_query($connection, $sqlb);
    if (!$insert_result){
        echo json_encode("Query Failed " . mysqli_error($connection));
    }
    $sqlc = "UPDATE investor SET balance = '{$new_balance}'";
    $update_result = mysqli_query($connection, $sqlc);
    
    $sqld = "SELECT balance FROM investor WHERE id = '{$investorid}'";
    $sqld_result = mysqli_query($connection, $sqld);
    $return_balance =  mysqli_fetch_assoc($sqld_result);
    
    $return_balance['status'] = 'success';
    echo json_encode($return_balance);
}




?>