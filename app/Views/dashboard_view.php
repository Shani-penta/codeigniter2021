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
               <h1>Welcome to Test user</h1>
              <a href="<?= base_url() ?>/dashboard/logout">Logout</a>
            </div>
        </div>
     </div>
</section>
<?=  $this->endSection(); ?>