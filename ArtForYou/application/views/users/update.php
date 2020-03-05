<?php
//application/views/news/create.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h2><?=$title?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/update'); ?>

      <fieldset>
    <legend>Update User Info Below</legend>
    <div class="form-group">
      <label for="title">First Name</label>
      <input type="text" name="FirstName" class="form-control" id="text" placeholder="First Name" required="required" value="<?=$user['FirstName']?>" />
    </div>
    <div class="form-group">
      <label for="title">Last Name</label>
      <input type="text" name="LastName" class="form-control" id="text" placeholder="Last Name" required="required" value="<?=$user['LastName']?>" />
    </div>
    <div class="form-group">
      <label for="title">Email</label>
      <input type="email" name="Email" class="form-control" id="text" placeholder="Email" required="required" value="<?=$user['Email']?>" />
    </div>       
        <div class="form-group">
      <label for="text">Bio</label>
      <textarea class="form-control" id="Bio" name="Bio" rows="3" placeholder="Bio"><?=$user['Bio']?></textarea>
    </div>
    <input type="hidden" name="UserID" value="<?=$user['UserID']?>" />
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>


</form>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>