<?php
/*
Product purchases by current logged in users counter
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  
         <th><p><input type="checkbox" class="testininputclass" id="wshk_enablepropurchtimes" name="wshk_enablepropurchtimes" value='200720190' <?php if(get_option('wshk_enablepropurchtimes')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enablepropurchtimes></label><br /></th> <th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"><big><?php esc_html_e( 'Product purchases by current logged in user counter', 'wshk' ); ?> <!--<span style="background-color: #aadb4a; color: white;border:1px solid #aadb4a;border-radius:13px;padding:5px;text-transform: uppercase;font-size:10px;"><?php esc_html_e( 'NEW', 'wshk' ); ?></span>--></big><br /><small><?php esc_html_e( 'Just need activate the function and copy the shortcode on any page or post!', 'wshk' ); ?></small></p></th>
         </table>
</div>
<!-- content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/product-purchases-by-current-logged-in-user-counter/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'wshk' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'wshk' ); ?></a></td></tr></table>
    <br><br>
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcode', 'wshk' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'wshk' ); ?></small></p>
<br><br><br>
    <div onmousedown="return false;" onselectstart="return false;" class="wshkshtboxes">
<table style="margin-top:-20px;">
          <colgroup>
    <col span="3">
   
  </colgroup>
         <tr>
        <td class="shtboxone" style="width: 33%; padding-left: 30px;"><p><big><strong><span class="dashicons dashicons-code-standards"></span> <?php esc_html_e( 'Shortcode:', 'wshk' ); ?></strong><br><input class="testininputclass" onmousedown="return false;" onselectstart="return false;" style="color:white;margin-top:10px;outline:0;-moz-outline: 0;border:none;" type="text" value="[woo_product_purchases id='123']" id="woopropurchbyuser" readonly></big><br /><br /></p></td>
        
        <td class="shtboxtwo" style="width: 23%; padding-left: 30px;"><p><big>

<div class="tooltip" style="width:120px;">
<button class="wshkshtboxesbtn" style="width:150px;" type="button" onclick="myFunctionpropurchbyuser()" onmouseout="outFuncpropurchbyuser()">
  <span class="tooltiptext" id="myTooltippropurchbyuser"><?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?></span>
  <?php esc_html_e( 'Copy shortcode', 'wshk' ); ?>
  </button>
</div>



<script>

document.getElementById("woopropurchbyuser").addEventListener("mousedown", function(event){
  event.preventDefault();
});

function myFunctionpropurchbyuser() {
  var copyText = document.getElementById("woopropurchbyuser");
  copyText.select();
  document.execCommand("copy");
  
  var tooltippropurchbyuser = document.getElementById("myTooltippropurchbyuser");
  tooltippropurchbyuser.innerHTML = "<?php esc_html_e( 'Copied:', 'wshk' ); ?> " + copyText.value;
}

function outFuncpropurchbyuser() {
  var tooltippropurchbyuser = document.getElementById("myTooltippropurchbyuser");
  tooltippropurchbyuser.innerHTML = "<?php esc_html_e( 'Copy to Clipboard', 'wshk' ); ?>";
}
</script></big><br /><br /> </p></td>
        
        <td class="shtboxthree" style="width: 46%; padding-left: 30px;"><p><span class="dashicons dashicons-warning"></span><big style="font-size:14px !important;"><strong><?php esc_html_e( 'Copy the shortcode and paste in your custom post or page', 'wshk' ); ?></strong></big><br /><br /></p></td></tr>
        
        <br />
        <br />
        </table>
</div>
<br><br>
        <p style="padding-left:30px;"><?php esc_html_e( 'You can use the shortcode where you want only need  to add the product ID', 'wshk' ); ?><strong> [woo_product_purchases id="<?php esc_html_e( 'Here write the product ID number', 'wshk' ); ?>"]</strong></p>
        
        <br><br>
        </div>