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
            <?php $pic = ($userdata->profile_pic);
            if($pic !='') { ?>
            <img src  ='#'; height  ="60"; >
            <?php }else{ ?>
            <img src  ='<?= base_url(); ?>/public\assets\images\avatar.jpg';  height  ="60"; >
            <?php } ?>
               <h1>Welcome to <?= ucfirst($userdata->username);?></h1>
               <h4>Number : <?= ucfirst($userdata->mobile);?></h4>
               <h4>Email : <?= ucfirst($userdata->email);?></h4>

              <a href="<?= base_url() ?>/dashboard/logout">Logout</a>
            </div>
        </div>
     </div>
</section>
<?=  $this->endSection(); ?>