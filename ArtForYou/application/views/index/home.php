<?php
//application/views/index/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<style>
body {
  background-color:aliceblue;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

      
<!--
<div class="jumbotron">
   
  <h1 class="display-3"><?=$title?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p>Still not sure what to do?  Check out our Users, below:</p>    
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?=site_url('users')?>" role="button">Our Users</a>
  </p>
</div>
-->


<html>
    <head>
    <body> 
        
        
        <div class="newDev">
        <img src="https://i.pinimg.com/originals/53/40/d6/5340d6e18cb94d19aa4a00518a58b247.jpg" width="200" height="300"
            
        </div>
            <br>
            <div class="newDev">
        <img src="https://i.pinimg.com/originals/9e/a0/ef/9ea0efb8edbbe768f7a1e8504db14e02.jpg" width="300" height="500"
            
        </div>
        
    
        
        
        
        
        </body>
    </head>
</html>
<?php

$this->load->view($this->config->item('theme') . 'footer');

?>