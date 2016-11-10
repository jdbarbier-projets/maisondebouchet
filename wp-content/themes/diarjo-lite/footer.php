<div id="back-to-top"> <i class="fa fa-chevron-up"></i> </div>

<footer id="footer">
	
    <div class="container">

		<?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
        
			<section class="row widgets">
                    
				<?php dynamic_sidebar('bottom-sidebar-area') ?>
                    
            </section>
                
        <?php endif; ?>

        <div class="row" >
             
			<div class="col-md-12" >

                <div class="copyright">

                    <p>
                        
						<?php 
						
							if (diarjolite_setting('diarjolite_copyright_text')):
							
								echo stripslashes(diarjolite_setting('diarjolite_copyright_text')) . " | ";
								
							else: 
							
								echo __('Copyright','diarjolite') . ' ' . get_bloginfo("name") . ' ' . date("Y");
                       
							endif; 
						
						?> 
                        
                    
                    </p>

				</div>
                
                <?php do_action('diarjolite_socials'); ?>

                <div class="clear"></div>
                
			</div>
                
		</div>
        
	</div>
    
</footer>

<?php wp_footer() ?>  
 
</body>

</html>
