@extends('layouts.master')


@section('header')
    @parent

   <section id="particles-js" class="header-area">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                    <div class="item active carousel-thumb1">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-8 col-md-offset-2 text-center">
                                   <div class="header-section-wrapper">
                                       <div class="header-section-top-part">
                                           <h5>D3Team</h5>
                                           <h1>SAFE &amp; SECURE SERVER</h1>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="item carousel-thumb2">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-8 col-md-offset-2 text-center">
                                   <div class="header-section-wrapper">
                                       <div class="header-section-top-part">
                                           <h5>BEST PROFESSIONAL</h5>
                                           <h1>SAFE &amp; SECURE SERVER</h1>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                       </div>
                                     
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="item carousel-thumb3">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-8 col-md-offset-2 text-center">
                                   <div class="header-section-wrapper">
                                       <div class="header-section-top-part">
                                           <h5>BEST PROFESSIONAL</h5>
                                           <h1>SAFE &amp; SECURE SERVER</h1>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                       </div>
                                     
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                  </div>
                <!-- Controls -->
              <a class="left carousel-control1" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control1" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
      </div>
   </section>
   <!--Header section end-->
  <div class="clearfix"></div>
  <!-- Admin section start -->
  <div class="admin-section" id="raindrops">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- admin content start -->
          <div class="admin-content">
            <!-- admin text start -->
            <div class="admin-text">
              <h2>Fábrica de Software</h2>
            </div>
            <!-- admin text end -->
            <!-- admin user start -->
            <!-- <div class="admin-user">
              <button type="submit" name="login">sign in</button>
              <button type="submit" name="register">register now</button>
            </div> -->
            <!-- admin user end -->
          </div>
          <!-- admin-content end -->
        </div>
      </div>
    </div>
  </div>
  <!-- Admin section end -->
  <div class="clearfix"></div>
@stop



