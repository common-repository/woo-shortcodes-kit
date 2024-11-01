<?php
/*
User name and surname shortcode
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  
         <th><p><input type="checkbox" class="testininputclass" id="wshk_enablethenamesurnsht" name="wshk_enablethenamesurnsht" value='2006' <?php if(get_option('wshk_enablethenamesurnsht')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enablethenamesurnsht></label><br /></th> <th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"><big> <?php esc_html_e( 'User name and surname shortcode', 'woo-shortcodes-kit' ); ?></big><br /><small><?php esc_html_e( 'Just need enable the function and copy the shortcode in your custom account page!', 'woo-shortcodes-kit' ); ?></small></p></th>
         </table>
</div>
<!-- content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/user-name-and-surname-shortcode/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'woo-shortcodes-kit' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'woo-shortcodes-kit' ); ?></a></td></tr></table>
    <br /><br />
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcode', 'woo-shortcodes-kit' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'woo-shortcodes-kit' ); ?></small></p>
<br><br><br>
    <div onmousedown="return false;" onselectstart="return false;" style="max-height:130px;background-color:#a46497;color:white;border:1px solid #a46497;border-radius:13px;">
<table style="margin-top:-20px;">
          <colgroup>
    <col span="3">
   
  </colgroup>
         <tr>
        <td class="shtboxone" style="width: 23%; padding-left: 30px;"><p><big><strong><span class="dashicons dashicons-code-standards"></span> <?php esc_html_e( 'Shortcode:', 'woo-shortcodes-kit' ); ?></strong><br><input class="testininputclass" onmousedown="return false;" onselectstart="return false;" style="color:white;margin-top:10px;outline:0;-moz-outline: 0;border:none;" type="text" value="[woo_display_nsurname]" id="woomynsurname" readonly></big><br /><br /></p></td>
        
        <td class="shtboxtwo" style="width: 23%; padding-left: 30px;"><p><big>

<div class="tooltip" style="width:120px;">
<button style="padding:10px;background-color:#a46497;color:white;border:1px solid white;border-radius:13px;width:150px;" type="button" onclick="myFunctionnsurname()" onmouseout="outFuncnsurname()">
  <span class="tooltiptext" id="myTooltipnsurname"><?php esc_html_e( 'Copy to Clipboard', 'woo-shortcodes-kit' ); ?></span>
  <?php esc_html_e( 'Copy shortcode', 'woo-shortcodes-kit' ); ?>
  </button>
</div>



<script>

document.getElementById("woomynsurname").addEventListener("mousedown", function(event){
  event.preventDefault();
});

function myFunctionnsurname() {
  var copyText = document.getElementById("woomynsurname");
  copyText.select();
  document.execCommand("copy");
  
  var tooltipnsurname = document.getElementById("myTooltipnsurname");
  tooltipnsurname.innerHTML = "<?php esc_html_e( 'Copied:', 'woo-shortcodes-kit' ); ?> " + copyText.value;
}

function outFuncnsurname() {
  var tooltipnsurname = document.getElementById("myTooltipnsurname");
  tooltipnsurname.innerHTML = "<?php esc_html_e( 'Copy to Clipboard', 'woo-shortcodes-kit' ); ?>";
}
</script></big><br /><br /> </p></td>
        
        <td class="shtboxthree" style="width: 46%; padding-left: 30px;"><p><span class="dashicons dashicons-warning"></span><big style="font-size:14px !important;"><strong><?php esc_html_e( 'Copy the shortcode and paste in your custom account page', 'woo-shortcodes-kit' ); ?></strong></big><br /><br /></p></td></tr>
        
        <br />
        <br />
        </table>
</div>
<br><br>
        </div>