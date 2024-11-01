<?php
/*
Display the user total spent according to the orders status
*/
?>
<!-- Header -->
        <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_enabletotalspender" name="wshk_enabletotalspender" value='8821' <?php if(get_option('wshk_enabletotalspender')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enabletotalspender></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'Display the user total spent according to the order status', 'wshk' ); ?> <!--<span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'MOVED', 'wshk' ); ?></span>--></big><br /><small> <?php esc_html_e( 'Expand for see the functions and shortcodes', 'wshk' ); ?></small></p></th></tr>
    </table>
</div>
<!-- content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/display-the-user-total-spent-according-to-the-order-status/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br><br>
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcodes', 'wshk' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'wshk' ); ?></small></p>
<br>

<p>
    <?php esc_html_e( 'To understand how they work, these shortcodes show the total spent by the user in your store. This will allow your users to know how much money they have spent. To use them, you only need to copy the shortcode and paste it into the page my account or any other private page, since the user must be logged to see the result of the shortcode. You can add your own currency too after or before the shortcode.', 'wshk' ); ?></p><br /><br /> 


<table width="100%">
    <tr><th class="wshkhidefuncol" style="padding-left:20px;"><?php esc_html_e( 'FUNCTIONS', 'wshk' ); ?></th>
    <th style="padding-left:20px;"><?php esc_html_e( 'SHORTCODES', 'wshk' ); ?></th></tr>
    <tr>
        <td class="wshkhidefuncol" style="width:40%;">
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total Balance', 'wshk' ); ?></p>
            <!--<p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total Spended', 'wshk' ); ?> <small><?php esc_html_e( '(looking for completed and in process orders)', 'wshk' ); ?></small></p>-->
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total pending', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total on hold', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total in process', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total completed', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total cancelled', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total refunded', 'wshk' ); ?></p>
            <p style="border-bottom:1px solid grey;padding-left:20px;"><?php esc_html_e( 'Total failed', 'wshk' ); ?></p>
        </td>
        
        <td class="forsmalldropdowns" style="width:40%;">
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-balance]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-pending]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-on-hold]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-processing]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-completed]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-cancelled]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-refunded]</p>
            <p style="border-bottom:1px solid grey;padding-left:20px;">[woo-total-orders-failed]</p>
        </td>
    </tr>
</table>

    <br />
    <br />
    </div>