
        <div class="footer dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo $custom_site1;?>">
                            <img src="<?php echo $fileurl;?>" alt="logo-white" style="max-width: 200px; height: 100px;"/>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="info-box col-12 col-md-4">
                        <p> Phone: <?php echo $get_userdata_api->phone;?><br/></p>
                        <p> Email:  <a href="mailto:<?php echo $get_userdata_api->$email;?>" class="email_footer_ea"><?php echo $get_userdata_api->email;?></a></p>
                    </div>
                    <div class="col-12 col-md-8">
                        <p class="small footer_ea_p"><?php echo $get_userdata_api->disclaimer;?></p>
                    </div>
                </div>
                <div class="row related-edited-articles-sharing">
                    <div class="link-box col-12 socials">
                        <?php //echo do_shortcode("[addtoany url='". get_the_permalink( get_the_ID() ) ."']"); ?>
                        <?php if ( !empty( $get_userdata_api->fb_link ) ) { ?>
                            <a class="social-link share-button" href="<?php echo $get_userdata_api->fb_link;?>" target="_blank">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        <?php } ?>
                        <?php if ( !empty( $get_userdata_api->tw_link ) ) { ?>
                            <a class="social-link share-button" href="<?php echo $get_userdata_api->tw_link;?>" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        <?php } ?>
                        <?php if ( !empty( $get_userdata_api->lkdn_link ) ) { ?>
                            <a class="social-link share-button" href="<?php echo $get_userdata_api->lkdn_link;?>" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="footer-bottom col-12 px-0 d-flex flex-row justify-content-start align-items-center">
                        <div class="col-12 col-md-6">
                            <p class="copyright"><?php echo __( "Copyright © 2022 Seven Group. All rights reserved" );?>.</p>
                        </div>
                        <div class="col-12 col-md-6 d-none">
                            <ul class="w-100 d-flex flex-row justify-content-end align-items-center">
                                <li><a href="#"><?php echo __( "PRIVACY POLICY", "seven" );?></a></li>
                                <li><a href="#"><?php echo __( "TERMS OF USE", "seven" );?></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>
