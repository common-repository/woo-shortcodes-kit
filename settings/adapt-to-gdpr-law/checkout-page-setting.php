<?php
/*
GDPR checkout page
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_gprdorders" name="wshk_gprdorders" value='90' <?php if(get_option('wshk_gprdorders')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_gprdorders></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'GDPR on WooCommerce checkout page', 'wshk' ); ?> <!--<span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'UPDATED', 'wshk' ); ?></span>--></big> <br /><small> <?php esc_html_e( 'Activate the function and click here to configure it', 'wshk' ); ?></small></p></th></tr>
    </table>
</div>
<!-- Content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/gdpr-on-woocommerce-checkout-page/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br /><br />
<table>
    <tr>
        <td class="forsmalldropdowns">
            
            <br>
            
            
            <p class="wshkfirststepfunc forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding-left:30px;">1. <?php esc_html_e( 'Write your message for the checkbox:', 'wshk' ); ?> <br /><small style="color:grey;"><?php esc_html_e( 'Example: I have read and accept the privacy policy', 'wshk' ); ?></small><br /><br> <input class="testininputclass" type="text" name="wshk_gprdireadcheckout" id="wshk_gprdireadcheckout" value="<?php if(get_option('wshk_gprdireadcheckout')!=''){ echo get_option('wshk_gprdireadcheckout'); }?>" placeholder="<?php esc_html_e( "Write your custom checkbox message", "wshk" ); ?>" size="60" /></p>
            
            <br>
            
            
            <p class="wshkfirststepfunc forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding-left:30px;">2. <?php esc_html_e( 'Replace the Privacy Policy link text:', 'wshk' ); ?> <br /><small style="color:grey;"><?php esc_html_e( 'If the field is empty will display the by default Privacy Policy text', 'wshk' ); ?></small><br /><br> <input class="testininputclass" type="text" name="wshk_gdpr_checkout_link_text" id="wshk_gdpr_checkout_link_text" value="<?php if(get_option('wshk_gdpr_checkout_link_text')!=''){ echo get_option('wshk_gdpr_checkout_link_text'); }?>" placeholder="<?php esc_html_e( "Write your custom text", "wshk" ); ?>" size="60" /></p>
            
            
            
            <br>
            
    <p class="forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding-left:30px;">3. <?php esc_html_e( 'Set your legal summary text on user information:', 'wshk' ); ?><br /><br /> <textarea name="wshk_gprdordveri" id="wshk_gprdordveri" class="textarea" cols="100" rows="100" id="wshk_gprdordveri" placeholder="<?php esc_html_e( 'Information regarding the data that you provide when leaving your comments, orders and reviews.
-responsable
-purpose
-legitimation
-recipients
-rights 

You can write all of you want.', 'wshk' ); ?>" size="30%" style="height:245px;overflow: auto; -webkit-overflow-scrolling: touch;"><?php if(get_option('wshk_gprdordveri')!=''){ echo get_option('wshk_gprdordveri'); }?></textarea></p><small style="padding-left:30px;font-weight:bolder;color:#a46497;"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You can add HTML code too!', 'wshk' ); ?></small></td>
        
    <td class="forsmalldropdowns" style="font-weight: 600; font-size: 14px;padding: 50px; border-left: 0px solid; width: 35%;"><h4><span class="dashicons dashicons-admin-appearance"></span> <?php esc_html_e( 'Customize the box', 'wshk' ); ?></h4>
           
    <p> <?php esc_html_e( 'Box border (size):', 'wshk' ); ?><br /> <input class="testininputclass" type="number" name="wshk_gprdcheckoutbdsize" id="wshk_gprdcheckoutbdsize" value="<?php if(get_option('wshk_gprdcheckoutbdsize')!=''){ echo get_option('wshk_gprdcheckoutbdsize'); }?>" placeholder="1px" size="10" /></p>    
    <p> <?php esc_html_e( 'Box border (radius):', 'wshk' ); ?><br /> <input class="testininputclass" type="number" name="wshk_gprdcheckoutbdradius" id="wshk_gprdcheckoutbdradius" value="<?php if(get_option('wshk_gprdcheckoutbdradius')!=''){ echo get_option('wshk_gprdcheckoutbdradius'); }?>" placeholder="13%" size="10" /></p>    
   <p> <?php esc_html_e( 'Box border (type):', 'wshk' ); ?><br /> <input class="testininputclass" type="text" name="wshk_gprdcheckoutbdtype" id="wshk_gprdcheckoutbdtype" value="<?php if(get_option('wshk_gprdcheckoutbdtype')!=''){ echo get_option('wshk_gprdcheckoutbdtype'); }?>" placeholder="<?php esc_html_e( "solid", "wshk" ); ?>" size="10" /></p>   
    <p> <?php esc_html_e( 'Box border (color):', 'wshk' ); ?><br /> <input class="testininputclass" type="text" name="wshk_gprdcheckoutbdcolor" id="wshk_gprdcheckoutbdcolor" value="<?php if(get_option('wshk_gprdcheckoutbdcolor')!=''){ echo get_option('wshk_gprdcheckoutbdcolor'); }?>" placeholder="#a46497" size="10%" /></p>
    <p> <?php esc_html_e( 'Box background (color):', 'wshk' ); ?><br /> <input class="testininputclass" type="text" name="wshk_gprdcheckoutbgcolor" id="wshk_gprdcheckoutbgcolor" value="<?php if(get_option('wshk_gprdcheckoutbgcolor')!=''){ echo get_option('wshk_gprdcheckoutbgcolor'); }?>" placeholder="#ffffff" size="10%" /></p>
    <p> <?php esc_html_e( 'Box padding:', 'wshk' ); ?><br /> <input class="testininputclass" type="number" name="wshk_gprdcheckoutpadding" id="wshk_gprdcheckoutpadding" value="<?php if(get_option('wshk_gprdcheckoutpadding')!=''){ echo get_option('wshk_gprdcheckoutpadding'); }?>" placeholder="20px" size="10" /></p>  
    <br />
    </td>
    </tr>
</table>
    <div class="forsmalldropdowns" style="padding-left:30px;">
    <p><b>4.- <?php esc_html_e( 'Display options', 'wshk' ); ?></b><br><small><?php esc_html_e( 'You can choose if you want to show or hide the privacy policy checkbox for logged in users. If your users have accepted the privacy policy and you want to skip this step for the following orders, just check the option and it will be hide and checked automatically.', 'wshk' ); ?></small></p><br>
    <input type="checkbox" id="wshk_get_pol_hide" name="wshk_get_pol_hide" value='hide' <?php if(get_option('wshk_get_pol_hide')!=''){ echo ' checked="checked"'; }?> /><label for="wshk_get_pol_hide"><?php esc_html_e( 'Hide Privacy policy checkbox for logged in users', 'wshk' ); ?></label><br>
</div>
    
    <br><br><br>
    <p style="color:grey;border:1px solid grey; border-radius:13px;padding:15px;"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'Since version 1.9.3 this function allows to verify acceptance of the website Privacy Policy and can be consulted from the order page that the user has made. It is not necessary to carry out any additional configuration, once you have activated this function, each time the user places an order by checking the acceptance box of the Privacy Policy, a verification message will be seen on the order page.', 'wshk' ); ?></p>
    <br><br><br>
    </div>