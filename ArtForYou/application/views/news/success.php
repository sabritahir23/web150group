<?php
//application/views/news/success.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h1>Success!</h1>
<p>Wouldn't it be awesome if I could see the new record?</p>

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>