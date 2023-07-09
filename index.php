<?php
include('header.php');
require '../dev_side\config.php';
$result=mysqli_query($conn,"SELECT * FROM types");
?>
  <section class="home" id="home">

<div class="content">
    <h3>Life Thoughts</h3>
    <span>natural & beautiful thoughts</span>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit a iusto, numquam nemo labore officiis praesentium laboriosam accusantium aliquid quod? Tenetur nemo exercitationem cum delectus explicabo doloribus sunt ut provident!</p>
    <a href="#types" class="btn">view now</a>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="\Tpic\Darasan.mp4" loop autoplay></video>
            <h3>best thoughts</h3>
        </div>

        <div class="content">
            <h3>hey...</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis repellendus nostrum nobis vel dolorum placeat eaque saepe in impedit? Reiciendis architecto nostrum facilis necessitatibus labore, ipsum blanditiis earum praesentium beatae!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus velit dolor voluptas ullam corrupti id facilis animi fugit sint, facere.</p>
            <a href="#types" class="btn">learn more</a>
        </div>
    </div>
</section>

<section class="types" id="types">
            <h1 class="heading">thoughts <span>types</span></h1>
      <div class="box-container">
      <?php 
while($row=mysqli_fetch_array($result)){
     ?>
    
        <div class="box">
           <?php echo "<div class='image'><a href='types.php?types_name=$row[1]'>";   ?>
            <img src="<?php echo $row[2];?>">
                <div class="type"><?php echo $row[1]; ?></div>
                </div></a>
            </div>
      <?php $row++; } ?>
      </div>
       
</section>

<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <form action="#home">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" class="box" id="" cols="30" row="10">
</textarea>
<input type="submit" value="send message" class="btn">
</form>
        <div class="image">
            <img src="\Tpic\live.jpg" alt="">
        </div>
    </div>
</section>

<?php
include('footer.php');
?>