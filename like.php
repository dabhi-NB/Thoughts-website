<?php
include('header.php');
    require '../dev_side\config.php';
    if(!empty($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result = mysqli_query($conn,"select * from login where username='$username'");
        if($row=mysqli_fetch_assoc($result)){ ?>

            <section class="types newpage" id="types">
            <h1 class="heading">thoughts <span>liked..</span>
              <a href="index.php" class="btn">Back</a></h1>
              <div class="box-container">
<?php
$like=$_REQUEST["thoughts_name"];

$res=mysqli_query($conn,"SELECT * FROM all_thoughts");

while($thought=mysqli_fetch_assoc($res)){

    if($thought["thoughts_name"]){
?>
  
    <div class="box">
       <div class="image">
        <img src="<?php echo $thought["thoughts_image"];?>">
            <div class="type"><?php echo $thought["thoughts_name"]; ?></div>
        </div>
        </div>
<?php } 
else{
    echo"<script>
alert(`you don't like any thoughts!`);
window.location='index.php';</script>";
}
$thought++; 
}
echo" </div>
</section>";
        } 
include('footer.php');
   }
else{
   header("location:login.php");
}
?>
