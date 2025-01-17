<?php
/*
Display the user billing data separately
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_enablebillinguserdata" name="wshk_enablebillinguserdata" value='819' <?php if(get_option('wshk_enablebillinguserdata')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enablebillinguserdata></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'Display the user billing data separately', 'woo-shortcodes-kit' ); ?> <span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'UPDATED', 'woo-shortcodes-kit' ); ?></span></big><br /><small> <?php esc_html_e( 'Expand for see the functions and shortcodes', 'woo-shortcodes-kit' ); ?></small></p></th></tr>
    </table>
</div>
<!-- content -->
<div class="panel">
<br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/display-the-user-billing-data-separately/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'woo-shortcodes-kit' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'woo-shortcodes-kit' ); ?></a></td></tr></table>
    <br><br>
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcodes', 'woo-shortcodes-kit' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'woo-shortcodes-kit' ); ?></small></p>
<br>
<p>
    <?php esc_html_e( 'To understand how they work, these shortcodes show the billing user data. To use them, you only need to copy the shortcode and paste it into the page my account or some other private page, since the user must have logged in to see the results of the shortcode. You can add text before or after the shortcode.', 'woo-shortcodes-kit' ); ?></p><br /><br /> 


<table width="100%">
    <tr><th class="wshkhidefuncol" style="padding-left:20px;"><?php esc_html_e( 'FUNCTIONS', 'woo-shortcodes-kit' ); ?></th>
    <th style="padding-left:20px;"><?php esc_html_e( 'SHORTCODES', 'woo-shortcodes-kit' ); ?></th></tr>
    <tr>
        <td class="wshkhidefuncol" style="width:40%;">
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user ID', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user name', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user lastname', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user address', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user address 2', 'woo-shortcodes-kit' ); ?> <small style="color:white;background-color:#aadb4a;border-radius:6px;padding:0px 3px;"><?php esc_html_e( 'NEW', 'woo-shortcodes-kit' ); ?></small></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user post code', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user city', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user state code', 'woo-shortcodes-kit' ); ?> <small style="color:white;background-color:#aadb4a;border-radius:6px;padding:0px 3px;"><?php esc_html_e( 'NEW', 'woo-shortcodes-kit' ); ?></small></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user state name', 'woo-shortcodes-kit' ); ?> <small style="color:white;background-color:#aadb4a;border-radius:6px;padding:0px 3px;"><?php esc_html_e( 'NEW', 'woo-shortcodes-kit' ); ?></small></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user country code', 'woo-shortcodes-kit' ); ?> <small style="color:white;background-color:#aadb4a;border-radius:6px;padding:0px 3px;"><?php esc_html_e( 'NEW', 'woo-shortcodes-kit' ); ?></small></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user country name', 'woo-shortcodes-kit' ); ?> <small style="color:white;background-color:#aadb4a;border-radius:6px;padding:0px 3px;"><?php esc_html_e( 'NEW', 'woo-shortcodes-kit' ); ?></small></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user phone', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user email', 'woo-shortcodes-kit' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Billing user company', 'woo-shortcodes-kit' ); ?> </p>
        </td>
        
        <td class="forsmalldropdowns" style="width:40%;">
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-id]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-name]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-lastname]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-address]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-address-two]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-postcode]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-city]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-statecode]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-statename]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-countrycode]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-countryname]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-phone]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-email]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-billing-company]</p>
        </td>
    </tr>
</table>

    <br />
    <br />
    </div>