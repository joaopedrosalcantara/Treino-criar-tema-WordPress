<?php 




function wpcurso_customizer($wp_customize){

	// Copyright

	$wp_customize->add_section(

		'sec_copyright', array(
			'title' => __('Copyright', 'wpcurso'),
			'description' => __('Copyright Section', 'wpcurso')
		) 
	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __('Copyright X - All rights reserved', 'wpcurso'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __('Copyright', 'wpcurso'),
			'description' => __('Choose whether to show the Services section or not', 'wpcurso'),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);


	//slider


	$wp_customize->add_section(

		'sec_slider', array(
			'title' => __('Slider', 'wpcurso'),
			'description' => __('Slider Section', 'wpcurso')
		) 
	);

// design
	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'wpcurso_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __('Choose your design type here', 'wpcurso'),
			'description' => __('Choose your design type', 'wpcurso'),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __('Design Type 1', 'wpcurso'),
				'2' => __('Design Type 2', 'wpcurso'),
				'3' => __('Design Type 3', 'wpcurso'),
				'4' => __('Design Type 4', 'wpcurso')
			)
		)
	);

	// Limit

		$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __('Number of posts to display', 'wpcurso'),
			'description' => __('Choose the number of  post to be displayed', 'wpcurso'),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);

}



add_action('customize_register', 'wpcurso_customizer');


    //select sanitization function
        function wpcurso_sanitize_select( $input, $setting ){
          
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
  
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                              
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
              
        }
