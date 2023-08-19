<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 01 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap 02 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
    <link rel="stylesheet" type="text/css" href="style_pg_inicial.css"/>
    <title>Meu Amigo Curitibano - entre ou cadastre-se</title>
</head>
<body>
    <header>
      <div class="container-header header">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid"> 
                <a class="navbar-brand" href="#"><img src="../teste/image/Screenshot_191-semfundo.png" class="img-fluid img_logo" alt="..." ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="list-group-item shadow-lg p-1 mb-2 ms-body rounded">
                      <div class="d-grid gap-2"><button class="btn border-0" type="button">Início</button></div>
                    </li>
                    <li class="list-group-item p-1 mb-2 ms-body rounded">
                      <div class="d-grid gap-2"><button class="btn border-0" type="button">Eventos Ativos</button></div>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar Eventos" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></button>
                  </form>
                  
                </div>
              </div>
            </nav>
          </div>
        </div>
        </div>
      </div>
    </header>

    <div class="container-fluid container_pginicial">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-5 col-xs-1 foto_perfil">
          <img src="..\teste\image\perfil.jpg" class="rounded d-block" alt="..." style="width: 8rem"> 
          </BR></BR>
          <ul class="list-group">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Amigos</button></div>
                  </li>
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Fotos</button></div>
                  </li>
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Check-in</button></div>
                  </li>
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Chat</button></div>
                  </li>
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Linha do Tempo</button></div>
                  </li>
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Atividade</button></div>
                  </li>
                  <li class="list-group-item border-0 shadow-sm p-1 mb-2 bg-body rounded">
                    <div class="d-grid gap-2"><button class="btn btn-dark" type="button">Dados Pessoais</button></div>
                  </li>
                  </BR></BR></BR>
                </div>
              </div>
            </div>
          </ul>
          
        </div>

        <!-- 1º CARD-->
          
          <div class="col-lg-3 col-sm-6">    
            <div class="card" style="width: 15rem;">
              <img src="..\teste\image\jamesbar.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">James Bar</h5>
                <p class="card-text">O Halloween é hoje! Você vai ouvir o melhor do Pop e do Funk a noite toda com direito a Concurso de Fantasias 🦇🧟‍♀️💀 @JamesBarCwb</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data: 02/05/2023 às 22:00hrs</li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Presenças Confirmadas
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jamesmodal">Ver Mais</button>
              </div>
            </div>
          </div>
                  <!-- outro-->
          <div class="col-lg-3 col-sm-6">
            <div class="card" style="width: 15rem;">
              <img src="..\teste\image/estar.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Evento Beneficiente</h5>
                <p class="card-text">Evento realizado com o intuito de arrecadar alimentos e recursos para instituições carentes!</BR></BR></BR></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data: 05/05/2023 às 19:00hrs</li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Presenças Confirmadas
                  <span class="badge bg-primary rounded-pill">300</span>
                </li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#OutroModal">Ver Mais</button>
              </div>
            </div>
          </div>

          <!-- 2º CARD-->
          <div class="col-lg-3 col-sm-6">
            <div class="card" style="width: 15rem;">
              <img src="..\teste\image\uniopet.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fundamentos de TI</h5>
                <p class="card-text">Segue o que foi solicitado no documento de requisitos da disciplica Fundamentos de TI pela professora Adriana Bastos da Costa.</BR></BR></BR></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data: 16/11/2022 às 19:00hrs</li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Presenças Confirmadas
                  <span class="badge bg-primary rounded-pill">4</span>
                </li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fundamentosModal">Ver Mais</button>
              </div>
            </div>
          </div>

          <!-- 3º CARD-->
          <div class="col-lg-3 col-sm-4">
            <div class="card" style="width: 15rem;">
              <img src="..\teste\image\uniopet.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Redes de Computadores</h5>
                <p class="card-text">Segue o que foi solicitado no documento de requisitos da disciplica Redes de Computadores pelo professor Lincoln Nilo Pereira.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data: 02/05/2023 às 19:00hrs</li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Presenças Confirmadas
                  <span class="badge bg-primary rounded-pill">12</span>
                </li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#redesModal">Ver Mais</button>
              </div>
            </div>
          </div>
                <!-- 4º CARD-->
          
        </div>
        </div>

      <!-- JAMES BAR - Ver Mais -->
      <div class="modal fade modal-lg" id="jamesmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">James Bar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
              <div class="row">
                <div class="col-12">
                  <div id="jamesmodal_carosel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <img src="..\teste\image\jamescardapio.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item active">
                        <img src="..\teste\image\jamesbarbar.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\jamesbarcardapio.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\jamesbemloco.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#jamesmodal_carosel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#jamesmodal_carosel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </br>
                  <h1>Descrição do Evento</h1>
                  <p>O Halloween é hoje! Você vai ouvir o melhor do Pop e do Funk a noite toda com direito a Concurso de Fantasias 🦇🧟‍♀️💀. O evento acontecerá as 22:00 horas com o término previsto até as 06:00hrs. Todos estão convidados para aproveitar e curtir a noite inteira.</br></br>
                  Entrada franca até as 22:00 horas
                  </p>
                </br>
                  <h3 class="fw-bolder">Promoção</h3>
                  <p>Chopp grátis até as 22:00 horas</p>
                  <a>01 - Batata rústica (400g) com ervas 17,00</a></br>
                  <a>02 - Lâminas de bacon empanadas (250g) com ervas 20,00</a>
                </br>
                  <a>03 - Cada R$100,00 gastos, 10% serão doados</a>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Confirmar Presença</button>
            </div>
          </div>
        </div>
      </div>

        <!-- Fundamentos de TI - Ver Mais -->
      <div class="modal fade modal-lg" id="fundamentosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Fundamentos de TI</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div id="fundamentosModal_carosel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="..\teste\image\FunTI_Slide1.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\FunTI_Slide2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\FunTI_Slide3.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\FunTI_Slide4.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\FunTI_Slide5.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\FunTI_Slide6.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#fundamentosModal_carosel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#fundamentosModal_carosel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Confirmar Presença</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Redes de Computadores - Ver Mais -->
      <div class="modal fade modal-lg" id="redesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Redes de Computadores</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/iGuN7K-2fxw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
                  </div>
                  </br></br>
                    <h3>Modelo OSI</h3>
                    <img src="..\teste\image\Modelo_OSI.png" class="d-block w-100" alt="...">
                  </br></br>
                    <h3>Cabeamento Estruturado</h3>
                    <p>
                      •	Tendências Tecnológicas:</br>
                      •	Um sistema de cabeamento estruturado deve, se possível, suportar altas taxas transmissão e deve ser implementado como uma estrela hierárquica.</br>
                      •	Uso crescente de fibras ópticas.</br>
                      •	Utiliza um conjunto de subsistemas de cabeamento para criar uma infra-estrutura hierárquica capaz de se adaptar às mudanças de tecnologia e de ambiente e, ainda, facilitar a detecção e correção de falhas e manutenção.</br>
                      •	Normas EIA/TIA 568B / 569B / 606A / 607A.</br>
                      •	Norma brasileira NBR 14565.</br>
                    </p>
                  </br></br>
                    <h3>Endereços binários e IPv4</h3>
                    <p>
                      •	O sistema de numeração binária consiste em 1s e 0s, chamados bits.</br>
                      •	Sistema de numeração decimal consiste em dígitos 0 a 9.</br>
                      •	Hosts, servidores e equipamentos de rede usando endereçamento binário para identificar uns aos outros.</br>
                      •	Cada endereço é composto de uma sequência de 32 bits, dividida em quatro seções chamadas octetos.</br>
                      •	Cada octeto contém 8 bits (ou 1 byte) separados por um ponto.</br>
                      •	Para facilitar o uso por pessoas, esta notação pontilhada é convertida em decimal pontilhada.</br>
                    </p>
                  </br></br>
                    <h3>Endereços Hexadecimal e IPv6</h3>
                    <p>
                      •	Endereços IPv6 têm 128 bits de comprimento. Cada 4 bits é representado por um único dígito hexadecimal Isso torna o endereço IPv6 um total de 32 valores hexadecimais.</br>
                      •	A figura mostra o método preferido de escrever um endereço IPv6, com cada X representando quatro valores hexadecimais.</br>
                      •	Cada grupo de caracteres hexadecimais de quatro é referido como um hextet.</br>
                      •	CCNA 2 – Conceitos Básicos Conceitos Básicos de Roteadores e Roteamento de Roteadores e Roteamento. O roteamento é o processo realizado por um roteador para encaminhar dados entre redes e subredes. Para realizar o roteamento corretamente, o roteador utiliza o IP de destino para orientar os dados na rede e rotas configuradas estaticamente ou por um protocolo de roteamento dinâmico para definir o caminho dos dados.</br>
                    </p>
                  </br></br>
                    <h3>Protocolo NAT</h3>
                    <p>
                      O conceito de NAT pode ser descrito como a própria sigla já diz (Network Address Translation), ou tradução de endereço de rede, confuso, vou tentar explicar melhor.</br></br>
                      Todos que tem uma conexão com a internet tem um modem, ai já podemos ter uma ideia do que é, pois existe o ip privado e o ip publico, ou seja, o ip privado é a sua rede interna e o ip publico é a internet, digamos assim, ai para fazer esta conexão para que possa acessar os sites em outro servidores precisamos fazer esta tradução e o responsável por esta tradução e o NAT.</br></br>
                      Um outro exemplo que podemos usar é caso tenha que acessar um endereço dentro da sua rede mas você não esta nela, claro da para utilizar um VPN, mas pode também acessar pelo navegador é o caso dos sites ou sistemas como GLPI que é criado para fazer chamados pela web.</br></br>
                      Explicando melhor, tenho o GLPI e quero deixar ele aberto para que os clientes possam abrir os chamados de qualquer lugar, então configuro no meu roteador ou firewall uma NAT dizendo que tudo que vier da web será enviado para o meu servidor interno onde está o sistema, a imagem abaixo explica melhor isso.</br></br>
                      <img src="..\teste\image\NAT.png" class="d-block w-100" alt="...">
                    </p>
                  </br></br>
                    <h3>Redes sem fio e redes móveis</h3>
                    <p>
                      • Redes de computador em que os meios de transmissão não usam cabos físicos.</br>
                      • Usadas em ocasiões ou locais em que as soluções cabeadas não são empregadas – Complementam as redes cabeadas.</br>
                      • Motivação: telefones celulares.</br>
                      • Exemplos comuns – Infravermelho – Bluetooth – Wi-Fi – WiMAX Introdução.</br>
                      • Flexibilidade e mobilidade.</br>
                      • Convenientes na instalação – evita o trabalho de passagem de cabos – Reduz custo (dispensa cabeamento).</br>
                      • Baratas – Equipamentos tem preço acessível.</br>
                      • Pode ser implementada em praticamente qualquer lugar.</br>
                      • Manutenção reduzida Introdução.</br>
                      • Largura de banda inferior aos métodos cabeados ( Fast e Giga Ethernet).</br>
                      • Problemas com a segurança da informação.</br>
                      • Qualidade de serviço – Força do sinal é decrescente – Interferências de outras fontes – Propagação multidirecional.</br>
                      • Ligações mais difíceis de estabelecer – Necessidade de prot. de correção de erros robusta – Partilha do meio de transmissão Introdução.</br>
                      • Ondas eletromagnéticas são ondas cíclicas que se repetem em uma determinada frequência – 1 Hz = 1 ciclo por segundo – KHz; MHz; GHz.</br>
                      • Viajam à velocidade da luz.</br>
                      • Comprimento de onda diminui quando a frequência aumenta.</br></br>

                      • Padrões comerciais – 802.11a (5 GHz; 54 Mbps) FHSS ou DSSS, modulação BPSK – Largura 20 Mhz – 802.11b (2.4 GHz; 11 Mbps) DSSS, modulação BPSK/QPSK – Largura 22 Mhz – 802.11g (2.4 GHz; 54Mbps) OFDM (52 subportadoras), modulação QAM64 - Largura 20 Mhz – 802.11n (2.4/5 GHz; 300Mbps) OFDM (108 subportadoras), modulação QAM64, MIMO 4x4 - Largura 20/40 Mhz – 802.11ac (5 GHz; 1,3 Gb/s) OFDM (234, 2x234 subportadoras), modulação QAM256, MIMO 8x8 - Largura 80/160 Mhz.
                    </p>
                  </br>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Confirmar Presença</button>
            </div>
          </div>
        </div>
      </div>
      <!-- outro -->

      <div class="modal fade modal-lg" id="OutroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Evento Benificiente</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div id="fundamentosModal_carosel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="..\teste\image\estar.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\teste\image\d78861017f898bc898b9ec525a7c7dff.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..\\teste\image\ajuda-negocios-sociais.webp" class="d-block w-100" alt="...">
                      </div>
                                                                 
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#fundamentosModal_carosel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#fundamentosModal_carosel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Confirmar Presença</button>
            </div>
          </div>
        </div>
      </div>
      
    </div> 

    </BR></BR>

    <div class="footer">
      <div class="row">
        <div class="col-lg-5">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg></button>
            <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" fill="currentColor" class="bi bi-gear-wide" viewBox="0 0 16 16">
              <path d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"/>
            </svg></button>
          </div>
        </div>
        </BR></BR>
        <div class="col-lg-7">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#"><<</a></li>
              <li class="page-item"><a class="page-link" href="#"><</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">></a></li>
              <li class="page-item"><a class="page-link" href="#">>></a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
            </ul>
          </nav>
        </div>
      </div>
          
    </div> 
  </div>
</body>
</html>