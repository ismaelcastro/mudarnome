@extends('site.template.app')
@section('content')
@include('site.template.planos.planos_modal')
<section class="s-banner-planos-n">
    <div class="container-fluid">
        <div class="text" data-aos="fade-right">

            <h1>
                Pacotes pensados para caber em qualquer bolso
            </h1>
        </div>

        <div class="container-fluid" data-aos="zoom-in">

            <div class="planos">
                <div class="box-plano" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                    <div class="block-plan-list">
                        <div class="top-box">
                            <p class="plano">Consulta</p>
                        </div>

                        <p class="list">
                            Tudo que você precisa saber para mudar seu nome sozinho em cartório</p><br>
                        <div class="price-description">
                            <br>
                            <p class="price">R$ 199,90</p>
                            <!-- <p class="AnualPlan anual-billing">.</p> -->
                        </div>
                    </div>
                    <div class="list">
                        <br>
                        <ul class="list-plan-f" style="margin-top: 27px;">
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Análise Personalizada;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Instruções sobre como fazer;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Informação sobre os documentos;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Informação sobre os custos;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Como fazer gratuitamente;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Cartório mais próximo;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Como reconhecer firma pela internet;</b>
                            </li>
                        </ul>
                    </div>
                    <a onclick="selecionaPlano('100', 'Grátis', 0.00);" href="#" class="btn-plano">Criar minha
                        loja</a>
                </div>

                <div class="box-plano destaque" id="plan2">
                    <small>Mais vantajoso</small>
                    <div class="block-plan-list">
                        <div class="top-box">
                            <p class="plano">Certidões</p>

                        </div>
                        <p class="describe">
                            Além de todas as informações,
                            emitimos para você as certidões
                            atualizadas obrigatórias
                        </p>
                        <div class="price-description">
                            <!-- <p class="price priceAnual">R$ 39 <span>/ mês</span></p> -->
                            <p class="price priceAnual">R$ 599,90<span></span></p>
                        </div>
                    </div>
                    <p>Consulta <strong>Mais..</strong></p>
                    <div class="list">
                        <ul class="list-plan-f">
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Certidão de Nascimento Atualizada;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Certidão de Casamento Atualizada;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Pacote de Certidões (<i>16 Certidões Negativas</i>);</b>
                            </li>
                        </ul>
                    </div>
                    <a onclick="selecionaPlano('100', 'Grátis', 0.00);" href="#" class="btn-plano ">Criar minha
                        loja</a>
                </div>
                <div class="box-plano" id="plan3">
                    <!-- <div class="vantagem"><span>Mais vantajoso</span></div> -->
                    <div class="block-plan-list">
                        <div class="top-box">
                            <p class="plano">Assessoria</p>

                        </div>
                        <p class="describe">Para quem quer suporte de um em todas as etapas do processo</p>
                        <div class="price-description">
                            <p class="price priceAnual">R$ 999,90</p>
                        </div>
                    </div>
                    <p>Certidões<strong> Mais...</strong></p>
                    <div class="list">
                        <ul class="list-plan-f">
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Análise da documentação completa;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Elaboração do processo;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Requerimento Preenchido;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Atendimento (<i>via whatsapp</i>);</b>
                            </li>
                        </ul>
                    </div>
                    <a onclick="selecionaPlano('100', 'Grátis', 0.00);" href="#" class="btn-plano">Criar minha
                        loja</a>
                </div>

                <!-- <a onclick="selecionaPlano('100', 'Grátis', 0.00);" href="#" class="" > -->
                <div class="box-plano" id="plan4" style="background-color: #d7d7d7;">
                    <span class="strip"></span>
                    <div class="block-plan-list">
                        <div class="top-box">
                            <p class="plano">VIP</p>

                        </div>
                        <p class="describe">
                            Para aqueles que priorizam
                            comodidade e querem mudar
                            de nome sem sair de casa

                        </p>
                        <div class="price-description">
                            <p class="price priceAnual">R$ 1599,00<span></span></p>
                        </div>
                    </div>
                    <p>Assessoria <strong>Mais...</strong></b></p>
                    <div class="list">
                        <ul class="list-plan-f">
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Protocolamos o Processo;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Taxas de Cartório Inclusas;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Acompanhamos o Processo até o final;</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Suporte Integral (<i>via Telefone e WhatsApp</i>)</b>
                            </li>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <b>Garantimos o Êxito;</b>
                            </li>
                        </ul>
                    </div>
                    <a onclick="selecionaPlano('100', 'Grátis', 0.00);" href="#" class="btn-plano">Criar minha
                        loja</a>
                </div>
            </div>

        </div>
        <!-- <div class="extra-resources">
            <button class="details-plan-n active" ><span> Ver todos os recursos <img class="seta-recursos"
              src="/assets/images/seta-recursos.png" alt="seta para direita"></span></button>
          </div> -->
        <!-- <th class="details-plan" colspan="7"><span>Ver todos os recursos <img class="seta-recursos"
            src="/assets/images/arrow-orange.svg" alt="seta para direita"></span></th>
      </tr> -->
    </div>


