<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Template name: inicio
get_header();
?>

<?php if (have_posts()) { while (have_posts()) { the_post();?>


	<main>
		<section id="home" class="secao">
			<div class="video-bg">
			<video autoplay muted loop id="myVideo" preload="metadata">
				<source src="<?php echo get_template_directory_uri();?>/assets/banners/banner-home.mp4" type="video/mp4"/>
			</video>
				
				<div class="certification-box">
					<div>
<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 27001 2022.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/informatio-cert.png" title="information security management system" alt="Certificação ISO 27001 - sistema de gestão de segurança da informação">
					</a>
				</div>

				<div>
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 37301 2021.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/risk-manager.png" title="risk management" alt="Certificação ISO 37301 - gestão de riscos">
					</a>
				</div>

				<div>
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 27701 2019.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/privacy-cert.png" title="privacy information management system" alt="Certificação ISO 27701 - sistema de gestão de privacidade">
					</a>
				</div>
				
				<div>
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 37001 2016.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/ant-cert.jpg" title="anti-bribery management system" alt="Certificação ISO 37001 - sistema de gestão antissuborno">
					</a>
				</div>
				</div>
			</div>

			
			<div class="mySwiper swiper">
				<div class="swiper-wrapper">
					<div class="article-slide swiper-slide">
						<article class="slide-text">
							<h1>Entregamos para nossos clientes, <span>tranquilidade</span></h1>
							<p>Conheça <span>soluções</span> para sua 
								<span>empresa suportar</span> e se <span>proteger</span> 
								de diferentes <span>ameaças</span></p>
						</article>
					</div>

					<div class="article-slide swiper-slide">
						<article class="slide-text">
							<h2>Backup</h2>
							<p>Não deixe suas informações ao acaso, faça <span>backup</span> e 
								<span>mantenha-se no controle!</span></p>
						</article>
					</div>

					<div class="article-slide swiper-slide">
						<article class="slide-text">
							<h2>ALL IN ONE</h2>
							<p><span>Unifique</span> e <span>Simplifique</span>, somos o seu parceiro tecnológico 
								<span>para soluções completas!</span></p>
						</article>
					</div>
					<div class="article-slide swiper-slide">
						<article class="slide-text">
							<h2>Proteja seus Dados com a Acronis</h2>
							<p>Somos parceiros da Acronis, <span>líder global em soluções de 
								proteção cibernética e backup</span></p>
						</article>
					</div>
				</div>        
			</div>
		</section>

        <section id="about" class="secao">
            <h2>Trabalhamos para o sucesso do seu negócio</h2>
            <div class="hidden-up">
                <p>A SKTI Soluções em TI atua no mercado desde 2005, oferecendo Soluções, 
                    Produtos e Serviços baseados nas melhores práticas ITIL para governança 
                    em TI.</p>

                    <p>Com sede no Rio de Janeiro, possui profissionais qualificados e infraestrutura 
                    própria para atender as demandas de mercado, utilizando tecnologia de ponta em 
                    nossas soluções. Tão importante quanto a qualidade e a expansão dos serviços, o
                    modo de servir torna-se cada vez mais um fator crítico de sucesso. Os métodos de 
                    trabalho envolvendo processos e procedimentos adotados pela SKTI são 
                    comprovadamente mais eficientes e econômicos.</p>

                    <p>As inovações tecnológicas do segmento em que atua fazem com que a SKTI 
                    tenha uma preocupação constante com o treinamento de suas equipes e com 
                    pesquisas nas mais diversas áreas da TIC.</p>
                    
                    <p>E justamente para poder atender a essas constantes evoluções tecnológicas 
                    e demandas dos nossos clientes é que a SKTI conta em seu corpo técnico 
                    com profissionais capacitados e treinados com as principais certificações, 
                    de acordo com as exigências do mercado.</p>
            </div>

            <div class="about-content">
                <div class="about-card hidden-slider">
                    <h3>MISSÃO</h3>
                    <p>Agregar valor aos negócios de nossos clientes, oferecendo 
                        produtos e soluções integradas de TI.</p>
                </div>

                <div class="about-card hidden-slider">
                    <h3>VISÃO</h3>
                    <p>Ser referência no mercado de tecnologia da informação em 
                        âmbito nacional, conquistando o respeito e 
                        a confiança de seus clientes.</p>
                </div>

                <div class="about-card hidden-slider">
                    <h3>ÉTICA</h3>
                    <p>Promovendo sempre a comunicação clara dos valores da empresa e zelando pela prática dos mesmos e pela preservação da imagem.</p>
                </div>

                <div class="about-card hidden-slider">
                    <h3>COMPETÊNCIA</h3>
                    <p>Envolvimento pleno dos colaboradores, pesquisa e desenvolvimento permanente de novas tecnologias.</p>
                </div>

                <div class="about-card hidden-slider">
                    <h3>VALOR AGREGADO</h3>
                    <p>Atuação na busca de produtos, serviços e práticas que proporcionem a integração da organização de tecnologia da informação.</p>
                </div>

                <div class="about-card hidden-slider">
                    <h3>SUSTENTABILIDADE</h3>
                    <p>Respeito ao meio ambiente e à legislação ambiental, assim como a racionalização na utilização dos recursos naturais.</p>
                </div>
            </div>
        </section>

        <section id="service">
            <h2>Serviços</h2>
            <div class="service-content">
                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-backup.png" width="100" height="100" alt="Serviço de backup de dados" loading="lazy" decoding="async">
                    <h3>Backup de Dados: Proteção Essencial</h3>
                    <p>Proteja seus dados valiosos com backups regulares.</p>
                    
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-security.png" width="100" height="100" alt="Serviço de segurança de rede" loading="lazy" decoding="async">
                    <h3>Segurança de Rede: Proteção Inabalável</h3>
                    <p>Mantenha sua rede protegida contra ameaças cibernéticas.</p>
                    
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-monitoring.png" width="100" height="100" alt="Serviço de monitoramento de ativos de rede" loading="lazy" decoding="async">
                    <h3>Monitoramento de Ativos de Rede: Tenha Controle Total</h3>
                    <p>Mantenha seus ativos de rede sempre sob controle.</p>
                    
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-infra.png" width="100" height="100" alt="Serviço de infraestrutura de rede" loading="lazy" decoding="async">
                    <h3>Infraestrutura de Rede: Base sólida para o Sucesso</h3>
                    <p>Construa uma base sólida para sua empresa com uma infraestrutura de rede confiável.</p>
                    
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-cable.png" width="100" height="100" alt="Serviço de cabeamento estruturado" loading="lazy" decoding="async">
                    <h3>Cabeamento Estruturado: Conectividade Eficiente</h3>
                    <p>Garanta uma rede organizada e eficiente com o cabeamento estruturado.</p>
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-lgpd.png" width="100" height="100" alt="Serviço de conformidade LGPD" loading="lazy" decoding="async">
                    <h3>LGPD: Privacidade e Proteção de Dados</h3>
                    <p>Esteja em conformidade com a Lei Geral de Proteção de Dados (LGPD).</p>
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-network.png" width="100" height="100" alt="Serviço de WiFi para grandes empresas" loading="lazy" decoding="async">
                    <h3>WiFi para Grandes Empresas: Conexão Robusta em Ambientes Industriais</h3>
                    <p>Obtenha conectividade estável e abrangente em grandes empresas, fábricas e galpões com WiFi.</p>
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-voip.png" width="100" height="100" alt="Serviço de comunicação VoIP" loading="lazy" decoding="async">
                    <h3>VoIP: Comunicação Eficiente por Meio da Internet</h3>
                    <p>Aproveite os benefícios do VoIP (Voice over Internet Protocol).</p>
                </div>

                <div class="service-card hidden-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/servicesimg/service-helpdesk.png" width="100" height="100" alt="Serviço de help desk 24 horas" loading="lazy" decoding="async">
                    <h3>Help Desk</h3>
                    <p>Precisa de suporte imediato? Com uma equipe de especialistas altamente qualificados, oferecemos assistência técnica personalizada 24 horas por dia.</p>
                </div>
            </div>
        </section>

        <section id="partener">
            <h2>PARCEIRAS</h2>
            <div id="carrossel">
                <!-- <h1>Serviços</h1> -->
                <div class="card-container swiper">
                    <div class="card-content hidden-up">
                        <div class="swiper-wrapper">
                                <article class="card-article swiper-slide">
                                    <div class="card-imagem">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/carouselimg/carrossel-microsoft.png" width="300" height="191" alt="Parceiro Microsoft" class="card-img" loading="lazy" decoding="async">
                                        <!-- <div class="card-shadow"></div> -->
                                    </div>
                                    
                                    <div class="card-data">
                                        <p class="card-description">
                                        A Microsoft é pioneira em inovação de computação e tecnologia. 
                                        É a porta de entrada para um mundo de novas possibilidades e 
                                        ferramentas que podem simplificar a vida de empresas tanto 
                                        grandes como pequenas.
                                    </p>
                                </div>
                            </article>

                            <article class="card-article swiper-slide">
                                <div class="card-imagem">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/carouselimg/carrossel-cisco.png" width="300" height="191" alt="Parceiro Cisco" class="card-img" loading="lazy" decoding="async">
                                    <!-- <div class="card-shadow"></div> -->
                                </div>

                                <div class="card-data">
                                    <p class="card-description">
                                        A Cisco é líder no seguimento em inovação e tecnologia há quase 30 
                                        anos. Impulsionada pela visão de um mundo conectado, vem trabalhando 
                                        para ajudar clientes a aproveitarem o poder da tecnologia para criar 
                                        sucesso de negócios duradouro.
                                    </p>
                                </div>
                            </article>

                            <article class="card-article swiper-slide">
                                <div class="card-imagem">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/carouselimg/carrossel-blockbit.png" width="300" height="191" alt="Parceiro Blockbit" class="card-img" loading="lazy" decoding="async">
                                    <!-- <div class="card-shadow"></div> -->
                                </div>

                                <div class="card-data">
                                    <p class="card-description">
                                        A Blockbit é uma empresa brasileira especializada em segurança 
                                        cibernética e soluções de gerenciamento de rede. Ela oferece 
                                        uma ampla gama de produtos e serviços, incluindo firewalls, 
                                        soluções de prevenção e detecção de intrusões, proteção avançada 
                                        contra ameaças, segurança de endpoints, gerenciamento de acesso 
                                        e muito mais.
                                    </p>
                                </div>
                            </article>

                            <article class="card-article swiper-slide">
                                <div class="card-imagem">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/carouselimg/carrossel-fortinet.png" width="300" height="191" alt="Parceiro Fortinet" class="card-img" loading="lazy" decoding="async">
                                    <!-- <div class="card-shadow"></div> -->
                                </div>

                                <div class="card-data">
                                    <p class="card-description">
                                        A Fortinet é uma empresa conceituada em networking e cibersegurança 
                                        global, dedicada à inovação e à adoção contínua de tecnologia de ponta 
                                        para fornecer proteção confiável e soluções de segurança abrangentes 
                                        para os seus clientes.
                                    </p>
                                </div>
                            </article>

                            <article class="card-article swiper-slide">
                                <div class="card-imagem">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/carouselimg/carrossel-veeam.png" width="300" height="191" alt="Parceiro Veeam" class="card-img" loading="lazy" decoding="async">
                                    <div class="card-shadow"></div>
                                </div>

                                <div class="card-data">
                                    <p class="card-description">
                                        Com uma abordagem inovadora e foco na simplicidade e eficiência, a 
                                        Veeam Backup está revolucionando a maneira como as empresas protegem 
                                        e gerenciam seus dados críticos.
                                    </p>
                                </div>
                            </article>

                            <article class="card-article swiper-slide">
                                <div class="card-imagem">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/carouselimg/carrossel-vmware.png" width="300" height="191" alt="Parceiro VMware" class="card-img" loading="lazy" decoding="async">
                                    <!-- <div class="card-shadow"></div> -->
                                </div>

                                <div class="card-data">
                                    <p class="card-description">
                                        Uma empresa especializada em virtualização e soluções de software. 
                                        Com uma expertise comprovada e uma ampla gama de soluções inovadoras, 
                                        a VMware está transformando a maneira como as empresas utilizam a 
                                        tecnologia para impulsionar seus negócios.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-button-prev">&#10094</div>
                    <div class="swiper-button-next">&#10095</div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
		
		<section id="certification">
			<h2>Certificações</h2>
			<div class="certification-content">
				<div class="box-cert hidden-slider">
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 27001 2022.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/informatio-cert.png" title="information security management system" alt="Certificação ISO 27001 - sistema de gestão de segurança da informação" loading="lazy" decoding="async">
					</a>
					<h3>ISO 27001:2022</h3>
					<p>Information Security Management System</p>
				</div>

				<div class="box-cert hidden-slider">
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 37301 2021.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/risk-manager.png" title="risk management" alt="Certificação ISO 37301 - gestão de riscos" loading="lazy" decoding="async">
					</a>
					<h3>ISO 37301:2021</h3>
					<p>Risk Management</p>
				</div>
				
				<div class="box-cert hidden-slider">
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 27701 2019.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/privacy-cert.png" title="privacy information management system" alt="Certificação ISO 27701 - sistema de gestão de privacidade" loading="lazy" decoding="async">
					</a>
					<h3>ISO 27701:2019</h3>
					<p>Privacy Information Management System</p>
				</div>

				<div class="box-cert hidden-slider">
					<a href="<?php echo get_template_directory_uri();?>/assets/certificates/Certificação ISO 37001 2016.pdf" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri();?>/assets/certificates/ant-cert.jpg" title="anti-bribery management system" alt="Certificação ISO 37001 - sistema de gestão antissuborno" loading="lazy" decoding="async">
					</a>
					<h3>ISO 37001:2016</h3>
					<p>Anti-Bribery Management System </p>
				</div>
			</div>
		</section>

        <section id="contact" class="secao">
            <div class="contact-content hidden" style="margin-bottom: 90px;">
                <div class="contact-form">
                    <h2>Fale Conosco</h2>
                    <form id="form">
                        <div class="input-box">
                            <div class="input-field field">
                                <input type="text" name="firstName" placeholder="Nome" class="item" id="name"/>
                                <div class="error-txt">Nome não pode ficar em branco</div>
                            </div>
                        </div>

                        <div class="input-box">
                            <div class="input-field field">
                                <input type="text" name="lastName" placeholder="Sobrenome" class="item" id="lastname"/>
                                <div class="error-txt">Sobrenome não pode ficar em branco</div>
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
                                <input type="text" name="subject" placeholder="Assunto" class="item" id="subject"/>
                                <div class="error-txt">Assunto não pode ficar em branco</div>
                            </div>
                        </div>
                        
                        <div class="textarea-field field">
                            <textarea cols="30" rows="10" name="message" placeholder="Mensagem" class="item" id="message"></textarea>
                            <div class="error-txt">Message não pode ficar em branco</div>
                        </div> 

                        <button type="submit" id="button">Enviar</button>
                    </form>
                </div>

                <div class="contact-address" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/background-address.png');">
                    <h4>Nosso Endereço</h4>
                    <p>Filial: R. do Ouvidor, 108 - 3° andar - Centro, Rio de Janeiro - RJ, 20040-030, Brasil</p>

                    <p>Matriz: R. Dr. Celestino, 122 - Sala 611 - Centro, Niteroi - RJ</p>

                    <div class="address-social">
						<a href="https://www.facebook.com/people/SKTI/100089831995908/"><i class="bi bi-facebook hidden-slider"></i></a>
                        <a href="https://www.instagram.com/skti.solucoes.em.ti/"><i class="bi bi-instagram hidden-slider"></i></a>
                        <a href="https://www.linkedin.com/company/sktiti/"><i class="bi bi-linkedin hidden-slider"></i></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/logo-address.png" width="300" height="167" alt="logo SKTI">
                </div>
            </div>
            <div id="result"></div>
        </section>
    </main>   

<?php  }; };  ?>

<?php get_footer(); ?>
        
        