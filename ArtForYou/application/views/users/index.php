<?php
//application/views/users/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?=$title?></h2>

<?php foreach ($users as $user): ?>

<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><?=$user['FirstName']?> <?=$user['LastName']?></h3>
    </div>
    <div class="panel-body">
        <p>Email: <?=$user['Email']?></p>
        <p><a href="<?=site_url('users/'. $user['UserID'])?>">View User</a></p>
    </div>
</div>
<?php endforeach; ?>
<p><a href="<?=site_url('users/create/')?>">Add User</a></p>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>

