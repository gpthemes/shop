	</div>
</div>
	
	<!-- === END CONTENT === -->
	<!-- === BEGIN FOOTER === -->
	<div id="base" class="footer-wrap margin-top-30">
		<div class="container padding-vert-30">
			<div class="row">
            
				<!-- Footer Widgets -->
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div class="col-md-12 margin-bottom-20">
                	
                        <?php dynamic_sidebar( 'footer-1' ); ?>
					<div class="clearfix"></div>
				</div>
   				<?php else : ?>
                <div class="col-md-3 margin-bottom-20">
	                <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
                	<h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
                    </div>
				</div>
                <div class="col-md-3 margin-bottom-20">
	                <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
                	<h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
                    </div>
				</div>
                <div class="col-md-3 margin-bottom-20">
	                <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
                	<h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
                    </div>
				</div>
                
                <div class="col-md-3 margin-bottom-20">
	                <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
                	<h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
                    </div>
				</div>
                    <!-- Time to add some widgets! -->
                <?php endif; ?>

                <!-- Footer Widgets -->
			</div>
		</div>
		<!-- Footer Menu -->
		<div id="footer">
			<div class="container">
				<div class="row">
                	<?php $theme_mods_extreme= get_option('theme_mods_extreme', true ); ?>
					<div id="copyright" class="col-md-6">
						
						<?php
						if (!empty($theme_mods_extreme) && isset($theme_mods_extreme['copy_right_text']) && $theme_mods_extreme['copy_right_text']!= ''){ ?>
                        <p>
						<?php echo $theme_mods_extreme['copy_right_text']; ?>
                        </p>
                        <?php
						}else{
						?>
                        	<p>Copyright &copy; 2010-2017 <a href="http://gpthemes.com/" target="_blank" style="font-weight:bold;">GP Themes</a>. All rights reserved. Logo by <a href="http://logo.designo360.com/" target="_blank">designo360.</a></p>
                        <?php	
						}
						?>
                        </p>
					</div>
					<div id="footermenu" class="col-md-6">
                    	<?php 
						if(has_nav_menu( 'social-links' )){
							wp_nav_menu( array( 
								'theme_location'  => 'social-links',
								'menu'            => 'Social Links',
								'container'       => false,
								'container_class' => '',
								'menu_class'      => 'menu',
								'echo'            => true,
								'fallback_cb'     => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s list-unstyled list-inline pull-right">%3$s</ul>'
							) );	
						}else{ ?>
						<ul class="list-unstyled list-inline pull-right">
							<li>
								<a href="https://web.facebook.com/guavapattern/" target="_blank" >Facebook</a>
							</li>
							<li>
								<a href="http://twitter.com/phpflex/" target="_blank" >Twitter</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UC7KWwwlHucU73TuP65O2IBw" target="_blank" >Youtube</a>
							</li>
							<li>
								<a href="http://www.gpthemes.com/contact/" target="_blank" >Contact</a>
							</li>
						</ul>
						<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Footer Menu -->
</div>
</div>
</body>
</html>