<?php
/*
Display the user shipping data separately
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_enableshippinguserdata" name="wshk_enableshippinguserdata" value='820' <?php if(get_option('wshk_enableshippinguserdata')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enableshippinguserdata></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'Display the user shipping data separately', 'wshk' ); ?> <!--<span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'UPDATED', 'wshk' ); ?></span>--></big><br /><small> <?php esc_html_e( 'Expand for see the functions and shortcodes', 'wshk' ); ?></small></p></th></tr>
    </table>
</div>
<!-- content -->
<div class="panel">
<br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/display-the-user-shipping-data-separately/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br><br>
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcodes', 'wshk' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'wshk' ); ?></small></p>
<br>
<p>
    <?php esc_html_e( 'To understand how they work, these shortcodes show the shipping user data. To use them, you only need to copy the shortcode and paste it into the page my account or some other private page, since the user must have logged in to see the results of the shortcode. You can add text before or after the shortcode.', 'wshk' ); ?></p><br /><br /> 


<table width="100%">
    <tr><th class="wshkhidefuncol" style="padding-left:20px;"><?php esc_html_e( 'FUNCTIONS', 'wshk' ); ?></th>
    <th style="padding-left:20px;"><?php esc_html_e( 'SHORTCODES', 'wshk' ); ?></th></tr>
    <tr>
        <td class="wshkhidefuncol" style="width:40%;">
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user ID', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user name', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user lastname', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user address', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user address 2', 'wshk' ); ?> <!--<small style="color:white;background-color:#aadb4a;border-radius:6px;padding:0px 3px;"><?php esc_html_e( 'NEW', 'wshk' ); ?></small>--></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user post code', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user city', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user state code', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user state name', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user country code', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user country name', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user phone', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user email', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Shipping user company', 'wshk' ); ?> </p>
        </td>
        
        <td class="forsmalldropdowns" style="width:40%;">
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-id]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-name]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-lastname]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-address]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-address-two]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-postcode]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-city]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-statecode]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-statename]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-countrycode]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-countryname]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-phone]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-email]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-shipping-company]</p>
        </td>
    </tr>
</table>

    <br />
    <br />
    </div>