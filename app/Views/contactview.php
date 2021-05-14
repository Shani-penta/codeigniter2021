<?php
$page_session = \CodeIgniter\Config\Services::session(); ?>
<?= $this->extend("layouts/main"); ?>
<?= $this->section("content"); ?>
<script>
    setTimeout(function(){
        $("#hidemsg").hide();
    },3000);
    
    </script>
<section class="banner animatedParent">
        <div class="inner-banner"
            style="background: url(<?= base_url(); ?>/public/assets/images/inner_ban4.jpg); height:450px">
        </div>
        <div class="meta ban-head">
           
        </div>
</section>

<section class="contact-form"  style="padding:50px 0;">
<div class="container">
   <div class="row">
      <div class="col-md-12">
      <h1>Contact us</h1>

<!-- <?php if(isset($validation)) : ?>
   <?= $validation->listErrors(); ?>
    <?php endif; ?> -->
    <?php if($page_session->getTempdata('success'))  : ?>
        <div id="hidemsg" class='alert alert-success'><?= $page_session->getTempdata('success'); ?></div>
        <?php endif; ?>
        <?php if($page_session->getTempdata('error'))  : ?>
        <div id="hidemsg" class='alert alert-error'><?= $page_session->getTempdata('error'); ?></div>
        <?php endif; ?>
     <?= form_open(); ?>
      <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name'); ?>">
    <span class="error"><?=  display_error($validation,'name'); ?> </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= set_value('email'); ?>">
    <span class="error"><?=  display_error($validation,'email'); ?> </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input type="tel" class="form-control" name="phone" id="phone" value="<?= set_value('phone'); ?>">
    <span class="error"><?=  display_error($validation,'phone'); ?> </span>
</div>
  <div class="mb-3">
   <label for="exampleInputmessage" class="form-label">Message</label>
    <textarea class="form-control" name="message" id="message"><?= set_value('message'); ?></textarea>
    <span class="error"><?=  display_error($validation,'message'); ?> </span>
</div>
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <input type="submit" class="btn btn-primary" name="save" id="save">
  <?= form_close(); ?>

      </div>
    </div>
</div>
</section>
<?= $this->endSection(); ?>