@section('content')
    

  <section id="service" class="services-section section-padding section-background">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- section header start -->
          <div class="section-header">
            <h2>Nossos <span> Serviços</span></h2>
            <p><img src="assets/img/icon.png" alt="icon"></p>
          </div>
          <!-- section header end -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- service content Area Start -->
          <div class="service-content">
            <!-- Service List Area Start -->
            <div class="service-list">
              <ul class="service-tab" role="tablist">
                <li class="active">
                  <div class="service-thumb">
                    <a href="#solucoes"  data-toggle="tab" aria-expanded="false">
                      <i class="fa fa-handshake-o  fa-3x"></i>
                    </a>
                  </div>
                  <p>Soluções</p>
                </li>
                <li>
                    <div class="service-thumb">
                      <a  href="#software-servico"  data-toggle="tab" aria-expanded="false">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </a>
                    </div>
                    <p>Saas</p>
                  </li>
                <li>
                  <div class="service-thumb">
                    <a  href="#multplataforma"  data-toggle="tab" aria-expanded="false">
                      <i class="fa fa-mobile fa-3x"></i>
                    </a>
                  </div>
                  <p>Miltiplataforma</p>
                </li>
                <li>
                  <div class="service-thumb">
                    <a  href="#tecnologias"  data-toggle="tab" aria-expanded="false">
                      <i class="fa fa-code" aria-hidden="true"></i>
                  </a>
                  </div>
                  <p>tecnologias</p>
                </li>
               
                <li>
                  <div class="service-thumb">
                    <a  href="#support"  data-toggle="tab" aria-expanded="false">
                      <i class="fa fa-support"></i>
                    </a>
                  </div>
                  <p>Suporte</p>
                </li>
              </ul>
            </div>
            <!-- Service List Area End -->
            <!-- Service Item Area Start -->
            <div class="service-item">
              <div class="row">
                <div class="col-md-12">
                  <!-- Other Service Content list Start -->
                  <div class="services-content-list tab-content " >
                    <!-- Service Content Item Start -->
                    <div class="service-content-item tab-pane active " role="tabpanel"  id="solucoes" >
                      <div class="row">
                      <div class="col-md-6">
                        <div class="service-text">
                          <h3>Soluções empresariais </h3>
                          <div class="service-text-para">
                            <p>Realizamos uma ampla gama de desenvolvimento de aplicativos e sistemas, nos quais iram atender com grande facilidade e eficia as necessidades de sua empresa.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-thumb">
                        <img src="assets/img/Servicos/solucoes.jpg" alt="service">
                      </div>
                    </div>
                    </div>
                    </div>
                    <!-- Service Content Item End -->
                   
                    <!-- Service Content Item Start -->
                    <div class="service-content-item tab-pane " role="tabpanel"  id="multplataforma" >
                      <div class="row">
                      <div class="col-md-6">
                        <div class="service-text">
                          <h3>Deskttop, Mobile, Tablet </h3>
                          <div class="service-text-para">
                            <p>Trabalhamos com qualquer plataforma, buscando não limitar suas opções em apenas um dispositivo.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-thumb">
                        <img src="assets/img/multi-plataforma.png" alt="service">
                      </div>
                    </div>
                    </div>
                    </div>
                    <!-- Service Content Item End -->
                    <!-- Service Content Item Start -->
                    <div class="service-content-item tab-pane " role="tabpanel"  id="tecnologias" >
                      <div class="row">
                      <div class="col-md-6">
                        <div class="service-text">
                          <h3>Full Stack Development</h3>
                          <div class="service-text-para">
                            <p>A D3Team possui uma equipe altamente qualificada, com um grande tempo de experiencia em diversas tecnologinas e linguagens de programação da atualidade.</p>
                            <p>
                              Tais como: <br>
                              C#, Asp.Net MVC, Asp.Ney Web Api, Entity Fremwork, Sql Server, Ionic, Php, MYSQL workbench, Laravel, javascript, jquery, TypeScript, Unity, entre outras.
                            </p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-thumb">
                        <img src="assets/img/linguagens.png" alt="service">
                      </div>
                    </div>
                    </div>
                    </div>
                    <!-- Service Content Item End -->
                      <!-- Service Content Item Start -->
                      <div class="service-content-item tab-pane " role="tabpanel"  id="software-servico" >
                          <div class="row">
                          <div class="col-md-6">
                            <div class="service-text">
                              <h3>Software como serviço</h3>
                              <div class="service-text-para">
                                <p> Trabalhamos com alguns produtos como serviço, ou seja, basta contrar um plano (mensal, semestral, anual) e utilizar os recursos da ferramenta, sem gastar com o desenvolvimento, servidores, e infra estrutura  da aplicação</p>
                              
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="service-thumb">
                            <img src="assets/img/saas.png" alt="service">
                          </div>
                        </div>
                        </div>
                        </div>
                        <!-- Service Content Item End -->
                    
                     <!-- Service Content Item Start -->
                    <div class="service-content-item tab-pane " role="tabpanel"  id="support" >
                      <div class="row">
                      <div class="col-md-6">
                        <div class="service-text">
                          <h3>Planos de suporte</h3>
                          <div class="service-text-para">
                            <p>Trabalhamos com planos de suporte, para ajudar na experiencia de nossos usuarios.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-thumb">
                        <img src="assets/img/service1.png" alt="service">
                      </div>
                    </div>
                    </div>
                    </div>
                    <!-- Service Content Item End -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Service Item Area End -->
          </div>
          <!-- Service Content Area End -->
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
      <!-- Circle Section Start -->
    <section class="circle-section section-padding ">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <!-- section header start -->
          <div class="section-header">
            <h2>Estatísticas</h2>
            <p><img src="assets/img/icon.png" alt="icon"></p>
          </div>
        <!-- section header end -->
        </div>
      </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="circle-item">
              <div class="circle-thumb">
                 <div id="test-circle4" class="test"></div>
              </div>
              <div class="circle-content">
                <h5>Years Of Experience</h5>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="circle-item">
              <div class="circle-thumb">
                <div id="test-circle3" class="test"></div>
              </div>
              <div class="circle-content">
                <h5>Active Customers</h5>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="circle-item">
              <div class="circle-thumb">
                <div id="test-circle2"></div>
              </div>
              <div class="circle-content">
                <h5>Total Clients</h5>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="circle-item">
              <div class="circle-thumb">
                <div id="test-circle1"></div>
              </div>
              <div class="circle-content">
                <h5>Active Domains</h5>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Circle Section End -->
    <div class="clearfix"></div>

      
  <div class="clearfix"></div>
   
    <div id="portfolio" class="gallery section-padding section-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <!-- section header start -->
            <div class="section-header">
              <h2>Nosso <span>Portfolio</span></h2>
              <p><img src="assets/img/icon.png" alt="icon"></p>
            </div>
          <!-- section header end -->
          </div>
        </div>
          <div class="row">
                  <div class=" col-md-12">
                      <div id="isotopemenu">
                          <ul>
                              <li class="all" data-filter="*"><p>all</p></li>
                              <li data-filter=".reseller" class=""><p>Rseller</p></li>
                              <li data-filter=".dedicated" class=""><p>Dedicated</p></li>
                              <li data-filter=".shared" class=""><p>Shared</p></li>
                              <li data-filter=".vps" class="webdesign active"><p>Vps</p></li>
                          </ul>
                      </div>
                      <div id="galleryitems">
                          <div class="reseller single-item">
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio1.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio1.png" alt="gallery">
                              </div>
                          </div>
                          <div class="dedicated single-item" >
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio2.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio2.png" alt="gallery">
                              </div>
                          </div>
                          <div class="vps single-item" >
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio3.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio3.png" alt="gallery">
                              </div>
                          </div>
                          <div class="shared single-item" >
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio4.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio4.png" alt="gallery">
                              </div>
                          </div>
                          <div class="reseller single-item" >
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio5.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio5.png" alt="gallery">
                              </div>
                          </div>
                          <div class="dedicated single-item" >
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio6.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio6.png" alt="gallery">
                              </div>
                          </div>
                          <div class="vps single-item">
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio7.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio7.png" alt="gallery">
                              </div>
                          </div>
                          <div class="reseller single-item">
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio8.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio8.png" alt="gallery">
                              </div>
                          </div>
                          <div class="vps single-item" >
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio9.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio9.png" alt="gallery">
                              </div>
                          </div>
                          <div class="dedicated single-item">
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio10.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio10.png" alt="gallery">
                              </div>
                          </div>
                          <div class="vps single-item">
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio11.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio11.png" alt="gallery">
                              </div>
                          </div>
                          <div class="dedicated single-item">
                              <div class="single-isotope">
                                  <div class="layer">
                                  </div>
                                  <div class="isotope-social">
                                      <a href="assets/img/portfolio12.png" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                  </div>
                                  <img src="assets/img/portfolio12.png" alt="gallery">
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
       
      </div>
  </div>

