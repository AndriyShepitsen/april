    
<!-- //LOCATION: april/Contact-us 
-->
<div class="contactUsContent">
<?php
echo validation_errors("<p class='error'>");

echo form_open('Contact-Us/send-mail')
?>
  <fieldset>
    <legend>Contact Us</legend>

    <div class="row">
        <div class="small-6 columns">
            <label for='firstName'>First Name</label>
            <input type="text" placeholder="Required" id='firstName' name='firstName' value='<?php 
            echo set_value('firstName');
            ?>'>
        </div>
        <div class="small-6 columns">
            <label for='lastName'>Last Name</label>
            <input type="text" placeholder='Required' id='lastName' name='lastName' value='<?php 
            echo set_value('lastName');
            ?>'>
        </div>
    </div>

    <div class="row">


        <div class="small-4 columns">
            <label for="phone">Home Phone</label>
            <input type="text" id="phone" name="phone" value='<?php 
            echo set_value("phone");
            ?>'>
        </div>

        <div class="small-4 columns">
            <label for="cPh">Mobile Phone</label>
            <input type="text" id="cPh"  name="cPh"  value='<?php 
            echo set_value('cPh');
            ?>'>
        </div>  

        <div class="small-4 columns">
            <label for="email">Email</label>
            <div class="row collapse">

                <div class="small-2 columns">
                  <span class="prefix">@</span>
              </div>
              <div class="small-10 columns">
                <input type="text" placeholder="Required" id="email" name="email" value='<?php 
            echo set_value('email');
            ?>'>
            </div>
        </div>
    </div>    
</div>


<div class="row">
    <div class="small-8 columns">
        <label for="subject">Subject</label>
        <input type="text" placeholder="Required" id="subject" name="subject" value='<?php 
            echo set_value('subject');
            ?>'>
    </div>
</div>

<div class="row">
  <div class="large-8 columns">
    <label for="mTextArea">Message</label>
    <textarea placeholder="Your message..." id='mTextArea' name='mTextArea'><?php 
           echo $this->input->post('mTextArea');

            ?></textarea>
</div>
</div>

<input type="submit" class="small button secondary" name="submit" id="submit" value="Send">

</fieldset>


<?php 
echo form_close();
?>




 </div><!--content-->
 <script type="text/javascript">
$(function(){
menuSelect(22);
});
</script>