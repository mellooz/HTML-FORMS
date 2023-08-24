<?php 
//الاكشن في الفورم بيبعت البيانات في الصفحه اللي حطيتها يعني بمجرد انت ما حطيت في لاكشن اسم
//الملف ده كده كل البيانات اللي هتتحط في الفورم معانا ف الصفحه دي عادي

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


// طريقه تانيه للكونيكت و الاتنين صح عادي بس دي اسرع 
$con = new mysqli("localhost" , "root" , "" , "form" );


if($con){
    $sql = "INSERT INTO `data` (name , email , gender , mobile , password) VALUES ('$name' , '$email' , '$gender' , '$mobile' , '$password')" ;
    $result = mysqli_query(  $con ,$sql );
    if($result){
        echo "the data inserted";
    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}


}
?>


