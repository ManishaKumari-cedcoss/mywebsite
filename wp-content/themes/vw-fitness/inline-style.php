<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_fitness_first_color = get_theme_mod('vw_fitness_first_color');

	$vw_fitness_custom_css = '';

	if($vw_fitness_first_color != false){
		$vw_fitness_custom_css .='.sidebar .custom-social-icons i:hover, .scrollup i, .slider .carousel-control-prev-icon i, .slider .carousel-control-next-icon i, .slider .more-btn a, .our-services .more-btn a, .copyright-wrapper, h1.page-title, h1.entry-title, .pagination .current, .pagination a:hover, .footersec .custom-social-icons i:hover, .footersec .tagcloud a:hover, .widget_calendar tbody a, .read-moresec a, .footersec input[type="submit"], .toggle-nav i, .sidebar a.custom_read_more, .footersec a.custom_read_more{';
			$vw_fitness_custom_css .='background-color: '.esc_html($vw_fitness_first_color).';';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_first_color != false){
		$vw_fitness_custom_css .='.slider .more-btn a:hover, .our-services .more-btn a:hover, .footersec h3, .footersec .custom-social-icons i, .header .custom-social-icons i:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .read-moresec a:hover, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .search-box i, .sidebar a.custom_read_more:hover, .footersec a.custom_read_more:hover{';
			$vw_fitness_custom_css .='color: '.esc_html($vw_fitness_first_color).';';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_first_color != false){
		$vw_fitness_custom_css .='.our-services .more-btn a, .our-services .more-btn a:hover, .read-moresec a, .read-moresec a:hover, .footersec input[type="submit"], .sidebar a.custom_read_more, .footersec a.custom_read_more, .sidebar a.custom_read_more:hover, .footersec a.custom_read_more:hover{';
			$vw_fitness_custom_css .='border-color: '.esc_html($vw_fitness_first_color).'!important;';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_first_color != false){
		$vw_fitness_custom_css .='.main-navigation ul ul{';
			$vw_fitness_custom_css .='border-top-color: '.esc_html($vw_fitness_first_color).';';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_first_color != false){
		$vw_fitness_custom_css .='.main-navigation ul ul{';
			$vw_fitness_custom_css .='border-bottom-color: '.esc_html($vw_fitness_first_color).';';
		$vw_fitness_custom_css .='}';
	}

	$vw_fitness_custom_css .='@media screen and (max-width:1000px) {';
		if($vw_fitness_first_color != false){
			$vw_fitness_custom_css .='.search-box a{
			background-color:'.esc_html($vw_fitness_first_color).';
			}';
		}
	$vw_fitness_custom_css .='}';

	/*---------------------------Second highlight color-------------------*/

	$vw_fitness_second_color = get_theme_mod('vw_fitness_second_color');

	if($vw_fitness_second_color != false){
		$vw_fitness_custom_css .='.service-main-box, .our-services .more-btn a:hover, .footersec, input[type="submit"], .header, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .woocommerce span.onsale, .sidebar input[type="submit"], .sidebar h3, input[type="submit"]:hover, .comments input[type="submit"].submit, .slider .more-btn a:hover, .pagination span, .pagination a, .sidebar .tagcloud a:hover, .header .top-header, .comments a.comment-reply-link, .read-moresec a:hover, .header-fixed, .sidebar a.custom_read_more:hover, .footersec a.custom_read_more:hover, .page-template-custom-home-page .header .header-fixed .top-header{';
			$vw_fitness_custom_css .='background-color: '.esc_html($vw_fitness_second_color).';';
		$vw_fitness_custom_css .='}';
		$vw_fitness_custom_css .='@media screen and (max-width:999px) {';
		$vw_fitness_custom_css .='.page-template-custom-home-page .header, .page-template-custom-home-page .header .top-header{';
			$vw_fitness_custom_css .='background-color: '.esc_html($vw_fitness_second_color).';';
		$vw_fitness_custom_css .='} }';
	}
	if($vw_fitness_second_color != false){
		$vw_fitness_custom_css .='.comments input[type="submit"].submit{';
			$vw_fitness_custom_css .='background-color: '.esc_html($vw_fitness_second_color).'!important;';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_second_color != false){
		$vw_fitness_custom_css .='.sidebar .custom-social-icons i, .slider .more-btn a, .our-services .more-btn a, .copyright p, .copyright a, .scrollup i, .middle-align h1, a, .metabox, .footersec .custom-social-icons i:hover, .footersec .tagcloud a, .pagination a:hover, .pagination .current, .woocommerce-message::before, .sidebar th, .sidebar td, .sidebar caption, .sidebar td#prev a, .read-moresec a, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$vw_fitness_custom_css .='color: '.esc_html($vw_fitness_second_color).';';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_second_color != false){
		$vw_fitness_custom_css .='.scrollup i{';
			$vw_fitness_custom_css .='color: '.esc_html($vw_fitness_second_color).'!important;';
		$vw_fitness_custom_css .='}';
	}
	if($vw_fitness_second_color != false){
		$vw_fitness_custom_css .='.sidebar .custom-social-icons,.sidebar aside, .woocommerce-message{';
			$vw_fitness_custom_css .='border-color: '.esc_html($vw_fitness_second_color).';';
		$vw_fitness_custom_css .='}';
	}
	

	/*---------------------------Width Layout -------------------*/

	$vw_fitness_theme_lay = get_theme_mod( 'vw_fitness_width_option','Full Width');
    if($vw_fitness_theme_lay == 'Boxed'){
		$vw_fitness_custom_css .='body{';
			$vw_fitness_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_fitness_custom_css .='}';
		$vw_fitness_custom_css .='.header .top-header{';
			$vw_fitness_custom_css .='left: 0; right: 0; position: relative; clear: both; width: 91%;';
		$vw_fitness_custom_css .='}';
		$vw_fitness_custom_css .='.offset-lg-5{';
			$vw_fitness_custom_css .='margin-left: 30.666667%;';
		$vw_fitness_custom_css .='}';
	}else if($vw_fitness_theme_lay == 'Wide Width'){
		$vw_fitness_custom_css .='body{';
			$vw_fitness_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_fitness_custom_css .='}';
	}else if($vw_fitness_theme_lay == 'Full Width'){
		$vw_fitness_custom_css .='body{';
			$vw_fitness_custom_css .='max-width: 100%;';
		$vw_fitness_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_fitness_theme_lay = get_theme_mod( 'vw_fitness_slider_opacity_color','0.5');
	if($vw_fitness_theme_lay == '0'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.1'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.1';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.2'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.2';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.3'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.3';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.4'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.4';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.5'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.5';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.6'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.6';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.7'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.7';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.8'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.8';
		$vw_fitness_custom_css .='}';
		}else if($vw_fitness_theme_lay == '0.9'){
		$vw_fitness_custom_css .='.slider img{';
			$vw_fitness_custom_css .='opacity:0.9';
		$vw_fitness_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_fitness_theme_lay = get_theme_mod( 'vw_fitness_slider_content_option','Center');
    if($vw_fitness_theme_lay == 'Left'){
		$vw_fitness_custom_css .='.slider .carousel-caption, .slider .inner_carousel{';
			$vw_fitness_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_fitness_custom_css .='}';
	}else if($vw_fitness_theme_lay == 'Center'){
		$vw_fitness_custom_css .='.slider .carousel-caption, .slider .inner_carousel{';
			$vw_fitness_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_fitness_custom_css .='}';
	}else if($vw_fitness_theme_lay == 'Right'){
		$vw_fitness_custom_css .='.slider .carousel-caption, .slider .inner_carousel{';
			$vw_fitness_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_fitness_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_fitness_slider = get_theme_mod('vw_fitness_slider_hide_show');
	if($vw_fitness_slider == false){
		$vw_fitness_custom_css .='.page-template-custom-home-page .header{';
			$vw_fitness_custom_css .='position: static; background-color: #113665;';
		$vw_fitness_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_fitness_theme_lay = get_theme_mod( 'vw_fitness_blog_layout_option','Default');
    if($vw_fitness_theme_lay == 'Default'){
		$vw_fitness_custom_css .='.services-box{';
			$vw_fitness_custom_css .='';
		$vw_fitness_custom_css .='}';
	}else if($vw_fitness_theme_lay == 'Center'){
		$vw_fitness_custom_css .='.services-box, .mainpostbox .page-box h2, .metabox, .page-box p{';
			$vw_fitness_custom_css .='text-align:center;';
		$vw_fitness_custom_css .='}';
	}else if($vw_fitness_theme_lay == 'Left'){
		$vw_fitness_custom_css .='.services-box, .mainpostbox .page-box h2, .metabox, .page-box p{';
			$vw_fitness_custom_css .='text-align:Left;';
		$vw_fitness_custom_css .='}';
		$vw_fitness_custom_css .='.post-info{';
			$vw_fitness_custom_css .='margin-top: 10px;';
		$vw_fitness_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_fitness_resp_topbar = get_theme_mod( 'vw_fitness_resp_topbar_hide_show',false);
    if($vw_fitness_resp_topbar == true){
    	$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.header .contact-info{';
			$vw_fitness_custom_css .='display:block;';
		$vw_fitness_custom_css .='} }';
	}else if($vw_fitness_resp_topbar == false){
		$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.header .contact-info{';
			$vw_fitness_custom_css .='display:none;';
		$vw_fitness_custom_css .='} }';
	}

	$vw_fitness_resp_stickyheader = get_theme_mod( 'vw_fitness_stickyheader_hide_show',false);
    if($vw_fitness_resp_stickyheader == true){
    	$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.header-fixed{';
			$vw_fitness_custom_css .='display:block;';
		$vw_fitness_custom_css .='} }';
	}else if($vw_fitness_resp_stickyheader == false){
		$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.header-fixed{';
			$vw_fitness_custom_css .='display:none;';
		$vw_fitness_custom_css .='} }';
	}

	$vw_fitness_resp_slider = get_theme_mod( 'vw_fitness_resp_slider_hide_show',false);
    if($vw_fitness_resp_slider == true){
    	$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.slider{';
			$vw_fitness_custom_css .='display:block;';
		$vw_fitness_custom_css .='} }';
	}else if($vw_fitness_resp_slider == false){
		$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.slider{';
			$vw_fitness_custom_css .='display:none;';
		$vw_fitness_custom_css .='} }';
	}

	$vw_fitness_resp_metabox = get_theme_mod( 'vw_fitness_metabox_hide_show',true);
    if($vw_fitness_resp_metabox == true){
    	$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.metabox{';
			$vw_fitness_custom_css .='display:block;';
		$vw_fitness_custom_css .='} }';
	}else if($vw_fitness_resp_metabox == false){
		$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.metabox{';
			$vw_fitness_custom_css .='display:none;';
		$vw_fitness_custom_css .='} }';
	}

	$vw_fitness_resp_sidebar = get_theme_mod( 'vw_fitness_sidebar_hide_show',true);
    if($vw_fitness_resp_sidebar == true){
    	$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.sidebar{';
			$vw_fitness_custom_css .='display:block;';
		$vw_fitness_custom_css .='} }';
	}else if($vw_fitness_resp_sidebar == false){
		$vw_fitness_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_custom_css .='.sidebar{';
			$vw_fitness_custom_css .='display:none;';
		$vw_fitness_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_fitness_topbar_padding_top_bottom = get_theme_mod('vw_fitness_topbar_padding_top_bottom');
	if($vw_fitness_topbar_padding_top_bottom != false){
		$vw_fitness_custom_css .='.header .contact-info{';
			$vw_fitness_custom_css .='padding-top: '.esc_html($vw_fitness_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_fitness_topbar_padding_top_bottom).';';
		$vw_fitness_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_fitness_search_font_size = get_theme_mod('vw_fitness_search_font_size');
	if($vw_fitness_search_font_size != false){
		$vw_fitness_custom_css .='.search-box i{';
			$vw_fitness_custom_css .='font-size: '.esc_html($vw_fitness_search_font_size).';';
		$vw_fitness_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_fitness_copyright_alingment = get_theme_mod('vw_fitness_copyright_alingment');
	if($vw_fitness_copyright_alingment != false){
		$vw_fitness_custom_css .='.copyright p{';
			$vw_fitness_custom_css .='text-align: '.esc_html($vw_fitness_copyright_alingment).';';
		$vw_fitness_custom_css .='}';
	}

	$vw_fitness_copyright_padding_top_bottom = get_theme_mod('vw_fitness_copyright_padding_top_bottom');
	if($vw_fitness_copyright_padding_top_bottom != false){
		$vw_fitness_custom_css .='.copyright-wrapper{';
			$vw_fitness_custom_css .='padding-top: '.esc_html($vw_fitness_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_fitness_copyright_padding_top_bottom).';';
		$vw_fitness_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_fitness_scroll_to_top_font_size = get_theme_mod('vw_fitness_scroll_to_top_font_size');
	if($vw_fitness_scroll_to_top_font_size != false){
		$vw_fitness_custom_css .='.scrollup i{';
			$vw_fitness_custom_css .='font-size: '.esc_html($vw_fitness_scroll_to_top_font_size).';';
		$vw_fitness_custom_css .='}';
	}

	$vw_fitness_scroll_to_top_padding_top_bottom = get_theme_mod('vw_fitness_scroll_to_top_padding_top_bottom');
	if($vw_fitness_scroll_to_top_padding_top_bottom != false ){
		$vw_fitness_custom_css .='.scrollup i{';
			$vw_fitness_custom_css .='padding-top: '.esc_html($vw_fitness_scroll_to_top_padding_top_bottom).'; padding-bottom: '.esc_html($vw_fitness_scroll_to_top_padding_top_bottom).';';
		$vw_fitness_custom_css .='}';
	}

	$vw_fitness_scroll_to_top_width = get_theme_mod('vw_fitness_scroll_to_top_width');
	if($vw_fitness_scroll_to_top_width != false){
		$vw_fitness_custom_css .='.scrollup i{';
			$vw_fitness_custom_css .='width: '.esc_html($vw_fitness_scroll_to_top_width).';';
		$vw_fitness_custom_css .='}';
	}

	$vw_fitness_scroll_to_top_height = get_theme_mod('vw_fitness_scroll_to_top_height');
	if($vw_fitness_scroll_to_top_height != false){
		$vw_fitness_custom_css .='.scrollup i{';
			$vw_fitness_custom_css .='height: '.esc_html($vw_fitness_scroll_to_top_height).';';
		$vw_fitness_custom_css .='}';
	}

	$vw_fitness_scroll_to_top_border_radius = get_theme_mod('vw_fitness_scroll_to_top_border_radius');
	if($vw_fitness_scroll_to_top_border_radius != false){
		$vw_fitness_custom_css .='.scrollup i{';
			$vw_fitness_custom_css .='border-radius: '.esc_html($vw_fitness_scroll_to_top_border_radius).'px;';
		$vw_fitness_custom_css .='}';
	}
