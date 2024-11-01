<?php
/*
Display WooCommerce notices
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  
         <th><p><input type="checkbox" class="testininputclass" id="wshk_displaywoonotices" name="wshk_displaywoonotices" value='18701' <?php if(get_option('wshk_displaywoonotices')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_displaywoonotices></label><br /></th> <th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"><big><?php esc_html_e( 'Display WooCommerce notices', 'wshk' ); ?> <!--<span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'NEW', 'wshk' ); ?></span>--></big><br /><small><?php esc_html_e( 'Activate the function and click here to configure it', 'wshk' ); ?></small></p></th>
         </table>
</div>
<!-- content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/display-woocommerce-notices/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br /><br />
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcode', 'wshk' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'wshk' ); ?></small></p>
<br><br><br>
    <div onmousedown="return false;" onselectstart="return false;" class="wshkshtboxes">
<table style="margin-top:-20px;">
          <colgroup>
    <col span="3">
   
  </colgroup>
         <tr>
        <td class="shtboxone" style="width: 25%; padding-left: 30px;"><p><big><strong><span class="dashicons dashicons-code-standards"></span> <?php esc_html_e( 'Shortcode:', 'wshk' ); ?></strong><br><input class="testininputclass" onmousedown="return false;" onselectstart="return false;" style="color:white;margin-top:10px;outline:0;-moz-outline: 0;border:none;" type="text" value="[wshk_display_notices]" id="woomydispnotices" readonly></big><br /><br /></p></td>
        
        <td class="shtboxtwo" style="width: 23%; padding-left: 30px;"><p><big>

<div class="tooltip" style="width:120px;">
<button class="wshkshtboxesbtn" style="width:150px;" type="button" onclick="myFunctiondispnotices()" onmouseout="outFuncdispnotices()">
  <span class="tooltiptext" id="myTooltipdispnotice"><?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?></span>
  <?php esc_html_e( 'Copy shortcode', 'wshk' ); ?>
  </button>
</div>



<script>

document.getElementById("woomydispnotices").addEventListener("mousedown", function(event){
  event.preventDefault();
});

function myFunctiondispnotices() {
  var copyText = document.getElementById("woomydispnotices");
  copyText.select();
  document.execCommand("copy");
  
  var tooltipdispnotices = document.getElementById("myTooltipdispnotice");
  tooltipdispnotices.innerHTML = "<?php esc_html_e( 'Copied:', 'wshk' ); ?> " + copyText.value;
}

function outFuncdispnotices() {
  var tooltipdispnotices = document.getElementById("myTooltipdispnotice");
  tooltipdispnotices.innerHTML = "<?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?>";
}
</script></big><br /><br /> </p></td>
        
        <td class="shtboxthree" style="width: 46%; padding-left: 30px;"><p><span class="dashicons dashicons-warning"></span><big style="font-size:14px !important;"><strong><?php esc_html_e( 'Copy the shortcode and paste in your custom page', 'wshk' ); ?></strong></big><br /><br /></p></td></tr>
        
        <br />
        <br />
        </table>
</div>
<br><br>
    <p><b>2.- <?php esc_html_e( 'Important recommendation', 'wshk' ); ?></b><br><small><?php esc_html_e( 'If you are using Woo Subscriptions, you can do its notices compatibles with ', 'wshk' ); ?><a href="https://disespubli.com/producto/custom-blocks-and-redirections-addon-for-wshk/" target="_blank" style="color:#a46497;">WSHK PRO</a></small></p>
    <br /><br />
        </div>