<?php
//application/views/index/index.php

$this->load->view($this->config->item('theme') . 'header');

?>

    
<style>
    .jumbotron{
         background-image: url(https://www.si3.ae/wp-content/uploads/2018/08/Web-design-development-dubai.jpg);
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
    }
    //https://www.si3.ae/wp-content/uploads/2018/08/Web-design-development-dubai.jpg

body {
    
  background-color:white;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
    
    
    
h1 {
  
  
  font-family:monospace;
  font-size: 50px;
  //text-align: center;
    color: aliceblue;
   
  
} 
    h6{
        color:brown;
    }
    p{
        font-style:italic;
      //text-align: center;
        font-size: 12px;
        color:white;
      
    }
   
    
    h3{
        text-align: center;
        
        font-family:monospace;
        color:black;
    }
    
}
    .container{
        background-color:snow;
        float: right;
        float: left;
        width: 33.33%;
        padding: 5px;
    }
    .container1{
        float: left;
        width: 33.33%;
        padding: 5px;
        border-radius: 50%;
    }
    
    
</style>

    
<!--
<div class="pic">
  <h1><?=$title?> </h1> 
    
-->

    
    </div>
<div class="jumbotron">
    
  <h1><?=$title?> </h1> 
    
  <p>A Art for you is an application that developed<br> by a team of five Year Up students. Blalalmsknhbdgvakjdshbgvcvgbhjklkjnhbvbhnjkl<br>;lkjnhbgvcvghjkl;lkjbv 
Sdckjhgvccvhjkl;lkjnhbvchjk<br>
Sadfglkjnhbgvhjkl;’;lkjhgvfcghjkl;,mnbbnm,l;’;lkjhgfghl;lkjhgvvhjkl
<br>Okijuhygfdsxcvbnhjmk,lokijuhytrfdesdfghjkl;lkjhgfcghjklkjhgfdcfghjk<br>
Kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>kkkkkkkkkkkkkkkkkkkkkkkkk
kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj<br>hghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br> kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk

 </p>
  <hr class="my-4">
  
  
</div>

<!--
<div style="background-image: url(https://mgcreativedesign.files.wordpress.com/2014/11/website-design-background.png);" width="1500" height=" 1000">
    <h1><?=$title?> </h1> 


<p>A Art for you is an application that developed<br> by a team of five Year Up students. Blalalmsknhbdgvakjdshbgvcvgbhjklkjnhbvbhnjkl<br>;lkjnhbgvcvghjkl;lkjbv 
Sdckjhgvccvhjkl;lkjnhbvchjk<br>
Sadfglkjnhbgvhjkl;’;lkjhgvfcghjkl;,mnbbnm,l;’;lkjhgfghl;lkjhgvvhjkl
<br>Okijuhygfdsxcvbnhjmk,lokijuhytrfdesdfghjkl;lkjhgfcghjklkjhgfdcfghjk<br>
Kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>kkkkkkkkkkkkkkkkkkkkkkkkk
kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<br>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj<br>hghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk

 </p>
-->

</div>
<div>
<h3>   Meet the Developers </h3>

    
 <div class="container1">
     
 <img src="https://media-exp1.licdn.com/dms/image/C4D03AQEDNrdyDC5xUg/profile-displayphoto-shrink_200_200/0?e=1588809600&v=beta&t=uF8SlqsEvqAUqI40uqo-8J743Bf5B1sfQpdiactUF38" width="200" height="200"> 
     <h6>Sabri Tahir<br> Tech Lead</h6>
    </div>
   <div class="container1"> 
      
 <img src="<?=base_url()?>public/uploads/danu1.jpg" width="200" height="200">
       <h6>Omega Tesfay <br> Front-End Developer</h6>
     
    </div>
    <div class="container1">
        
 <img src="https://media-exp1.licdn.com/dms/image/C4E03AQGdj3UdVRJuPA/profile-displayphoto-shrink_800_800/0?e=1588809600&v=beta&t=mybDj5EVLxiLXDil8jW6LfK-GjuSaWoTnbRIr7Wpj90" width="200" height="200">
        <h6> AJ WIETECHA<br> Back-End Developer</h6>
    </div>
    <div class="container1">
 <img src="https://media-exp1.licdn.com/dms/image/C5603AQG3Yu6D1_dXtg/profile-displayphoto-shrink_800_800/0?e=1588809600&v=beta&t=S8_Toqqpf9pQRpgVuKD1KzxHntpyF25WCJgCWkDz4vQ" width="200" height="200">
        <h6>Joseph B Yehulugeta<br> Product Owner</h6>
    </div>
    <div class="container1">
 <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFxwsu8roBZ3A/profile-displayphoto-shrink_800_800/0?e=1588809600&v=beta&t=T8lsobahLx8vcNx0pJQQlyzHXpUGutFHLEyD90PNeCA" width="200" height="200">
     <h6>Ricardo D Pena<br> Back-End Developer</h6>
    </div>

   
  
</div>
    


<?php
    

$this->load->view($this->config->item('theme') . 'footer');

?>
