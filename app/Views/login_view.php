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
				<h3 class="dark-grey">Login</h3>
				<?= form_open(); ?>
                
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
                  <div class="form-group">
                      <a href="#">Login with Google</a>
                  </div>
                  <div class="form-group">
                      <a href="#">Login with Facebook</a>
                  </div>
             <?= form_close(); ?>



            </div>
        </div>
    </div>
    </section>
<?=  $this->endSection(); ?>