</section>
<section class="s-detalhes-planos hide-plans-v">
    <div class="container-fluid">
        <div class="top">
            <div class="text">
                <span class="extra">Compare nossos pacotes</span>
                <h2><strong>Entenda a diferença entre nossos serviços</strong></h2>
            </div>

            <!-- <a href="" class="cta" tabindex="0">
                  <img src="" alt="">
                  <span>Assinar online</span>
                  <img src="assets/images/arrow-orange.svg" alt="seta para direita">
                </a> -->
        </div>

        <div class="content outer">
            <div class="responsive inner">
                <table>
                    <tr>
                        <th>
                        <td colspan="4"><strong>Serviços</strong></td>
                        </th>
                    </tr>
                    <div class="container-fluid">
                        <tbody>
                            <tr class="mobile">
                                <th></th>
                                <td>
                                    <span>Gratuito</span>
                                    <p>R$ 199,90</p>
                                </td>
                                <td class="mesPlan">
                                    <span>Pro 1</span>
                                    <p>R$ 599,90</p>
                                </td>
                                <td class="AnualPlan">
                                    <span>Pro 1</span>
                                    <p>R$ 999,90<span></span></p>
                                    <!-- <p>R$ 420,40/ano</p> -->
                                </td>
                                <td class="mesPlan">
                                    <span>Pro 2</span>
                                    <p>R$ 1999,90</p>
                                </td>
                                <td class="AnualPlan">
                                    <span>Pro 2</span>
                                    <p>R$ 79<span>/mês</span></p>
                                    <p class="billing">Cobrado anualmente</p>
                                    <!-- <p>R$ 950,40/ano</p> -->
                                </td>
                                <td class="mesPlan">
                                    <span>Pro 3</span>
                                    <p>R$ 199</p>
                                </td>
                                <td class="AnualPlan">
                                    <span>Pro 3</span>
                                    <p>R$ 159<span>/mês</span></p>
                                    <p class="billing">Cobrado anualmente</p>
                                    <!-- <p>R$ 1910,40/ano</p> -->
                                </td>
                            </tr>
                            <tr class="color">
                                <th>Análise personalizada do caso;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><i class="fa fa-check-circle"></i></td> -->
                            </tr>
                            <tr>
                                <th>Instruções sobre como fazer;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Informação sobre os Documentos;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr>
                                <th>Informação sobre os Custos;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Informação sobre o Cartório;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr>
                                <th>Como fazer gratuitamente;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Como reconhecer firma pela internet;</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr>
                                <th>Certidão de Nascimento Atualizada;</th>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Certidão de Casamento Atualizada;</th>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr>
                                <th>Pacote de Certidões Negativas (16 Certidões);</th>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Análise da documentação completa;</th>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Elaboração do processo;</th>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Requerimento preenchido;</th>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Taxas de Cartório inclusas;</th>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Acompanhamento do Processo até o final;</th>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr class="color">
                                <th>Envio da Certidão como nome alterado;</th>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>

                                <!-- <td><img src="/assets/images/icon-check.svg" alt="seta"></td> -->
                            </tr>
                            <tr>
                                <th>
                                <td colspan="4"><strong>Segurança e Suporte</strong></td>
                                </th>
                            </tr>
                            <tr class="color">
                                <th>Garantia de Êxito</th>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="fa fa-check-circle"></i></td>
                            </tr>
                            <tr>
                                <th>Atendimento</th>
                                <td>Chatbot</td>
                                <td>E-mail + Chatbot</td>
                                <td>E-mail + WhatsApp</td>
                                <td>E-mail + WhatsApp + Telefone</td>
                            </tr>
                            <tr class="color">
                                <th>
                                <td colspan="4"><strong>Formas de Envio</strong></td>
                                </th>
                            </tr>
                            <tr>
                                <th>Digital</th>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td><i class="fa fa-check-circle"></i></td>
                            </tr>
                            <tr class="color">
                                <th>Físico</th>
                                <td>-</td>
                                <td>-</td>
                                <td>Opcional</td>
                                <td><i class="fa fa-check-circle"></i></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </div>
                </table>
            </div>
            <ul class="valores-fixo">
                <li></li>
                <li class="planos-item-start criar-loja">
                    <span>Consulta</span>
                    <p>R$ 199,90</p>
                    <a onclick="selecionaPlano('100', 'Grátis', 0.00);" href="#" class="btn-plano">Contratar</a>
                </li>
                <li class="planos-item-start criar-loja">
                    <span>Certidões</span>
                    <p class="price priceMonth" style="display: none;">
                        R$ 599,90
                    </p>
                    <p class="price priceAnual">
                        R$ 599,90
                    </p>
                    <a onclick="selecionaPlano('101', 'PRO 1', 49.00);" href="#" class="btn-plano">Contratar</a>
                </li>
                <li class="planos-item-start criar-loja">
                    <span>Assessoria</span>
                    <p class="price priceMonth" style="display: none;">
                        R$ 999,90
                    </p>

                    <p class="price priceAnual">
                        R$ 999,90
                    </p>
                    <a onclick="selecionaPlano('102', 'PRO 2', 99.00);" href="#" class="btn-plano">Contratar</a>
                </li>
                <li class="planos-item-start criar-loja">
                    <span>VIP</span>
                    <p class="price priceMonth" style="display: none;">
                        R$ 1999,90
                    </p>

                    <p class="price priceAnual">
                        R$ 1599,90
                    </p>
                    <button onclick="selecionaPlano('103', 'PRO 3', 199.00);" href="#" disabled="true"
                        class="btn-plano">Em
                        Breve</button>
                </li>
            </ul>
        </div>
    </div>

