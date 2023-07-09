<?php
include('header.php');
require '../dev_side\config.php';
$keywords=$_REQUEST["types_name"];

$result=mysqli_query($conn,"SELECT * FROM types");
$row=mysqli_fetch_array($result);

$res=mysqli_query($conn,"SELECT * FROM all_thoughts");
?>
<section class="types newpage" id="types">
<h1 class="heading"><?php echo $keywords; ?>
<span>.</span>  <a href="index.php" class="btn">Back</a></h1>
</section>

<section class="types" id="thought">
<div class="box-container">
           
<?php 
while($thought=mysqli_fetch_array($res)){
    if($keywords==$thought["keywords"]){
?>

<div class="box">
<div class="image">
            <img src="<?php echo $thought['thoughts_image']; ?>">
                <div class="type icons">
                    
              <?php  
                 
                echo "<form action='like.php?thoughts_name=$thought[1]'>".$thought['thoughts_name'].
                " <inputtype='button' class='fas fa-heart heart' id='like' name='like' onclick='alert('you licked that!');'>
                </form>";
                //    echo" <a href='like.php?thoughts_name=$thought[1]' class='fas fa-heart heart' id='like'></a>";
                  
                //    echo" <a href='like.php?thoughts_name=$thought[1]' class='fas fa-heart heart' id='unlike'></a>";
               
                ?>
                </div> 
</div></div>
               
                <?php $thought++; } }?>
                </div>      
</section>

 <?php
include('footer.php');
?>

<!-- 76.33
71.
65

413=59
513=73.29 -->

onclick-->like

