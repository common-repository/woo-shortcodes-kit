<?php
/*
Conditional message to the customer according to their number of orders
*/
?>
<!-- Header -->
<div class="accordion">
  <table>
  <colgroup>
    <col span="1">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_enablewmessage" name="wshk_enablewmessage" value='8' <?php if(get_option('wshk_enablewmessage')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enablewmessage></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'Conditional message to the customer according to their number of orders', 'wshk' ); ?></big><br /><small> <?php esc_html_e( 'Activate the function and click here to configure it', 'wshk' ); ?></small></p></th></tr>
    </table>
</div>
<!-- content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/conditional-message-to-the-customer-according-to-their-number-of-orders/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br /><br />
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcode', 'wshk' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'wshk' ); ?></small></p>
<br><br><br>
    <div onmousedown="return false;" onselectstart="return false;" class="wshkshtboxes">
<table style="margin-top:-20px;">
          <colgroup>
    <col span="3">
   
  </colgroup>
         <tr>
        <td class="shtboxone" style="width: 23%; padding-left: 30px;"><p><big><strong><span class="dashicons dashicons-code-standards"></span> <?php esc_html_e( 'Shortcode:', 'wshk' ); ?></strong><br><input class="testininputclass" onmousedown="return false;" onselectstart="return false;" style="color:white;margin-top:10px;outline:0;-moz-outline: 0;border:none;" type="text" value="[woo_message]" id="woomyusermessage" readonly></big><br /><br /></p></td>
        
        <td class="shtboxtwo" style="width: 23%; padding-left: 30px;"><p><big>

<div class="tooltip" style="width:120px;">
<button class="wshkshtboxesbtn" style="width:150px;" type="button" onclick="myFunctionusermessage()" onmouseout="outFuncusermessage()">
  <span class="tooltiptext" id="myTooltipusermessage"><?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?></span>
  <?php esc_html_e( 'Copy shortcode', 'wshk' ); ?>
  </button>
</div>



<script>

document.getElementById("woomyusermessage").addEventListener("mousedown", function(event){
  event.preventDefault();
});

function myFunctionusermessage() {
  var copyText = document.getElementById("woomyusermessage");
  copyText.select();
  document.execCommand("copy");
  
  var tooltipusermessage = document.getElementById("myTooltipusermessage");
  tooltipusermessage.innerHTML = "<?php esc_html_e( 'Copied:', 'wshk' ); ?> " + copyText.value;
}

function outFuncusermessage() {
  var tooltipusermessage = document.getElementById("myTooltipusermessage");
  tooltipusermessage.innerHTML = "<?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?>";
}
</script></big><br /><br /> </p></td>
        
        <td class="shtboxthree" style="width: 46%; padding-left: 30px;"><p><span class="dashicons dashicons-warning"></span><big style="font-size:14px !important;"><strong><?php esc_html_e( 'Copy the shortcode and paste in your custom page', 'wshk' ); ?></strong></big><br /><br /></p></td></tr>
        
        <br />
        <br />
        </table>
</div>
<br><br><br>
<p><b>2.- <?php esc_html_e( 'Function settings', 'wshk' ); ?></b><br><small><?php esc_html_e( 'Choose the number of columns to display the products loop', 'wshk' ); ?></small></p><br>
    <br /><table width="90%">
    <tr>
    <td class="forsmalldropdowns maxwid" style="padding: 30px;width:50%;"><p><?php esc_html_e( 'Message template', 'wshk' ); ?><br><small><?php esc_html_e( 'You can copy it and paste directly in the text message field', 'wshk' ); ?></small><br><br><code><?php esc_html_e( 'Hi %1$s!<br />To reward your activity in our shop with %2$s orders, we want give to you a 50%% discount for your next order!! 
<br />Enter this coupon code in your next order: WSHK50TST', 'wshk' ); ?></code><br><br><br> <?php esc_html_e( 'Message text:', 'wshk' ); ?><br /><br /> <textarea name="wshk_textwmssg" id="wshk_textwmssg" class="textarea" cols="40" rows="6" id="wshk_textwmssg" placeholder="<?php esc_html_e( 'Hi %1$s!<br />To reward your activity in our shop with %2$s orders, we want give to you a 50%% discount for your next order!! 
<br />Enter this coupon code in your next order: WSHK50TST', 'wshk' ); ?>" size="30%" style="height:90px;"><?php if(get_option('wshk_textwmssg')!=''){ echo get_option('wshk_textwmssg'); }?></textarea><br /></p>
    <br /><br /></td>
    
    <td class="forsmalldropdowns maxwid" style="padding: 30px; border-left: 1px solid;"><p> <?php esc_html_e( 'Set the number of orders to display the message:', 'wshk' ); ?><br /><br /> <input class="testininputclass" type="number" id="wshk_wmorders" name="wshk_wmorders" value="<?php if(get_option('wshk_wmorders')!=''){ echo get_option('wshk_wmorders'); }?>" placeholder="5"/ size="20"><br /></p>
    
    <p><?php esc_html_e( 'Set the custom text to display if the customer not have orders made yet:', 'wshk' ); ?><br /><br /> <input class="testininputclass" type="text" id="wshk_nonotice" name="wshk_nonotice" value="<?php if(get_option('wshk_nonotice')!=''){ echo get_option('wshk_nonotice'); }?>" placeholder="<?php esc_html_e( "Dont have made orders yet", "wshk" ); ?>"/ size="20"><br /></p>
    
    <p> <?php esc_html_e( 'Set the custom text to display if the customer have more orders:', 'wshk' ); ?><br /><br /> <input class="testininputclass" type="text" id="wshk_morenotice" name="wshk_morenotice" value="<?php if(get_option('wshk_morenotice')!=''){ echo get_option('wshk_morenotice'); }?>" placeholder="<?php esc_html_e( "Coming soon more gifts", "wshk" ); ?>"/ size="36"><br /></p>
    <br /><br />
    </td>        
    </tr>
   
    </table> <br /><br />
    </div>