</section>
<section class="s-jornada page-planos s-funcional-home-1">
    <div class="container-fluid s-flex">
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
                    <img class="icon" src="assets/images/PrimeiroQuadro/businessman-with-tie.png" alt="icone ">
                    <div class="info">
                        <h3>ATENDIMENTO ESPECIALIZADO</h3>
                        <p class="complete">
                            Atuamos em mais de 1.000 mudanças de nome ou sobrenome em todo o Brasil e contamos com
                            profissionais com vasta experiência para ajudar você a realizar seu sonho.
                        </p>

                        <!-- <a href="https://comunidade.lojaintegrada.com.br/" class="btn">Ir pra comunidade</a>-->
                        <div class="image-box">
                            <!-- <div class="icon-loja">
                            <img class="img-fluid" src="assets/images/Icon-Logo-PNG.png" alt="">
                        </div> -->
                            <div class="icon-packet">
                                <img class="img-fluid" src="assets/images/Icon-Logo-PNG.png" alt="">
                            </div>
                            <img class="img-fluid" src="assets/images/SegundoQuadro/Atendimento.png" alt=""
                                style="border-radius: 10%">
                        </div>
                    </div>
                </div>

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
                                <img src="assets/images/Icon-Logo-PNG.png" alt="">
                            </div> -->
                            <div class="icon-packet">
                                <img src="assets/images/icon-packet.svg" alt="">
                            </div>
                            <img src="assets/images/PrimeiroQuadro/Apaixonados.png" alt="" style="border-radius:10%">
                        </div>
                    </div>
                </div>

                <div class="js-step-journey step">
                    <img class="icon hover" src="assets/images/PrimeiroQuadro/badge_hover.png"
                        alt="icone representando dinheiro">
                    <img class="icon" src="assets/images/PrimeiroQuadro/badge.png " alt="icone representando dinheiro">
                    <div class="info">
                        <h3>GARANTIMOS DE SUCESSO</h3>
                        <p class="complete">
                            Contratando o pacote <a href="#">VIP</a>, além de não precisar sair de casa,
                            garantimos o
                            sucesso na
                            mudança do seu nome* ou devolvemos seu dinheiro integralmente.
                            <br>
                            <small>* Apenas casos em conformidade com a Lei 14.382/2022</small>
                        </p>
                        <!-- <a href="/agencias-parceiras" class="btn">Conhecer parceiros</a> -->
                        <div class="image-box">
                            <!-- <div class="icon-loja">
                                <img src="assets/images/Icon-Logo-PNG.png" alt="">
                            </div> -->
                            <div class="icon-packet">
                                <img src="assets/images/icon-packet.svg" alt="">
                            </div>
                            <img src="assets/images/PrimeiroQuadro/Garantido.png" alt="" style="border-radius: 10%">
                        </div>
                    </div>
                </div>

                <div class="js-step-journey step">
                    <img class="icon hover" src="assets/images/PrimeiroQuadro/espreguicadeira_hover.png">
                    <img class="icon" src="assets/images/PrimeiroQuadro/deck-chair.png"
                        alt="icone representando dinheiro">
                    <div class="info">
                        <h3>CONFORTO E PRATICIDADE</h3>
                        <p class="complete">
                            Escolhendo entre os pacotes <a href="#">CERTIDÕES</a>, <a href="#">ASSESSORIA</a> ou
                            <a href="#">VIP</a> você terá a comodidade que
                            deseja por um preço que cabe no seu bolso.
                        </p>
                        <div class="image-box">
                            <!-- <div class="icon-loja">
                                <img src="assets/images/Icon-Logo-PNG.png" alt="">
                            </div> -->
                            <div class="icon-packet">
                                <img src="assets/images/icon-packet.svg" alt="">
                            </div>
                            <img src="assets/images/SegundoQuadro/Conforto.png" alt="" style="border-radius:10%">
                        </div>
                        <!-- <a href="/cases" class="btn">Ver casos de sucesso</a> -->
                    </div>
                </div>

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
                            <div class="icon-loja">
                                <img src="assets/images/Icon-Logo-PNG.png" alt="">
                            </div>
                            <div class="icon-packet">
                                <img src="assets/images/icon-packet.svg" alt="">
                            </div>
                            <img src="assets/images/SegundoQuadro/Custo.png" alt="" style="border-radius:10%">
                        </div>
                    </div>
                </div>

                <div class="js-step-journey step" style="display:none">
                    <img src="assets/images/icon-abordagem.svg" alt="icone representando abordagem">
                    <div class="info">
                        <h3>Abordagem humana</h3>
                        <p class="complete">
                            A gente fala a sua língua. A Loja Integrada é brasileira e
                            entende de gente brasileira que empreende e bota a cara a
                            tapa. Sinta-se em casa!
                        </p>
                        <a href="/sobre" class="btn">Chega mais</a>
                    </div>
                </div>
            </div>
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
                    src="assets/images/SegundoQuadro/Conforto.png"
                    alt="imagem de uma mulher fazendo uma reunião virtual, olhando para o notebook">
            </picture>
            <picture>
                <source srcset="assets/images/SegundoQuadro/Custo.png"><img src="assets/images/SegundoQuadro/Custo.svg"
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
@endsection
@push('scripts')


@endpush
@push('css')
<link rel="stylesheet" href="{{'assets/css/modals/modal.css'}}">

@endpush