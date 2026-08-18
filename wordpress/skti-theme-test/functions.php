<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'SKTI_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme setup.
 */
function skti_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 86,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'skti_theme_setup' );

/**
 * Enqueue styles and scripts.
 */
function skti_enqueue_scripts() {
	$version = SKTI_THEME_VERSION;

	$is_front = is_front_page() || is_page_template( 'pagina-inicio.php' );

	// Styles.
	wp_enqueue_style( 'skti-fonts', 'https://fonts.googleapis.com/css2?family=Questrial&family=Roboto:wght@400;700&display=swap', array(), null );
	wp_enqueue_style( 'skti-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), null );

	// Swiper CSS before style.css so theme overrides (.swiper-button-next::after, etc.) win.
	if ( $is_front ) {
		wp_enqueue_style( 'skti-swiper', get_theme_file_uri( 'swiper-bundle.min.css' ), array(), $version );
	}

	wp_enqueue_style( 'skti-style', get_stylesheet_uri(), array(), $version );

	// Homepage only.
	if ( $is_front ) {
		wp_enqueue_script( 'skti-scripts', get_theme_file_uri( 'js/scripts.js' ), array(), $version, true );
		wp_enqueue_script( 'skti-swiper', get_theme_file_uri( 'js/swiper-bundle.min.js' ), array(), $version, true );
		wp_enqueue_script( 'skti-swiper-init', get_theme_file_uri( 'js/swiper-init.js' ), array( 'skti-swiper' ), $version, true );
		wp_enqueue_script( 'skti-animation', get_theme_file_uri( 'js/animation.js' ), array(), $version, true );
	}

	// Forms (homepage + "trabalhe conosco").
	if ( is_front_page() || is_page_template( 'pagina-inicio.php' ) || is_page_template( 'trabalhe-conosco.php' ) ) {
		wp_enqueue_script( 'skti-sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), null, true );
		wp_enqueue_script( 'skti-forms', get_theme_file_uri( 'js/forms.js' ), array( 'skti-sweetalert2' ), $version, true );
	}

	// Pages using header-new.php.
	if ( is_404() || is_page_template( array( 'politica-de-privacidade.php', 'trabalhe-conosco.php' ) ) ) {
		wp_enqueue_script( 'skti-secondary-header', get_theme_file_uri( 'js/secondary-header.js' ), array(), $version, true );
	}

	// Load all theme scripts with defer.
	$defer_handles = array( 'skti-scripts', 'skti-swiper', 'skti-swiper-init', 'skti-animation', 'skti-sweetalert2', 'skti-forms', 'skti-secondary-header' );
	foreach ( $defer_handles as $handle ) {
		wp_script_add_data( $handle, 'defer', true );
	}
}
add_action( 'wp_enqueue_scripts', 'skti_enqueue_scripts' );

/**
 * Add preconnect hints for third-party origins.
 */
function skti_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = 'https://fonts.googleapis.com';
		$urls[] = 'https://fonts.gstatic.com';
		$urls[] = 'https://cdn.jsdelivr.net';
		$urls[] = 'https://api.web3forms.com';
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'skti_resource_hints', 10, 2 );

/**
 * Per-template meta description.
 */
function skti_get_meta_description() {
	if ( is_front_page() || is_page_template( 'pagina-inicio.php' ) ) {
		return 'Soluções, produtos e serviços em TI baseados nas melhores práticas ITIL. Backup, segurança, monitoramento, infraestrutura, rede, LGPD, VoIP e help desk para sua empresa.';
	}
	if ( is_page_template( 'politica-de-privacidade.php' ) ) {
		return 'Conheça a política de privacidade e segurança da SKTI Soluções em TI e como tratamos os dados pessoais dos visitantes do site.';
	}
	if ( is_page_template( 'trabalhe-conosco.php' ) ) {
		return 'Envie seu currículo para a SKTI Soluções em TI e faça parte do nosso time.';
	}
	return 'SKTI Soluções em TI — Soluções, produtos e serviços em tecnologia da informação desde 2005.';
}

/**
 * Output SEO meta tags (description, canonical, Open Graph, Twitter Cards).
 */
function skti_seo_head() {
	$description = skti_get_meta_description();
	$title       = wp_get_document_title();
	$site_name   = get_bloginfo( 'name' );
	$url         = wp_get_canonical_url();

	if ( ! $url ) {
		$url = ( is_front_page() || is_home() ) ? home_url( '/' ) : get_permalink();
	}

	$image = get_template_directory_uri() . '/assets/logo.png';
	$robots = ( is_404() || is_search() ) ? 'noindex, follow' : 'index, follow';
	?>
	<meta name="description" content="<?php echo esc_attr( $description ); ?>">
	<meta name="robots" content="<?php echo esc_attr( $robots ); ?>">
	<link rel="canonical" href="<?php echo esc_url( $url ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
	<meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
	<?php
}
add_action( 'wp_head', 'skti_seo_head', 1 );

/**
 * Output schema.org JSON-LD markup (LocalBusiness).
 */
function skti_schema_json_ld() {
	$logo  = get_template_directory_uri() . '/assets/logo.png';
	$schema = array(
		'@context'      => 'https://schema.org',
		'@type'         => 'LocalBusiness',
		'name'          => 'SKTI Soluções em TI',
		'url'           => home_url( '/' ),
		'logo'          => $logo,
		'image'         => $logo,
		'telephone'     => '+55 21 3170-3966',
		'foundingDate'  => '2005',
		'address'       => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'R. do Ouvidor, 108 - 3º andar',
			'addressLocality' => 'Rio de Janeiro',
			'addressRegion'   => 'RJ',
			'postalCode'      => '20040-030',
			'addressCountry'  => 'BR',
		),
		'sameAs'        => array(
			'https://www.facebook.com/people/SKTI/100089831995908/',
			'https://www.instagram.com/skti.solucoes.em.ti/',
			'https://www.linkedin.com/company/sktiti/',
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
}
add_action( 'wp_head', 'skti_schema_json_ld' );

/**
 * Make sure the native XML sitemap is enabled.
 */
add_filter( 'wp_sitemaps_enabled', '__return_true' );

?>