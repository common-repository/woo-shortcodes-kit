<?php
/*
News Section
*/
?>
<!-- News tab -->

<div class="author wshk-tab" id="div-wshk-news">
        
    <!-- White box start -->
        
    <div class="wshkpagewhitebg">
       
        <!-- News info box -->
        
        <div class="wshkinfoboxes">
             
            <h2 class="wshkinfoboxtitle"><span class="dashicons dashicons-info"></span> <?php esc_html_e( 'You have a new message!', 'wshk' ); ?>
            </h2>
            
            <p class="wshkinfoboxdesc">
            
            <span><?php esc_html_e( 'This is your inbox where you will find notifications about important changes in WSHK.', 'wshk' ); ?>
            </span>
            <br />
            
            <span><?php esc_html_e( 'Here you will find info about news, updates, changes and more!.', 'wshk' ); ?>
            </span>
            
            <span style="color: #969696; font-size: 13px;font-style: italic;"> <?php esc_html_e( '(The content will be updated each version)', 'wshk' ); ?>
            </span>
            
            </p>
   
        </div>
        
        <!-- END News info box-->
    
        <br><br><br><br>
        
        
        <style>
            div.boxwshknotify {
                margin: 0px 80px;
                padding: 30px 30px !important;
                /*background: linear-gradient(45deg, #74689b, #74689bba) !important;*/
            }
            
            .newnotify {
                background-color:#faf8fc;
                padding:10px 20px 10px 20px;
                border:1px solid white;
                border-radius:6px;
                color:white;
                height:auto;
                opacity: 1;   
            }
            
            .oldnotify {
                background-color:#faf8fc;
                padding:10px 20px 10px 20px;
                border:1px solid white;
                border-radius:6px;
                color:white;
                height:auto;
                opacity: 0.5;   
            }
            
            .wshknewsboxtitle {
                margin-bottom:-10px;
                font-weight:700;
                font-family:'Roboto';
                color:#60329b;
                font-size:24px;
                line-height:1.1;
            }
    
            .wshknewsboxdesc {
                color:#60329b;
                font-size:15px;
                padding-left: 25px;
                font-weight:400;
                font-family:'Roboto';
                margin-top:20px;
            }
            
            .wshknewsboxbutton {
                margin-bottom:20px;
                padding:10px;
                border:1px solid #60329b;
                border-radius:3px;
                text-decoration:none;
                text-transform:uppercase;
                color:#60329b;    
                margin-left:25px;
            }
            
            .wshknewsboxbutton:hover {
                border:1px solid #60329b;
                color:#ffffff;
                background-color:#60329b;
            
            }
            
            .wshknewsboxbutton:focus {
                border:1px solid #60329b;
                color:#ffffff;
                background-color:#60329b;
            
            }
            
            
            .newsicons {
                font-family: dashicons;
                display: inline-block;
                line-height: 1;
                font-weight: 400;
                font-style: normal;
                speak: never;
                text-decoration: inherit;
                text-transform: none;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                width: 25px;
                height: 20px;
                font-size: 30px;
                vertical-align: top;
                text-align: center;
                transition: color .1s ease-in;
            }
            
            
            /*Responsive 1024 - 768 - 425*/
            
            
            @media screen and (max-width: 1024px) {
                
                
                /*Box title*/
                .wshknewsboxtitle {
                    font-size:20px;
                    margin-left:25px;
                }
                
                /*Box description*/
                .wshknewsboxdesc {
                    font-size:14px;
                }
                
                /*Icons*/
                .newsicons {
                    font-size:20px;
                }
                
            }
            
            
            @media screen and (max-width: 1024px) {
                
                /*Icons*/
                .newsicons {
                    font-size:20px;
                }
                
            }
            
            
            @media screen and (max-width: 425px) {
                
                /*Info box title*/
                .wshkinfoboxtitle {
                    font-size:20px;
                }
                
                /*Icons*/
                .newsicons {
                    font-size:20px;
                }
                
            }
            
            
        </style>
    
       
           
        <div class="boxwshknotify newnotify">
           
            <h2 class="wshknewsboxtitle"><span class="newsicons dashicons dashicons-bell"></span> <?php esc_html_e( 'WHAT DOES WSHK V.2.0.3 INCLUDE?', 'wshk' ); ?>
            </h2>
        
            <p class="wshknewsboxdesc">
                
                <?php esc_html_e( 'Version 2.0.3 includes some fixes and compatibility updates.', 'wshk' ); ?>
            
            <br>
            
                <?php esc_html_e( 'Also is ready to work with the new WordPress v.6.1.1 and WooCommerce v.7.1.0', 'wshk' ); ?>
            </p>
        
            <br>
        
            <a class="wshknewsboxbutton" href="https://disespubli.com/docs/wshk-v-2-0-3/" target="_blank"><?php esc_html_e( 'Read More', 'wshk' ); ?>
            </a>
        
            <br><br>
        
        </div>
        
        
        <br><br>
        
       
        <div class="boxwshknotify newnotify">
            
            <h2 class="wshknewsboxtitle"><span class="newsicons dashicons dashicons-bell"></span> <?php esc_html_e( 'NEW UPDATE FOR WSHK PRO - V.1.2.0 ', 'wshk' ); ?>
            </h2>
        
            <p class="wshknewsboxdesc">
                
                <?php esc_html_e( 'The version 1.2.0 includes some news and compatibility updates.', 'wshk' ); ?>
                
            <br>
            
                <?php esc_html_e( 'Also works correctly with WSHK v.2.0.3, WordPress v.6.1.1 and WooCommerce v.7.1.0', 'wshk' ); ?>    
            
            </p>
            
            <br>
            
            <a class="wshknewsboxbutton" href="https://disespubli.com/docs/wshk-pro-v-1-2-0/" target="_blank"><?php esc_html_e( 'Read More', 'wshk' ); ?>
            </a>
            
            <br><br>
        </div>
        
        
        <br><br>
       
       
        <div class="boxwshknotify newnotify">
            
            <h2 class="wshknewsboxtitle"><span class="newsicons dashicons dashicons-bell"></span> <?php esc_html_e( 'NEW UPDATE FOR EASY MY ACCOUNT BUILDER - V.1.1.0 ', 'wshk' ); ?>
            </h2>
        
            <p class="wshknewsboxdesc">
                
                <?php esc_html_e( 'The version 1.1.0 includes an update on the licensor.', 'wshk' ); ?>
                
            <br>
            
                <?php esc_html_e( 'Also works correctly with WSHK v.2.0.3, WordPress v.6.1.1 and WooCommerce v.7.1.0', 'wshk' ); ?>
                
            </p>
            
            <br>
            
            <a class="wshknewsboxbutton" href="https://disespubli.com/docs/emab-v-1-1-0/" target="_blank"><?php esc_html_e( 'Read More', 'wshk' ); ?>
            </a>
            
            <br><br>
        </div>
        
        
        <br><br>
        
        
        <div style="border-bottom:10px double #f7f7f7;margin:5px 60px;"></div>
       
       
       
       <br><br>
       
      
        </div>
    </div>