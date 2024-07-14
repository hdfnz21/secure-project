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
                    <div style="display: flex; align-items: center;">
                        <a href="index.html" class="logo">
                            <img src="assets/images/skemlogo.png" style="max-width: 55px; max-height: 55px;" alt="logo">
                        </a>
                        <h3 style="margin-left: 10px;">SKEMTEXT</h3>
                    </div>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="explore.html">Textbook</a></li>
                        <li><a href="details.html">Student Details</a></li>
                        <li><a href="create.html">Issues</a></li>

                        @if (Route::has('login'))
                            
                                @auth

                                
                                    <x-app-layout>
                                    </x-app-layout>
                                


                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                        @endif

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