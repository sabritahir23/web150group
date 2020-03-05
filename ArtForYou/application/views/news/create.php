<?php
//application/views/news/create.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<fieldset>
    <legend>Enter News Item Below</legend>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="text" placeholder="News Title/Headline">
    </div>
        <div class="form-group">
      <label for="text">Content</label>
      <textarea class="form-control" id="text" name="text" rows="3" placeholder="News Content"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>

</form>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>