<div class="clearfix"></div>
  <!-- About  Section Start -->
  <section id="about" class="about-section section-padding section-bg-clr1">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <!-- section header start -->
                <div class="section-header">
                  <h2>Sobre <span> Nos</span></h2>
                  <p><img src="assets/img/icon.png" alt="icon"></p>
                </div>
                <!-- section header end -->
              </div>
            </div>
        <div class="row">
          <div class="col-md-6">
            <div class="about-content">
              <h3>Sobre a D3Tam</h3>
              <div class="about-desc">
              <p> Somos uma empresa StarT.</p>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id  et dolorum fuga.</p>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-thumb"><img src="assets/img/about1.jpg" alt="about"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->
  <div class="clearfix"></div>
  <!-- Team Section Start -->

  <section  class="team-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <!-- section header start -->
          <div class="section-header">
            <h2>Nossos<span> Fundadores</span></h2>
            <p><img src="assets/img/icon.png" alt="icon"></p>
          </div>
        <!-- section header end -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Team List Start -->
          <div class="team-list">
            <div class="row">
            
              <div class="col-md-3  col-sm-6">
                <!-- Team Item Start -->
                <div class="team-item">
                  <div class="team-thumb">
                    <img src="assets/img/team1.png" alt="team">
                  </div>
                   <div class="team-overlay">
                      <ul>
                        <li><a href="https://www.facebook.com/CarlosEduardomtk3"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/carlos-eduardo-911606167/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                    </div>
                  <div class="team-content">
                    <h5><a href="html/team.html">Carlos Eduardo</a></h5>
                    <p>Desenvolvedor</p>
                  </div>
                </div>
                <!-- Team Item End -->
              </div>
              <div class=" col-md-3 col-sm-6">
                <!-- Team Item Start -->
                <div class="team-item">
                  <div class="team-thumb">
                    <img src="assets/img/team2.png" alt="team">
                  </div>
                  <div class="team-overlay">
                      <ul>
                        <li><a href="https://www.facebook.com/edinan.marcondes"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                      </ul>
                    </div>
                  <div class="team-content">
                    <h5><a href="html/team.html">Edinan Moreira</a></h5>
                    <p>Desenvolvedor</p>
                  </div>
                </div>
                <!-- Team Item End -->
              </div>
              
            </div>
          </div>
          <!-- Team List End -->
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section End -->
  <div class="clearfix"></div>
  <!-- support section start -->
    <section class="support-section ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-wrapper">
              <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-8">
                  <!-- support content start -->
                  <div class="support-content">
                    <h2>Supported Team </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor             incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco    laboris nisi ut aliquip ex ea commodo consequat. </p>
                  </div>
                  <!-- support content end -->
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="support-thumb">
                    <img src="assets/img/support.png" alt="">
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- support section end -->
    <div class="clearfix"></div>
    <!-- Counter section Start -->
    <div class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!-- Counter List -->
            <div class="counter-list">
              <!-- Counter Item -->
              <div class="counter-item">
                <div class="counter-thumb"><i  class="fa fa-user"></i><p class="counter">250</p></div>
                  <div class="counter-content">
                    <h6>happy clients</h6>
                  </div>
              </div>
              <!-- Counter Item -->
            </div>
            <!-- Counter List -->
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Counter List -->
            <div class="counter-list">
              <!-- Counter Item -->
              <div class="counter-item">
                <div class="counter-thumb"><i class="fa fa-trophy"></i><p class="counter">57</p></div>
                  <div class="counter-content">
                    <h6>awards winned </h6>
                  </div>
              </div>
              <!-- Counter Item -->
            </div>
            <!-- Counter List -->
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Counter List -->
            <div class="counter-list">
              <!-- Counter Item -->
              <div class="counter-item">
                <div class="counter-thumb"><i class="fa fa-clock-o"></i><p class="counter">100</p></div>
                  <div class="counter-content">
                    <h6>hours worked</h6>
                  </div>
              </div>
              <!-- Counter Item -->
            </div>
            <!-- Counter List -->
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Counter List -->
            <div class="counter-list">
              <!-- Counter Item -->
              <div class="counter-item">
                <div class="counter-thumb"><i  class="fa fa-calendar"></i><p class="counter">250</p></div>
                  <div class="counter-content">
                    <h6>complete projects</h6>
                  </div>
              </div>
              <!-- Counter Item -->
            </div>
            <!-- Counter List -->
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->
  
    <div class="clearfix"></div>
    <!-- Testimonial Sectin Start -->
    <section class="testimonial-section">
      <div class="testimonial-overlay">
            <!-- Testimonail Content Start -->
            <div class="testimonial-content-list tab-content" >
              <div class="testimonial-content tab-pane " role="tabpanel"  id="testimonial1" >
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea     commodo consequat. Duis aute irure dolor in reprehenderit in  velit esse. 
                </p>
              </div>
              <!-- Testimonial Content End -->
              <!-- Testimonial Content start -->
              <div class="testimonial-content testimonial-content1 tab-pane active" role="tabpanel"  id="testimonial2" >
                <p>This is lorem ipsum, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea     commodo consequat. Duis aute irure dolor in reprehenderit in  velit esse.
                </p>
              </div>
              <!-- Testimonial Content End -->
              <!-- Testimonial Content start -->
              <div class="testimonial-content testimonial-content2 tab-pane" role="tabpanel"  id="testimonial3" >
                <p>Hello everyone this is , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea     commodo consequat. Duis aute irure dolor in reprehenderit in  velit esse.
                </p>
              </div>
              <!-- Testimonial Content End -->
            </div>
            <!-- Testimonail Content End -->
        <!-- Testimonial List Start -->
          <div class="testimonial-list" role="tablist">
              <!-- Testimonial Item start -->
              <div class="testimonial-item">
                <div class="testimonial-thumb"><a href="#testimonial1"  data-toggle="tab" aria-expanded="false"><img src="assets/img/testimonial1.png" alt="testimonial"></a></div>
                <div class="testimonial-text">
                  <h5><a href="#testimonial1"  data-toggle="tab" aria-expanded="false">John Doe</a></h5>
                  <p>Web Developer</p>
                </div>
              </div>
              <!-- Testimonial Item End -->
              <!-- Testimonial Item start -->
              <div class="testimonial-item testimonial-item1">
                <div class="testimonial-thumb"><a href="#testimonial2"  data-toggle="tab" aria-expanded="false"><img src="assets/img/testimonial2.png" alt="testimonial"></a></div>
                <div class="testimonial-text">
                  <h5><a href="#testimonial2"  data-toggle="tab" aria-expanded="false">saimon hossain</a></h5>
                  <p>Web Designer</p>
                </div>
              </div>
              <!-- Testimonial Item End -->
              <!-- Testimonial Item start -->
              <div class="testimonial-item">
                <div class="testimonial-thumb"><a href="#testimonial3"  data-toggle="tab" aria-expanded="false"><img src="assets/img/testimonial3.png" alt="testimonial"></a></div>
                <div class="testimonial-text">
                  <h5><a href="#testimonial3"  data-toggle="tab" aria-expanded="false">john abraham</a></h5>
                  <p>UI/UX Designer</p>
                </div>
              </div>
              <!-- Testimonial Item End -->
            </div>        
      </div>
    </section>
    <!-- Testimonial Section End -->
  <div class="clearfix"></div>
      <!--Contact Section-->
    <section id="contact" class="contact-section section-padding ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!--Contact Info Tabs-->
            <div class="contact-info">
                            <div class="row ">
                                <!-- contact-content Start -->
                                <div class="col-md-4">
                                  <div class="contact-content">
                                    <div class="contact-header contact-form">
                                      <h2>Contato</h2>
                                    </div>
                                    <div class="contact-list">
                                      <ul>
                                      
                                        <li>
                                          <div class="contact-thumb"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                          <div class="contact-text">
                                            <p>Contato :<span>+55 27 9 9802 0366</span></p>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="contact-thumb"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                          <div class="contact-text">
                                            <p>Email:<span>Support@d3team.com</span></p>
                                          </div>
                                        </li>
                                       
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <!-- contact-content End -->
                                <!--Form Column-->
                                <div class="form-column col-md-8 col-sm-12 ">
                                    <!-- Contact Form -->
                                    <div class="contact-form ">
                                        <h2>Enviar mensagem</h2>
                                        <!--Comment Form-->
                                        <form method="post" action="#" class="contact-page-form-1">
                                            <div class="row clearfix">
                                                <div class="col-md-6  col-xs-12 form-group">
                                                    <input type="text" name="username" placeholder="Nome*" required>
                                                </div>
                                               
                                                <div class="col-md-6  col-xs-12 form-group">
                                                    <input type="text" name="phone" placeholder="Telefone" required>
                                                </div>
                                                <div class="col-md-12  col-xs-12 form-group">
                                                  <input type="email" name="email" placeholder="Email*" required>
                                                 </div> 
                                                
                                                <div class=" col-md-12   form-group">
                                                    <textarea name="message" placeholder="Sua mensagem..."></textarea>
                                                </div>
                                                <div class=" col-md-12 form-group">
                                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                  </div>
                  <!--End Comment Form -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  <div class="clearfix"></div>
    <!-- client section start -->
    <section class="client-section section-padding section-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header">
              <h2>Nossos <span>clientes</span></h2>
              <p><img src="assets/img/icon.png" alt="icon"></p>
            </div><!-- section-heading -->
            <div class="section-wrapper">
              <div class="client-list">
                <!-- Swiper -->
                              <div class="swiper-container client-container">
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client1.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client2.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client3.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client4.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client5.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client6.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client1.png" alt="client"></a></div></div>
                                      <div class="swiper-slide"><div class="our-client"><a href="#"><img src="assets/img/client2.png" alt="client"></a></div></div>
                                  </div>
                                  <!-- Add Arrows -->
                      <div class="swiper-button-next">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      </div>
                      <div class="swiper-button-prev">
                        <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                      </div>
                              </div><!-- client container -->
              </div><!-- client list-->
            </div><!-- swiper wrapper -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- section -->
    <!-- client section end -->
@stop
