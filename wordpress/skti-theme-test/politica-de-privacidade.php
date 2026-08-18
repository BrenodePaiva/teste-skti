<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// Template name: privacidade
get_header('new');
?>

<?php if (have_posts()) { while (have_posts()) { the_post();?>

<style>
.politic-box li::before {
    content: url('<?php echo get_template_directory_uri();?>/assets/record-circle-fill.svg');
    margin-right: 3px;
}
</style>

    <section class="politic-page">
        <div class="politic-warp">
            <div class="politic-box">
                <h1>Política de privacidade</h1>
                <p>A SKTI não divulga a terceiros informações pessoais fornecidas pelos visitantes do seu site. Informações pessoais são todos os dados fornecidos pelo visitante através do site, tais como: nome, endereço, telefone, fax e e-mail, entre outros.
                Essas informações serão utilizadas para preenchimento de vagas e oportunidades profissionais ou qualquer outra comunicação (incluindo via e-mail), somente com autorização deste visitante. No caso de consentimento expresso do usuário, a SKTI utilizará unicamente para:</p>

                <ul>
                    <li>Enviar informações impressas, jornais, folhetos ou outras publicações via correio;</li>
                    <li>Enviar via e-mail notícias ou informações;</li>
                    <li>Comunicar recrutamento ou contratação de pessoal;</li>
                    <li>Realizar pesquisas e ações de e-marketing.</li>
                </ul>


                <p>A SKTI fará uso de informações estatísticas – tipo de browser, idade, naturalidade e nacionalidade, sexo, profissão – para melhorar o desempenho do site e para ampliar o relacionamento com o cliente e com nossos produtos. Estas informações poderão ser obtidas através de pesquisas on-line. Da mesma forma que as informações de caráter pessoal, os dados estatísticos não serão divulgados a terceiros. Apenas os clientes cadastrados no site recebem newsletters.</p>
            </div>

            <div class="politic-box">
                <h2>Coleta das suas informações pessoais</h2>
                <p>No site da SKTI são coletadas informações pessoais como nome, email e telefone celular. Além disso, o site possibilita identificar dados sobre o hardware e software do seu computador. Essas informações incluem: endereço IP, tipo de navegador, nomes de domínio,    tempo de acesso e endereços de sites de referência.</p>
            </div>

            <div class="politic-box">
                <h2>Uso dos sinalizadores da Web</h2>
                <p>As páginas do site da SKTI podem conter imagens eletrônicas conhecidas como sinalizadores da Web e algumas vezes chamadas de “gifs de um pixel”, que permitem que a SKTI conte quantos usuários visitaram essas páginas e forneça serviços de marcas associadas. A SKTI pode incluir sinalizadores da Web em mensagens promocionais ou em mensagens informando Notícias e Ofertas da SKTI para contar quantas mensagens foram abertas e interessaram aos usuários.</p>

                <p>Os sinalizadores da Web coletam somente um conjunto limitado de informações, incluindo um número de cookie, a hora e a data da exibição da página e uma descrição da página em que o sinalizador da Web reside. A SKTI proíbe o uso de sinalizadores da Web para acessar suas informações pessoais.</p>
            </div>

            <div class="politic-box">
                <h2>Política de Segurança</h2>
                <p>A SKTI está sempre buscando aperfeiçoar seus métodos de segurança e assegurar que os dados de nossos clientes estejam protegidos de possíveis invasões.</p>

                <p>Não nos responsabilizamos por falhas de segurança existentes nos navegadores atuais ou pelo uso indevido da Internet por parte dos usuários. Verifique as formas de segurança pessoal disponíveis na Web por empresas credenciadas em aplicativos de segurança. São várias opções que podem ser utilizadas para minimizar ou impedir o ataque de vírus, além de proteger seu computador de vulnerabilidades no sistema.</p>

                <p>A SKTI implementou sua Política de Privacidade e Segurança para mostrar aos usuários de seus serviços o compromisso de responsabilidade com suas informações.</p>
            </div>

            <div class="politic-box">
                <h2>Dicas importantes:</h2>

                <ul>

                    <li>Jamais forneça sua Senha Eletrônica para terceiros;</li>
                    <li>Não anote sua senha em papéis, agendas ou outros dispositivos que não forneçam segurança;</li>
                    <li>Utilize sempre o maior número possível de números e caracteres, de preferência misturando-os;</li>
                    <li>Jamais utilize dados pessoais (aniversários, linha pessoais de telefone, placa de carro, etc) como base para sua senha;</li>
                    <li>Troque sua senha pessoal periodicamente.</li>
                </ul>
            </div>
        </div>
        
    </section>
    
<?php  }; };  ?>

<?php get_footer(); ?>