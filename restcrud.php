<?php
require('db.php');

if($_POST['custom_method'] == "create"){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $sql="INSERT INTO crud_form(name,phone) VALUES ('$name','$phone')";
    $connection=mysqli_query($conn,$sql);
    echo "success";
}

if($_GET['custom_method'] == "get_all_data")
{
    $query="SELECT * from  crud_form ";
    $result = mysqli_query($conn,$query);
    $cust=mysqli_fetch_all($result, MYSQLI_ASSOC);
    if($cust) {
         echo json_encode($cust);
    } else {
         echo "failed";
      }  
    }

if($_POST['custom_method'] == "update")
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $id=$_POST['id'];
  $update="UPDATE crud_form SET name='$name',phone=$phone WHERE id=$id";
  //echo $update;
  $uptresult=mysqli_query($conn,$update);
  echo "update success";
}

if($_POST['custom_method']== "delete")
{
  $id=$_POST['id'];
  $deleteq="DELETE FROM crud_form WHERE id=$id";
  $deleteresult=mysqli_query($conn,$deleteq);
  echo"deleted successful";
}
 ?> 