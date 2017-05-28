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
       <p>Copyright &copy; 2010-2017 <a href="http://gpthemes.com/" target="_blank" style="font-weight:bold;">GP Themes</a>. All rights reserved. Logo by <a href="http://logo.designo360.com/" target="_blank">designo360.</a>
       </p>
        <?php	
        }
        ?>
        </p>
    </div>
    <div id="footermenu" class="col-md-6">
    <?php if(has_nav_menu( 'social-links' )): ?>
    	
		<?php
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
		?>
        	
     <?php else: ?>
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
    <?php endif; ?>
    </div>
</div>