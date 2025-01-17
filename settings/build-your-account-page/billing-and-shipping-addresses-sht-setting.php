<?php
/*
Billing and Shipping addresses shortcode
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  
         <th><p><input type="checkbox" class="testininputclass" id="wshk_enablemyaddressessht" name="wshk_enablemyaddressessht" value='2001' <?php if(get_option('wshk_enablemyaddressessht')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enablemyaddressessht></label><br /></th> <th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"><big> <?php esc_html_e( 'Billing and shipping addresses shortcode', 'wshk' ); ?></big><br /><small><?php esc_html_e( 'Just need enable the function and copy the shortcode in your custom account page!', 'wshk' ); ?></small></p></th>
         </table>
</div>
<!-- content -->
<div class="panel">
   <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/billing-and-shipping-addresses-shortcode/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br /><br />
   <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcode', 'wshk' ); ?></b><br><small><?php esc_html_e( 'Use it only in your custom account page', 'wshk' ); ?></small></p>
<br><br><br>
    <div onmousedown="return false;" onselectstart="return false;" class="wshkshtboxes">
<table style="margin-top:-20px;">
          <colgroup>
    <col span="3">
   
  </colgroup>
         <tr>
        <td class="shtboxone" style="width: 23%; padding-left: 30px;"><p><big><strong><span class="dashicons dashicons-code-standards"></span> <?php esc_html_e( 'Shortcode:', 'wshk' ); ?></strong><br><input class="testininputclass" onmousedown="return false;" onselectstart="return false;" style="color:white;margin-top:10px;outline:0;-moz-outline: 0;border:none;" type="text" value="[woo_myaddress]" id="woomyaddresses" readonly></big><br /><br /></p></td>
        
        <td class="shtboxtwo" style="width: 23%; padding-left: 30px;"><p><big>

<div class="tooltip">
<button class="wshkshtboxesbtn" type="button" onclick="myFunctionaddresses()" onmouseout="outFuncaddresses()">
  <span class="tooltiptext" id="myTooltipaddresses"><?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?></span>
  <?php esc_html_e( 'Copy shortcode', 'wshk' ); ?>
  </button>
</div>



<script>

document.getElementById("woomyaddresses").addEventListener("mousedown", function(event){
  event.preventDefault();
});

function myFunctionaddresses() {
  var copyText = document.getElementById("woomyaddresses");
  copyText.select();
  document.execCommand("copy");
  
  var tooltipaddresses = document.getElementById("myTooltipaddresses");
  tooltipaddresses.innerHTML = "<?php esc_html_e( 'Copied:', 'wshk' ); ?> " + copyText.value;
}

function outFuncaddresses() {
  var tooltipaddresses = document.getElementById("myTooltipaddresses");
  tooltipaddresses.innerHTML = "<?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?>";
}
</script></big><br /><br /> </p></td>
        
        <td class="shtboxthree" style="width: 53%; padding-left: 30px;"><p><span class="dashicons dashicons-warning"></span><big style="font-size:14px !important;"><strong><?php esc_html_e( 'Copy the shortcode and paste in your custom account page', 'wshk' ); ?></strong></big><br /><br /></p></td></tr>
        
        <br />
        <br />
        </table>
</div>
<br><br><br>
<?php 
//Integrate
if ( in_array( 'custom-redirections-for-wshk/custom-redirections-for-whsk.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        
        //Checking
        require_once( WP_CONTENT_DIR .'/plugins/custom-redirections-for-wshk/CustomBlocksandRedirectionsBase.php' ); 
        $licenseCode=get_option("CustomBlocksandRedirections_lic_Key","");
        $licenseEmail=get_option( "CustomBlocksandRedirections_lic_email","");
        CustomBlocksandRedirectionsBase::addOnDelete(function(){
           delete_option("CustomBlocksandRedirections_lic_Key");
        });
    }
    
    if ( in_array( 'custom-redirections-for-wshk/custom-redirections-for-whsk.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && CustomBlocksandRedirectionsBase::CheckWPPlugin($licenseCode,$licenseEmail,$error,$responseObj,__FILE__) ) {?>

    <p><b>2.- <?php esc_html_e( 'Link the function with his account container', 'wshk' ); ?></b> <span style="background-color:#a46497;padding:5px;color:white;border-radius:6px;font-weight:bold;font-size:10px;line-height:2;">WSHK PRO</span><br><small style="margin-top:5px;"><?php esc_html_e( 'This shortcode have an advanced action (edit form address) and needs to be linked to a container.', 'wshk' ); ?><br><?php esc_html_e( 'To get it, you need go to the WSHK PRO section called WSHK PRO SETTINGS and look for the function called Custom redirections for advanced actions of WooCommerce my account.', 'wshk' ); ?></small>
    </p>
    <?php
    } else {
    ?>
    <p><b>2.- <?php esc_html_e( 'Link the function with his account container', 'wshk' ); ?></b> <span style="background-color:#a46497;padding:5px;color:white;border-radius:6px;font-weight:bold;font-size:10px;line-height:2;">WSHK PRO</span><br><small style="margin-top:5px;"><?php esc_html_e( 'This shortcode have an advanced action (edit form address) and needs to be linked to a container.', 'wshk' ); ?><br><?php esc_html_e( 'To get it, you need the addon', 'wshk' ); ?> <a style="color:#a46497;text-decoration:underline;" href="https://disespubli.com/producto/custom-blocks-and-redirections-addon-for-wshk/" target="_blank"><?php esc_html_e( 'WSHK PRO', 'wshk' ); ?></a> <?php esc_html_e( 'and activate your', 'wshk' ); ?> <a style="color:#a46497;text-decoration:underline;" href="/wp-admin/admin.php?page=custom-redirections-for-wshk" target="_blank"><?php esc_html_e( 'License key', 'wshk' ); ?></a>.</small>
    </p>	
    <?php
    }
    ?>
    <!--<p><b>2.- <?php esc_html_e( 'Link the function with his account container', 'wshk' ); ?></b><br><small><?php esc_html_e( 'This shortcode have an advanced action (edit form address) and needs to be linked to a container.', 'wshk' ); ?><br><?php esc_html_e( 'To get it, you need the addon', 'wshk' ); ?> <a style="color:#a46497;text-decoration:underline;" href="https://disespubli.com/producto/easy-my-account-builder-addon-for-wshk/" target="_blank"><?php esc_html_e( 'Easy My Account Builder', 'wshk' ); ?></a> <?php esc_html_e( 'or the premium addon', 'wshk' ); ?> <a style="color:#a46497;text-decoration:underline;" href="https://disespubli.com/producto/custom-blocks-and-redirections-addon-for-wshk/" target="_blank"><?php esc_html_e( 'WSHK PRO', 'wshk' ); ?></a></small></p>-->
    <br /><br />
        </div>