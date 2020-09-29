<!DOCTYPE html>
<html lang="en-US">
<header>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177727112-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177727112-1');
</script>

<meta name="description" content="Get The Most Accurate, Reliable And Organized Lecture notes, Post UTME, Handouts and Exam Past Question and Answers From all Nigerian Universities.">
</header>

<?php
require_once "dbconnect.php";
session_start();
require_once "header.php";
// error_reporting(0);

  $query = mysqli_query($con, "SELECT * FROM uploads WHERE category_id = 4");
  if (mysqli_num_rows($query) <= 0) {
    echo "<h1 style='text-align: center; color: gray; font-weight: bold;'>Network error, please try again.</h1>";
  } else {
    ?>
 
 <title>Post UTME Past Questions and Answers, Free Download | BUKhandouts</title>
  <main>

        <div class="container-fluid">
            <div id="text">             
                <h1 style="text-align: center; font-weight: bold;">2020 Post UTME Past Questions and Answers For All Nigerian Universities Free For Download.</h1>
                <br> 
                <div class="container">
                  <div class="col-sm-12 col-md-12 col-lg-6" id="page-text">
                    <p>  Tested and Trusted by Over 25,000 Students all over Nigeria for providing the most <strong>Relaiable</strong>,<strong>Accurate</strong> and <strong>Trusted</strong> educational materials, ranging from post UTME past questions with the most accurate answers, lectures notes, handouts, Examinations and scholarship past questions, <strong>download yours now.</strong>   </p>   
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-6" id="page-text">
                   <img src="img/bukpostutme.png" class="img-responsive" alt="BUK POST UTME PAST QUESTIONS AND ANSWERS">
                  </div>  
                </div>
            </div>

            <p id="select">Select your School.</p>

<button class="collapsible">Universities</button>
<div class="content">
  <?php
     while ($row = mysqli_fetch_array($query)) {     
  ?>



         <div class="col-sm-6 col-md-4 col-lg-3">
           <a href="description.php?id=<?php echo $row['id']?>">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="tag.png"></div>
                  <img class="block-center img-responsive" src="2.jpg">
                  <hr>
                  <p style="text-align:center;"><?php echo $row['name']?></p>                 
                  <p style="text-align:center;"><span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#8358;</span>1,500.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#8358;</span>1,000.00</bdi></span></ins></span></p>
                  <?php
                      if(!isset($_SESSION['user'])) {
                      echo '<span style="font-size: 17px; text-align: center;">Signup or login for free downloads</span>';
                      } else {
                   ?> <a href="download.php?id=<?php echo $row['id'];?>"><button type="button" class="btn col-xs-12 col-sm-12 col-md-12 col-lg-12 downloadandwhatsapp" style="background-color: #66ffff; border-radius: 50px;"><img src="img/downloadicon.png" height="20px" width="20px" alt="download">Download</button></a>
                 <?php } ?>
              </div>           
            </a>
          </div>

<?php 
    }
  }
  ?>


</div>

<br>
<p>Collapsible Set:</p>
<button class="collapsible">Collages</button>
<div class="content">
  <p>Post UTME Past Questions and Answers for all Nigerian collages will be available soon</p>
</div>

<button class="collapsible">Polytechnics</button>
<div class="content">
  <p>Post UTME Past Questions and Answers for all Nigerian Polytechnics will be available soon</p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

                    <!-- this is the card -->

                <div class="col-sm-6 col-md-4 col-lg-3">
                    
                </div>
        
        </div>
  </main>
<style>
    h1{
        font-family: Arial, Helvetica, sans-serif;

    }
     @media (max-width: 768px) {
  h1{
    font-size: 30px;
  }
  #page-text{
    font-size: 20px;
}
}
    @media (max-width: 600px) {
  h1{
  }
  #page-text{
    font-size: 15px;
}
}
@media (max-width: 558px) {
  h1{
    font-size: 22px;
  }
  #page-text{
    font-size: 12px;  
}
}

#page-text{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
}

#select{
    text-align: center;
    font-size: 22px;
    font-weight: 800;
    line-height: 1.7em;
}
/* cards */
table{
        width: 100%;
        color: blue;
        font-size: 15px;
        padding: 0px;a
        /* border-style: solid; */
    }
    th{
      /* border-style: solid;*/
      padding: 2px;
    }
    .right{
 text-align: right;
    }
    @media (max-width: 767px) {
        table{
        color: blue;
        font-size: 18px;
        width: 100%;
        padding: 0px;
    }
    }
    .header{
        text-align: center;
        border-radius: 10px 10px 0px 0px;
        color: black;
        background-color: #66ffff;
        padding-top: 15px;
        padding-bottom: 20px;
        font-size: 26px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        letter-spacing: 0.05em;
       margin: -7px -7px -8px;
    }
    .card{
      background-color: #fff;
        border-radius: 20px;
        padding: 5px;
        margin-top: 20px;
        background-color: #fff;
        width: 100%;
        height: 285px;
        border-style: groove;
        border-width: 2px;
        box-shadow: 5px 5px  5px gray;
        }
        .download-sec{
         
        }
        
        @media screen and (max-width: 767px) {
 #mobile-share {
 display: none;
 }
}
        /* @media(max-width:767px){
            

        } */
footer{
  font-size: 17px;
  font-family: roboto;

}
footer h6{
  font-size: 20px;
  border-left-style: solid;
}
@media(max-width:767px){
        footer {font-size: 15px;}
        footer h6{
  font-size: 18px;
}
    }

    /* this is for the collapse part of the div */

.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

</style>


<?php
include "footer.php";
?>
        </body>
        </html
