<?php
include('header.php');
    require '../dev_side\config.php';
   
    if(!empty($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result = mysqli_query($conn,"select * from login where username='$username'");
        
        if($row=mysqli_fetch_array($result)){
            
            if(isset($_POST["submit"])){
               $name=$_POST["name"];
               $email=$_POST["email"];
               $gender=$_POST["gender"];
               $age=$_POST["age"];
               $education=$_POST["education"];
               $contect_number=$_POST["contect_number"];
               $address=$_POST["address"];
               $lang_spoken=$_POST["lang_spoken"];

               $update=" UPDATE `login` SET `name`='$name',`email`='$email',`gender`='$gender',`age`='$age',`education`='$education',`contect_number`='$contect_number',`address`='$address',`lang_spoken`='$lang_spoken' WHERE `login`.`username`='$username'";
            mysqli_query($conn,$update);
            }
?>
<section class="newpage contact" id="account">
       
       <h1 class="heading"><span>account </span>details..</h1>
 <div class="row" >
 <form  class="" action="" method="POST" autocomplete="off">

               <label for="name"> name:</label>
               <input type="text" name="name" id="name" value="<?php echo $row['name'];?>" class="box">
           
               <label for="username">user name:</label>
              <input type="text" name="username" id="username" value="<?php echo $row['username'];?>" class="box">
          
              <label for="email">Email :</label></td>
               <input type="email" name="email" id="email" value="<?php echo $row['email'];?>" class="box">
           
               <label for="gender">gender :</label></td>
               <input type="gender" name="gender" id="gender" value="<?php echo $row['gender'];?>" class="box">
           
               <label for="age">age :</label></td>
               <input type="age" name="age" id="age" value="<?php echo $row['age'];?>" class="box">

               <label for="education">education :</label></td>
               <input type="education" name="education" id="education" value="<?php echo $row['education'];?>" class="box">
           
               <label for="contect_number">contect_number :</label></td>
               <input type="contect_number" name="contect_number" id="contect_number" value="<?php echo $row['contect_number'];?>" class="box">
           
               <label for="address">address :</label></td>
               <input type="address" name="address" id="address" value="<?php echo $row['address'];?>" class="box">
           
               <label for="lang_spoken">lang_spoken :</label></td>
               <input type="lang_spoken" name="lang_spoken" id="lang_spoken" value="<?php echo $row['lang_spoken'];?>" class="box">
          
            <button type="submit" class="btn" id="submit" name="submit">update</button>
          <a href="index.php" class="btn">Back</a>
</div>
   </form>
   </section>
<?php
include('footer.php');
   }

}
else{
   header("location:login.php");
}
?>
