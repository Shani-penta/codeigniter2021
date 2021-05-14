<?php
$page_session = \CodeIgniter\Config\Services::session(); ?>
<?= $this->extend("layouts/main"); ?>

<?= $this->section("content"); ?>
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
            <div class="col-md-6">
				<h3 class="dark-grey">Register</h3>
                <!-- <?php if($page_session->getTempdata('success')): ?>
                <div class="alert-sucess"><?= $page_session->getTempdata('success'); ?></div>
                <?php endif; ?>
                <?php if($page_session->getTempdata('error')): ?>
                <div class="alert-error"><?= $page_session->getTempdata('error'); ?></div>
                <?php endif; ?> -->
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
				<div class="form-group col-lg-6">
					<label>Username</label>
					<input type="text" name="uname" class="form-control" id="uname" value='<?= set_value('uname') ?>'>
                    <span class="error"><?=  display_error($validation,'uname'); ?> </span>
				</div>
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="email" name="email" class="form-control" id="email" value='<?= set_value('email') ?>'>
                    <span class="error"><?=  display_error($validation,'email'); ?> </span>
				</div>
				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="password" name="password" class="form-control" id="password">
                    <span class="error"><?=  display_error($validation,'password'); ?> </span>
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="rpassword" class="form-control" id="rpassword" >
                    <span class="error"><?=  display_error($validation,'rpassword'); ?> </span>
				</div>
								
				
				
				<div class="form-group col-lg-6">
					<label>Mobile</label>
					<input type="tel" name="mobile" class="form-control" id="mobile" value='<?= set_value('mobile') ?>'>
                    <span class="error"><?=  display_error($validation,'mobile'); ?> </span>
				</div>			
				
						
			
			</div>
		
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>

             <?= form_close(); ?>



            </div>
        </div>
    </div>

<?=  $this->endSection(); ?>