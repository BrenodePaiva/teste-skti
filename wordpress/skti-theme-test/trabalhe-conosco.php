<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Template name: curriculo
get_header('new');
?>

<?php if (have_posts()) { while (have_posts()) { the_post();?>

    <section id="curriculo" class="secao">
        <div class="contact-content" style="margin-top: 60px;">
            <div class="contact-form">
                <h2>Trabalhe Conosco</h2>
                <form id="form">
                    <input type="hidden" name="access_key" value="c9cf2954-68ba-4c12-a1b9-cd8cadf1451b"/>
                    <input type="hidden" name="replyto" value="sktisolucoes@gmail.com"/>
                    <input type="hidden" name="from_name" value="Skti Site Currículo"/>
                    <input type="hidden" name="subject" value="Um currículo foi enviado"/>
                    <!-- <input type="hidden" name="replyto" value="outsystems.suporte.teste@gmail.com"/> -->

                    <div class="input-box">
                        <div class="input-field field">
                            <input type="text" name="nome" placeholder="Nome" class="item" id="name"/>
                            <div class="error-txt">Nome não pode ficar em branco</div>
                        </div>
                    </div>

                    <div class="input-box">
                        <div class="input-field field">
                            <input type="email" name="email" placeholder="E-mail" class="item" id="email"/>
                            <div class="error-txt">E-mail não pode ficar em branco</div>
                        </div>
                    </div>

                    <div class="input-box">
                        <div class="input-field field">
                            <input type="text" name="telefone" placeholder="Telefone" class="item" id="phone"/>
                            <div class="error-txt">Telefone não pode ficar em branco</div>
                        </div>
                    </div>

                    
                    <div class="textarea-field field">
                        <textarea cols="30" rows="10" name="curriculo" placeholder="Currículo" class="item" id="message"></textarea>
                        <div class="error-txt">Currículo não pode ficar em branco</div>
                    </div> 

                    <button type="submit" id="button">Enviar</button>
                </form>
            </div>

            <div class="contact-address" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/background-address.png');">
                <h4>Nosso Endereço</h4>
                <p>Filial: R. do Ouvidor, 108 - 3° andar - Centro, Rio de Janeiro - RJ, 20040-030, Brasil</p>

                <p>Matriz: R. Dr. Celestino, 122 - Sala 611 - Centro, Niteroi - RJ</p>

                <div class="address-social">
                    <a href="https://www.facebook.com/people/SKTI/100089831995908/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/skti.solucoes.em.ti/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/sktiti/"><i class="bi bi-linkedin"></i></a>
                </div>
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/logo-address.png" width="300" height="167" alt="logo SKTI">
            </div>
        </div>
        <div id="result"></div>
    </section>

    
<?php  }; };  ?>

<?php get_footer(); ?>