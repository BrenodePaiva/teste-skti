<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/logo-top.ico">
	<?php wp_head(); ?>
</head>
<body>
    <header class="nav-list-new" style="background-color: rgba(255, 255, 255, 0.6);backdrop-filter: blur(6px);">
        <div class="content-right">
            <a href="/#home" class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/logo.png" width="300" height="86" alt="logo image"></a>
        </div>
        <nav class="">
            <i class="bi bi-x-square" style="font-size: 30px; color: #000;"></i>               
            <a href="/#home" class="">Home</a>
            <a href="/#about" class="">Sobre nós</a>
            <a href="/#service" class="">Serviços</a>
            <a href="/#partener" class="">Parcerias</a>
			<a href="/#certification" class="">certificações</a>
            <a href="/#contact" class="">Contato</a> 
            
            <div class="content-left-mobile">
                <i class="bi bi-telephone-fill" id="tel-icon"></i>
                <div>
                    <p class="tel">Fale Conosco</p>
                    <p class="number">2131703966</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/people/SKTI/100089831995908/"><i class="bi bi-facebook" id="social"></i></a>
                        <a href="https://www.instagram.com/skti.solucoes.em.ti/"><i class="bi bi-instagram" id="social"></i></a>
                        <a href="https://www.linkedin.com/company/sktiti/"><i class="bi bi-linkedin" id="social"></i></a>
                    </div>
                </div>
            </div>
        </nav>


            <i class="bi bi-list to" style="font-size: 37px; color: #000;"></i>

        
        <div class="content-left">
            <div class="line"></div>
            <i class="bi bi-telephone-fill" id="tel-icon"></i>
            <div>
                <p class="tel">Fale Conosco</p>
                <p class="number">2131703966</p>
                <a href="https://www.facebook.com/people/SKTI/100089831995908/"><i class="bi bi-facebook" id="social"></i></a>
                <a href="https://www.instagram.com/skti.solucoes.em.ti/"><i class="bi bi-instagram" id="social"></i></a>
                <a href="https://www.linkedin.com/company/sktiti/"><i class="bi bi-linkedin" id="social"></i></a>
            </div>
        </div>
    </header>
