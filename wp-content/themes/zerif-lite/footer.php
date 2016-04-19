<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<footer id="footer" role="contentinfo">

<?php 
	if(is_active_sidebar( 'zerif-sidebar-footer' ) || is_active_sidebar( 'zerif-sidebar-footer-2' ) || is_active_sidebar( 'zerif-sidebar-footer-3' )):
		echo '<div class="footer-widget-wrap"><div class="container">';
		if(is_active_sidebar( 'zerif-sidebar-footer' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'zerif-sidebar-footer' );
			echo '</div>';
		endif;
		if(is_active_sidebar( 'zerif-sidebar-footer-2' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'zerif-sidebar-footer-2' );
			echo '</div>';
		endif;
		if(is_active_sidebar( 'zerif-sidebar-footer-3' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'zerif-sidebar-footer-3' );
			echo '</div>';
		endif;
		echo '</div></div>';
	endif;
?>

<div class="container">

	<?php
		$footer_sections = 0;
		$zerif_address = get_theme_mod('zerif_address',__('© Bynd Serviços de Tecnologia Ltda. 2015','zerif-lite'));
		$zerif_address_icon = get_theme_mod('zerif_address_icon',get_template_directory_uri().'/images/map25-redish.png');
		
		$zerif_email = get_theme_mod('zerif_email','<a href="mailto:contato@bynd.com.br">contato@bynd.com.br</a>');
		$zerif_email_icon = get_theme_mod('zerif_email_icon',get_template_directory_uri().'/images/envelope4-green.png');
		
		$zerif_phone = get_theme_mod('zerif_phone','<a href="tel:11 2393-8512">(11) 2393-8512</a>');
		$zerif_phone_icon = get_theme_mod('zerif_phone_icon',get_template_directory_uri().'/images/telephone65-blue.png');

		$zerif_socials_facebook = get_theme_mod('zerif_socials_facebook','#');
		$zerif_socials_twitter = get_theme_mod('zerif_socials_twitter','#');
		$zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin','#');
		// $zerif_socials_behance = get_theme_mod('zerif_socials_behance','#');
		// $zerif_socials_dribbble = get_theme_mod('zerif_socials_dribbble','#');
		// $zerif_socials_instagram = get_theme_mod('zerif_socials_instagram');
		
		$zerif_accessibility = get_theme_mod('zerif_accessibility');
		$zerif_copyright = get_theme_mod('zerif_copyright');

		if(!empty($zerif_address) || !empty($zerif_address_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_email) || !empty($zerif_email_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_phone) || !empty($zerif_phone_icon)):
			$footer_sections++;
		endif;
		if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || 
		!empty($zerif_copyright) || !empty($zerif_socials_instagram) ):
			$footer_sections++;
		endif;
		
		if( $footer_sections == 1 ):
			$footer_class = 'col-md-12';
		elseif( $footer_sections == 2 ):
			$footer_class = 'col-md-6';
		elseif( $footer_sections == 3 ):
			$footer_class = 'col-md-4';
		elseif( $footer_sections == 4 ):
			$footer_class = 'col-md-4';
		else:
			$footer_class = 'col-md-4';
		endif;
		
		global $wp_customize;
		
		
		if( !empty($footer_class) ) {			
			echo '<div class="row text-footer"><h3>Vamos de carona!</h3></div>';

			// DIV 1
			echo '<div class="'.$footer_class.' company-details">';
			if( !empty($zerif_copyright) ):
						echo '<p id="zerif-copyright">'.wp_kses_post($zerif_copyright).'</p>';
					elseif( isset( $wp_customize ) ):
						echo '<p id="zerif-copyright" class="zerif_hidden_if_not_customizer"></p>';
					endif;

					if( !empty($zerif_address) ) {
						echo '<div class="zerif-footer-address">';
							echo wp_kses_post( $zerif_address );
						echo '</div>';
					} else if( isset( $wp_customize ) ) {
						echo '<div class="zerif-footer-address zerif_hidden_if_not_customizer"></div>';
					}						
										
			echo '</div>';

			/* DIV 2 */
			// if( !empty($zerif_email_icon) || !empty($zerif_email) ) {
				echo '<div class="'.$footer_class.' company-details">';					

					if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || 
					!empty($zerif_copyright) || !empty($zerif_socials_instagram) ):
					
								if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_email_icon)):
									echo '<ul class="social">';
									
									/* facebook */
									if( !empty($zerif_socials_facebook) ):
										echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_facebook).'"><img class="icon-top" src="http://res.cloudinary.com/bynd/image/upload/v1461086601/facebook-4-48_sqfpia.png" alt="facebook" /></a></li>';
									endif;
									/* twitter */
									if( !empty($zerif_socials_twitter) ):
										echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_twitter).'"><img class="icon-top" src="http://res.cloudinary.com/bynd/image/upload/v1461086601/twitter-4-48_no2zk7.png" alt="twitter" /></a></li>';
									endif;
									/* linkedin */
									if( !empty($zerif_socials_linkedin) ):
										echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_linkedin).'"><img class="icon-top" src="http://res.cloudinary.com/bynd/image/upload/v1461086601/linkedin-4-48_hdeaai.png" alt="linkedin" /></a></li>';
									endif;
									/* email */
									if( !empty($zerif_email_icon) ):					
										echo '<li><img class="icon-top" src="http://res.cloudinary.com/bynd/image/upload/v1461086601/email-14-48_fejlsk.png" alt="email" /></li>';					
									endif;

									echo '</ul>';
								endif;												
					endif;
					
				echo '</div>';
			// }
			
			/* DIV 3 */
			if( !empty($zerif_phone_icon) || !empty($zerif_phone) ) {
				echo '<div class="'.$footer_class.' company-details side">';
					
					if( !empty($zerif_phone) ) {
						echo '<div class="zerif-footer-phone">';
							echo '<i class="fa fa-phone fa-fw icons" aria-hidden="true"></i>'.wp_kses_post( $zerif_phone );
						echo '</div>';	
					} else if( isset( $wp_customize ) ) {
						echo '<div class="zerif-footer-phone zerif_hidden_if_not_customizer"></div>';
					}

					if( !empty($zerif_email) ) {
						echo '<div class="zerif-footer-email">';	
							echo '<i class="fa fa-envelope fa-fw icons" aria-hidden="true"></i>'.wp_kses_post( $zerif_email );
						echo '</div>';
					} else if( isset( $wp_customize ) ) {
						echo '<div class="zerif-footer-email zerif_hidden_if_not_customizer"></div>';
					}		
				echo '</div>';
			}
		}
		
		// open link in a new tab when checkbox "accessibility" is not ticked
		$attribut_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? ' target="_blank"' : '' );
		

	?>

</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->


	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->


<?php wp_footer(); ?>

</body>

</html>