@extends('layouts.home')

@section('content')


  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <p style="margin-left: 30px; font-size: 30px; font-weight: bold; color: white">GinaraShop</p>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="browse.html">Browse</a></li>
                        <li><a href="details.html">Details</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                        <li><a href="profile.html"><img style="margin-right: 10px" src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To GinaraShop</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="container">
              <div class="heading-section">
                <h4><em>Most Popular</em> Right Now</h4>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/gta.jpeg" alt="" />
                    <h4>Grand Theft Auto V<br /><span>Rockstar Game</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 400,00</li>
                      <li><i class="fa fa-download"></i> 140Jt</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/gbf.jpe" alt="" />
                    <h4>Grandblue Fantasy<br /><span>Cygames</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 200,95</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/dota.webp" alt="" />
                    <h4>Dota2<br /><span>Steam-X</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 150,00</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/csgo.png" alt="" />
                    <h4>CS-GO<br /><span>Legendary</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> free</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/mini.webp" alt="" />
                    <h4>Mini Craft<br /><span>Legendary</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/mhw.jpg" alt="" />
                    <h4>Monster Hunter World<br /><span>Capcom</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/warface.jpg" alt="" />
                    <h4>Warface<br /><span>Max 3D</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <img src="assets/images/warc.jpg" alt="" />
                    <h4>Warcraft<br /><span>Legend</span></h4>
                    <ul>
                      <li><i class="fa-solid fa-dollar-sign"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="browse.html">Discover Popular</a>
                  </div>
                </div>
              </div>
            </div>
          </div>      
        
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/dota.webp" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/warface.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Warface</h4><span>Max 3D</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Donwload</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/csgo.png" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  

@endsection