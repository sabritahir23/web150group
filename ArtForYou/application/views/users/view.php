<?php
//application/views/news/view.php
$this->load->view($this->config->item('theme') . 'header');
?>

<h2><?=$user['FirstName']?> <?=$user['LastName']?></h2>
<p><img src="<?=base_url()?>public/uploads/user<?=$user['UserID']?>.jpg" style="max-width:200px;width:50%;margin:2%;" align="right" /></p>
<p><b>Email:</b> <?=$user['Email']?></p>
<p><b>Bio:</b> <?=$user['Bio']?></p>
<p><a href="<?=site_url('users/update/'. $user['UserID'])?>">Edit User</a></p>
<p><a href="<?=site_url('users/delete/'. $user['UserID'])?>">Delete User</a></p>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>
