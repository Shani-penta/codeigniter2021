<style>
.error {
    color:#e81313;
}
</style>
<div class="form">
      
     
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Form validation</h1>
          <!-- <?php if(isset($validation)) : ?>
          <?= $validation->listErrors(); ?>
          <?php endif; ?> -->
          <?= form_open(); ?>
          
          <!-- <form action="/" method="post"> -->
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name
              </label>
              <input type="text" name="fname"  value='<?= set_value('fname'); ?>' >
           <span class="error"><?=  display_error($validation,'fname'); ?> </span>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name
              </label>
              <input type="text"   name="lname" value='<?= set_value('lname'); ?>' >
              <span class="error"><?=  display_error($validation,'lname'); ?> </span>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email 
            </label>
            <input type="email" name="email" value='<?= set_value('email'); ?>' >
            <span class="error"><?=  display_error($validation,'email'); ?> </span>
          </div>
          <div class="field-wrap">
            <label>
              Mobile
            </label>
            <input type="tel" name="mobile" value='<?= set_value('mobile'); ?>' >
            <span class="error"><?=  display_error($validation,'mobile'); ?> </span>
          </div>
          <input type="submit" name="submit" value="submit" />
          
          <!-- </form> -->
          <?= form_close(); ?>
        </div>
   
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->