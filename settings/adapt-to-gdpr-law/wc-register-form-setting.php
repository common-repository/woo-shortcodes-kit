<?php
/*
GDPR WC Register form
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_gprdwcregisterform" name="wshk_gprdwcregisterform" value='9292' <?php if(get_option('wshk_gprdwcregisterform')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_gprdwcregisterform></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'GDPR on WooCommerce Register Form', 'wshk' ); ?></big> <!--<span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'UPDATED', 'wshk' ); ?></span>--><br /><small> <?php esc_html_e( 'Activate the function and click here to configure it', 'wshk' ); ?></small></p></th></tr>
    </table>
</div>
<!-- Content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/gdpr-on-woocommerce-register-form/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br /><br />
<table>
    <tr>
        <td class="forsmalldropdowns">
            
            <br>
            
            
            <p class="wshkfirststepfunc forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding-left:30px;">1. <?php esc_html_e( 'Write your message for the checkbox:', 'wshk' ); ?> <br /><small style="color:grey;"><?php esc_html_e( 'Example: I have read and accept the privacy policy', 'wshk' ); ?></small><br /><br> <input class="testininputclass" type="text" name="wshk_gprdireadregister" id="wshk_gprdireadregister" value="<?php if(get_option('wshk_gprdireadregister')!=''){ echo get_option('wshk_gprdireadregister'); }?>" placeholder="<?php esc_html_e( "Write your custom checkbox message", "wshk" ); ?>" size="60" /></p>
            
            
            <br>
            
            
            <p class="wshkfirststepfunc forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding-left:30px;">2. <?php esc_html_e( 'Replace the Privacy Policy link text:', 'wshk' ); ?> <br /><small style="color:grey;"><?php esc_html_e( 'If the field is empty will display the by default Privacy Policy text', 'wshk' ); ?></small><br /><br> <input class="testininputclass" type="text" name="wshk_gdpr_regform_link_text" id="wshk_gdpr_regform_link_text" value="<?php if(get_option('wshk_gdpr_regform_link_text')!=''){ echo get_option('wshk_gdpr_regform_link_text'); }?>" placeholder="<?php esc_html_e( "Write your custom text", "wshk" ); ?>" size="60" /></p>
            
            
            
            <br>
            
            
    <p class="forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding-left:30px;">3. <?php esc_html_e( 'Set your legal summary text on user information:', 'wshk' ); ?><br /><br /> <textarea name="wshk_gprdregveri" id="wshk_gprdregveri" class="textarea" cols="100" rows="100" id="wshk_gprdregveri" placeholder="<?php esc_html_e( 'Information regarding the data that you provide when leaving your comments, orders and reviews.
-responsable
-purpose
-legitimation
-recipients
-rights 

You can write all of you want.', 'wshk' ); ?>" size="30%" style="height:245px;overflow: auto; -webkit-overflow-scrolling: touch;"><?php if(get_option('wshk_gprdregveri')!=''){ echo get_option('wshk_gprdregveri'); }?></textarea></p><small style="padding-left:30px;font-weight:bolder;color:#a46497;"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You can add HTML code too!', 'wshk' ); ?></small></td>


       
        
        <td class="forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding: 50px; border-left: 0px solid; width: 35%;"><h4><span class="dashicons dashicons-admin-appearance"></span> <?php esc_html_e( 'Customize the box', 'wshk' ); ?></h4>
           
    <p> <?php esc_html_e( 'Box border (size):', 'wshk' ); ?><br /> <input class="testininputclass" type="number" name="wshk_gprdregisterbdsize" id="wshk_gprdregisterbdsize" value="<?php if(get_option('wshk_gprdregisterbdsize')!=''){ echo get_option('wshk_gprdregisterbdsize'); }?>" placeholder="1px" size="10" /></p>    
    <p> <?php esc_html_e( 'Box border (radius):', 'wshk' ); ?><br /> <input class="testininputclass" type="number" name="wshk_gprdregisterbdradius" id="wshk_gprdregisterbdradius" value="<?php if(get_option('wshk_gprdregisterbdradius')!=''){ echo get_option('wshk_gprdregisterbdradius'); }?>" placeholder="13%" size="10" /></p>    
   <p> <?php esc_html_e( 'Box border (type):', 'wshk' ); ?><br /> <input class="testininputclass" type="text" name="wshk_gprdregisterbdtype" id="wshk_gprdregisterbdtype" value="<?php if(get_option('wshk_gprdregisterbdtype')!=''){ echo get_option('wshk_gprdregisterbdtype'); }?>" placeholder="<?php esc_html_e( "solid", "wshk" ); ?>" size="10" /></p>   
    <p> <?php esc_html_e( 'Box border (color):', 'wshk' ); ?><br /> <input class="testininputclass" type="text" name="wshk_gprdregisterbdcolor" id="wshk_gprdregisterbdcolor" value="<?php if(get_option('wshk_gprdregisterbdcolor')!=''){ echo get_option('wshk_gprdregisterbdcolor'); }?>" placeholder="#a46497" size="10%" /></p>
    <p> <?php esc_html_e( 'Box background (color):', 'wshk' ); ?><br /> <input class="testininputclass" type="text" name="wshk_gprdregisterbgcolor" id="wshk_gprdregisterbgcolor" value="<?php if(get_option('wshk_gprdregisterbgcolor')!=''){ echo get_option('wshk_gprdregisterbgcolor'); }?>" placeholder="#ffffff" size="10%" /></p>
    <p> <?php esc_html_e( 'Box padding:', 'wshk' ); ?><br /> <input class="testininputclass" type="number" name="wshk_gprdregisterpadding" id="wshk_gprdregisterpadding" value="<?php if(get_option('wshk_gprdregisterpadding')!=''){ echo get_option('wshk_gprdregisterpadding'); }?>" placeholder="20px" size="10" /></p>  
    <br /><br />
        
        
        </td>
    </tr>
</table>
    <br />
    <br />
    </div>