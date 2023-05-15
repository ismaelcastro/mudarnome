@extends('site.template.app')

@section('content')
<div id="optionh1" style="display: block;">

    <section class="row-fluid s-banner-home s-home" id="banner-control">
        <div class="container-fluid d-flex justify-content-between flex-wrap">
            <div class="text aos-init aos-animate" data-aos="fade-right">
                <span class="extra-banner" data-aos="fade-right">
                    Mudar o nome em cartório? A gente te ajuda.
                </span>
                <h1 data-aos="fade-right">
                    Seu novo nome de forma <strong>rápida</strong>, <strong>sem burocracia</strong> e com
                    <strong>baixo
                        custo.</strong>
                </h1>
                <p data-aos="fade-right">
                    Não perca tempo ou dinheiro com longos processos judiciais
                </p>
                <a href="./#servicos" class="btn btn-plano" data-aos="fade-right">Quero Mudar</a>
            </div>

            <div class="formulario" data-aos="zoom-in">
                @include('site.pages.home.form')
            </div>


        </div>
    </section>

    <section id="sobre" class="s-funcional-home-1">
        <div class="container-fluid paddind-box">
            <div class="left">
                <div class="title">
                    <span class="sub-title">
                        Bora realizar seu sonho?
                    </span>
                    <h2>Por que somos melhor opção para você!</h2>
                </div>
                <div class="all-steps">
                    <div class="js-step-journey step active">
                        <img class="icon hover" src="assets/images/PrimeiroQuadro/empresario-com-gravata_hover.png"
                            alt="icon">
                        <img class="icon" src="assets/images/PrimeiroQuadro/businessman-with-tie.png" alt="icon">
                        <div class="info">
                            <h3>ATENDIMENTO ESPECIALIZADO</h3>
                            <p class="complete">
                                Atuamos em mais de 1.000 mudanças de nome ou sobrenome em todo o Brasil e contamos
                                com profissionais com vasta experiência para ajudar você a realizar seu sonho.
                            </p>
                            <!-- <a href="https://comunidade.lojaintegrada.com.br/" class="btn">Ir pra comunidade</a>-->
                            <div class="image-box">
                                <!-- <div class="icon-loja">
                                        <img src="assets/images/Icon-Logo-PNG.png" alt="">
                                    </div> -->
                                <!-- <div class="icon-packet">
                                        <img src="assets/images/icon-packet.svg" alt="">
                                    </div> -->
                                <img src="assets/images/SegundoQuadro/Atendimento.png" alt="" style="border-radius:10%">
                            </div>
                        </div>
                    </div> <!-- end steps -->
                    <div class="js-step-journey step">
                        <img class="icon hover" src="assets/images/PrimeiroQuadro/dois-coracoes_hover.png">
                        <img class="icon" src="assets/images/PrimeiroQuadro/two-hearts.png"
                            alt="icone representando dinheiro">
                        <div class="info">
                            <h3>SOMOS APAIXONADOS PELO QUE FAZEMOS</h3>
                            <p class="complete">
                                Após tantos sonhos realizados, nos apaixonamos pelo que fazemos e isso que nos
                                diferencia da concorrência.
                            </p>
                            <div class="image-box">
                                <!-- <div class="icon-loja">
                                        <img class="img-fluid" src="assets/images/Icon-Logo-PNG.png" alt="">
                                    </div> -->
                                <!-- <div class="icon-packet">
                                        <img class="img-fluid" src="assets/images/icon-packet.svg" alt="">
                                    </div> -->
                                <img class="img-fluid" src="assets/images/PrimeiroQuadro/Apaixonados.png" alt=""
                                    style="border-radius:10%">
                            </div>
                        </div>
                    </div> <!-- end steps -->
                    <div class="js-step-journey step">
                        <img class="icon hover" src="assets/images/PrimeiroQuadro/badge_hover.png"
                            alt="icone representando dinheiro">
                        <img class="icon" src="assets/images/PrimeiroQuadro/badge.png "
                            alt="icone representando dinheiro">
                        <div class="info">
                            <h3>GARANTIMOS SUCESSO</h3>
                            <p class="complete">
                                Contratando o pacote <a href="./#servicos">VIP</a>, além de não precisar sair de casa,
                                garantimos o
                                sucesso na
                                mudança do seu nome* ou devolvemos seu dinheiro integralmente.
                                <br>
                                <small>* Apenas casos em conformidade com a Lei 14.382/2022</small>
                            </p>

                            <div class="image-box">
                                <!-- <div class="icon-loja">
                                        <img src="assets/images/Icon-Logo-PNG.png" alt="">
                                    </div> -->
                                <!-- <div class="icon-packet">
                                        <img src="assets/images/icon-packet.svg" alt="">
                                    </div> -->
                                <img src="assets/images/PrimeiroQuadro/Garantido.png" alt="" style="border-radius:10%
                                    ">
                            </div>
                        </div>
                    </div> <!-- end steps -->
                    <div class="js-step-journey step">
                        <img class="icon hover" src="assets/images/PrimeiroQuadro/espreguicadeira_hover.png">
                        <img class="icon" src="assets/images/PrimeiroQuadro/deck-chair.png"
                            alt="icone representando dinheiro">
                        <div class="info">
                            <h3>CONFORTO E PRATICIDADE</h3>
                            <p class="complete">
                                Escolhendo entre os pacotes <a href="./#servicos">CERTIDÕES</a>, <a
                                    href="./#servicos">ASSESSORIA</a> ou
                                <a href="./#servicos">VIP</a> você terá a comodidade que
                                deseja por um preço que cabe no seu bolso.
                            </p>
                            <div class="image-box">
                                <!-- <div class="icon-loja">
                                        <img src="assets/images/Icon-Logo-PNG.png" alt="">
                                    </div> -->
                                <!-- <div class="icon-packet">
                                        <img src="assets/images/icon-packet.svg" alt="">
                                    </div> -->
                                <img src="assets/images/SegundoQuadro/Conforto.png" alt="" style="border-radius:10%">
                            </div>
                        </div>
                    </div> <!-- end steps -->
                    <div class="js-step-journey step">
                        <img class="icon hover" src="assets/images/PrimeiroQuadro/price-tag_hover.png">
                        <img class="icon" src="assets/images/PrimeiroQuadro/price-tag.png"
                            alt="icone representando dinheiro">
                        <div class="info">
                            <h3>BAIXO CUSTO</h3>
                            <p class="complete">
                                Você pode economizar até <b>R$ 3.775,57</b> em honorários advocatícios* fazendo a
                                mudança
                                de nome sem precisar de advogado, diretamente em cartório.
                                <br>
                                <small>
                                    * Considerando a tabela de honorários da <a
                                        href="https://www.oabsp.org.br/servicos/tabelas/tabela-de-honorarios">OAB/SP</a>
                                    <b>item 25.5 -Retificação
                                        de Registro
                                        Civil</b> </small>
                            </p>

                            <div class="image-box">
                                <!-- <div class="icon-loja">
                                        <img src="assets/images/Icon-Logo-PNG.png" alt="">
                                    </div> -->
                                <!-- <div class="icon-packet">
                                        <img src="assets/images/icon-packet.svg" alt="">
                                    </div> -->
                                <img src="assets/images/SegundoQuadro/Custo.png" alt="" style="border-radius:10%">
                            </div>
                        </div>
                    </div> <!-- end steps -->

                </div> <!-- end all-steps -->
            </div>
            <div class="images">

                <picture class="active">
                    <source srcset="assets/images/SegundoQuadro/Atendimento.png"><img
                        src="assets/images/SegundoQuadro/Atendimento.svg"
                        alt="imagem mulheres trabalhando juntas, uma apontando para um notebook e a outra segurando a tela">
                </picture>
                <picture>
                    <source srcset="assets/images/PrimeiroQuadro/Apaixonados.png"><img
                        src="assets/images/PrimeiroQuadro/Apaixonados.svg" alt="homem sorrindo digitando no notebook">
                </picture>
                <picture>
                    <source srcset="assets/images/PrimeiroQuadro/Garantido.png"><img
                        src="assets/images/PrimeiroQuadro/Garantido.svg"
                        alt=" um homem e uma mulher conversando em frente ao notebook">
                </picture>
                <picture>
                    <source srcset="assets/images/SegundoQuadro/Conforto.png"><img
                        src="assets/images/SegundoQuadro/Conforto (1).svg"
                        alt="imagem de uma mulher fazendo uma reunião virtual, olhando para o notebook">
                </picture>
                <picture>
                    <source srcset="assets/images/SegundoQuadro/Custo.png"><img
                        src="assets/images/SegundoQuadro/Custo.svg"
                        alt="dois homens sorrindo e conversando e gesticulando">
                </picture>
                <!-- <div class="icon-loja">
                        <img src="assets/images/Icon-Logo-PNG.png" alt="">
                    </div> -->
                <!-- <div class="icon-packet">
                        <img src="assets/images/icon-packet.svg" alt="">
                    </div> -->

            </div>
        </div>
    </section>
    <section id="quem-pode" class="s-para-quem">

        <div class="container-fluid">
            <div class="texto">
                <span class="sub-title">Nossos serviços são pra quem?</span>
                <h2>Pra <strong>todo mundo</strong> que quer <strong>mudar de nome</strong>!</h2>
            </div>
            <div class="s-cases-tab">
                <div class="left aos-init aos-animate" data-aos="fade-right">
                    <div class="picture active">
                        <picture>
                            <source srcset="assets/images/SegundoQuadro/Ganhar_Tempo.png">
                            <img src="assets/images/SegundoQuadro/Ganhar_Tempo.png" alt="lorem ipsum">
                        </picture>
                    </div>
                    <div class="picture">
                        <picture>
                            <source srcset="assets/images/SegundoQuadro/Documentacao.png">
                            <img src="assets/images/SegundoQuadro/Documentacao.png" alt="Lorem Ipsum">
                        </picture>
                    </div>
                    <div class="picture">
                        <picture>
                            <source srcset="assets/images/SegundoQuadro/praticidade.png">
                            <img src="assets/images/SegundoQuadro/praticidade.png" alt="Lorem Ipsum">
                        </picture>
                    </div>

                </div>
                <div class="right aos-init aos-animate" data-aos="fade-left">
                    <div class="item">
                        <div class="tab active">
                            <img src="assets/images/icon-3.png">
                            <div class="tab-content">
                                <h3>Quem não quer peder tempo</h3>
                                <p>
                                    Se você já tem experiência com cartórios contrate nossa <a
                                        href="./#servicos">CONSULTA</a>
                                    para uma
                                    análise personalizada do caso e evite perder tempo com erros que possam atrasar
                                    ou até mesmo fazer seu pedido de mudança de nome ser negado pelo cartório.
                                </p>
                                <!-- <p class="mini">Assim como a @somosplusoficial</p> -->
                            </div>
                        </div>
                        <!--end tab-->
                        <div class="tab">
                            <img src="assets/images/icon-2.png">
                            <div class="tab-content">
                                <h3>Quem não quer trabalho com a documentação</h3>
                                <p>
                                    Se você está com dificuldades para obter os documentos obrigatórios para a
                                    mudança de nome, contrate nosso serviço de <a href="./#servicos">CERTIDÕES</a>,
                                    disponibilizaremos todas
                                    as certidões obrigatórias (+ de 16 documentos) devidamente atualizadas de forma
                                    rápida e pelo menor custo.
                                </p>
                            </div>
                        </div>
                        <!--end tab-->

                        <div class="tab">
                            <img src="assets/images/icon-1.png">
                            <div class="tab-content">
                                <h3>Quem quer mudar o nome sem sair de casa</h3>
                                <p>
                                    Aqui também é para quem não quer trabalho nenhum e receber a Certidão de
                                    Nascimento com o nome alterado sem sair de casa. Contratando o serviço <a
                                        href="./#servicos">VIP</a>, além
                                    de emitir todas as certidões, atuaremos durante todo o processo administrativo
                                    encaminhando sua nova certidão digitalmente e por correio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="servicos" class="s-planos-loja" data-aos="fade-up">
        <div class="container-fluid">
            <div class="texto">
                <span class="sub-title">Nossos Pacotes</span>
                <h2>Pensados para <strong>todos os bolsos</strong>!</h2>
            </div>
            <ul class="grid-planos">
                <a href="./planos">
                    <li>
                        <div class="preco">
                            <span>CONSULTA</span>
                            <h3>R$ 199,90</h3>
                        </div>
                        <p>
                            Para quem quer gastar menos e fazer tudo sozinho
                        </p>
                    </li>
                </a>
                <a href="./planos">
                    <li class="destaque">
                        <small>Mais vantajoso</small>
                        <div class="preco">
                            <span>CERTIDÕES</span>
                            <h5>a partir de</h5>
                            <h3>R$ 599,90</h3>
                        </div>
                        <p>
                            Consulta + 16 Certidões atualizadas
                            obrigatórias

                        </p>
                    </li>
                </a>
                <a href="./planos">
                    <li>
                        <div class="preco">
                            <span>ASSESSORIA</span>
                            <h5>a partir de</h5>
                            <h3>R$ 999,90</h3>
                        </div>
                        <p>
                            Consulta + Certidões + Suporte
                            especializado (via Whatsapp)
                        </p>
                    </li>
                </a>
                <a href="./planos">
                    <li style="background-color: #d7d7d7;">
                        <span class="strip"></span>
                        <div class="preco">
                            <span>VIP</span>
                            <h5>a partir de</h5>
                            <h3>R$ 1999,90</h3>
                        </div>
                        <p>
                            Para quem quer mudar de nome,
                            sem sair de casa

                        </p>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <section id="depoimentos" class="s-testimonials">
        <div class="container">
            <div class="top">
                <div class="left">
                    <span class="extra">Quem já realizou o sonho de mudar de nome</span>
                    <h2>Histórias <strong>reais de pessoas</strong> como você!</h2>
                </div>

                <div class="ctrl-slide">
                    <button class="btn btn-prev">
                        <div class="arrow"></div>
                    </button>
                    <button class="btn btn-next">
                        <div class="arrow"></div>
                    </button>
                </div>
            </div>

            <div class="slide-depo-lojistas">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="photo">
                            <picture>
                                <source srcset="assets/images/testimonial-ale.webp"><img
                                    src="assets/images/testimonial-ale.webp" alt="Imagem Gabriel">
                            </picture>
                        </div>
                        <div class="info">
                            <div class="aspas">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>
                                "Estabilidade é um ponto forte da Loja Integrada, que nos dá segurança em épocas de
                                Black Friday, alta movimentação do ecommerce e campanhas da marca."
                            </p>
                            <ul class="user">
                                <li><strong>Alexandre Capella</strong></li>
                                <li><span>lojamaismu.com.br</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="photo">
                            <picture>
                                <source srcset="assets/images/testimonial-cris.webp"><img
                                    src="assets/images/testimonial-cris.webp" alt="Imagem Patrícia">
                            </picture>
                        </div>
                        <div class="info">
                            <div class="aspas">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>
                                "Escolhemos a Loja Integrada, pela acessibilidade, fácil manuseio e opções
                                oferecidas onde se encaixava com nosso negócio, e isso foi fundamental pra nossa
                                expansão e crescimento."
                            </p>
                            <ul class="user">
                                <li><strong>Cristiane Costa</strong></li>
                                <li><span>somosplus.com.br</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="photo">
                            <picture>
                                <source srcset="assets/images/testimonial-alessandra.webp"><img
                                    src="assets/images/testimonial-alessandra.webp" alt="Imagem Lucas">
                            </picture>
                        </div>
                        <div class="info">
                            <div class="aspas">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>
                                "Minha loja online era meu plano B que virou Plano A. Graças à LI meu sonho de
                                empreender se tornou realidade."
                            </p>
                            <ul class="user">
                                <li><strong>Alessandra Garcia</strong></li>
                                <li><span>engenhakids.com.br</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="photo">
                            <picture>
                                <source srcset="assets/images/testimonial-joao.webp"><img
                                    src="assets/images/testimonial-joao.webp" alt="Imagem João">
                            </picture>
                        </div>
                        <div class="info">
                            <div class="aspas">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>
                                “Com essa ferramenta intuitiva e segura, o aprendizado dos nossos colaboradores com
                                os processos de
                                e-commerce é bem rápida!”
                            </p>
                            <ul class="user">
                                <li><strong>João Paulo Resende</strong></li>
                                <li><span>gshield.com.br</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="photo">
                            <picture>
                                <source srcset="assets/images/maribel.webp"><img src="assets/images/maribel.png"
                                    alt="Imagem Maribel">
                            </picture>
                        </div>
                        <div class="info">
                            <div class="aspas">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>
                                “A equipe LI está sempre pronta pra solucionar minhas dúvidas, além de produzir um
                                excelente material de
                                apoio que me ajuda a alavancar meu negócio.”
                            </p>
                            <ul class="user">
                                <li><strong>Maribel Albreschtt </strong></li>
                                <li><span>zumtecidodecera.com.br</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="photo">
                            <picture>
                                <source srcset="assets/images/fabrizzio.webp"><img src="assets/images/fabrizzio.png"
                                    alt="Imagem João">
                            </picture>
                        </div>
                        <div class="info">
                            <div class="aspas">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>
                                “Já usamos outras plataformas e a migração para a Loja Integrada foi uma decisão
                                acertada. A
                                simplicidade e benefícios no uso nos ajudaram a continuar crescendo.”
                            </p>
                            <ul class="user">
                                <li><strong>Fabrizzio Forlani </strong></li>
                                <li><span>dermadoctor.com.br</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-crescer-marca">
        <div class="container-fluid d-flex justify-content-between flex-wrap">

            <div class="text">
                <h2>Ganhe dinhero conosco!</h2>
                <p>Indique nossos serviços para pessoas que querem mudar de nome, e ganhe com isso</p>
            </div>
            <div class="right">
                <a href="" class="btn btn-plano" tabindex="0" title="ser parceiro">SER PARCEIRO</a>
            </div>
        </div>
    </section>
</div>
@endsection


@push('scripts')


@endpush