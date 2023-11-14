<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing_Page</title>

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/about.css')}}" />
  </head>

  <body>
    <!--En-tete de notre site-->
    <div class="about">
      <nav>
        <div class="logo">
            <img src="{{asset('img/logo1.png')}}" alt="">
            <h1>Boldo</h1>
        </div>
        <div class="menu">
          <div class="link">
            <ul>
                <li><a href="{{route('dashboard')}}">Homepage</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('about')}}">About</a></li>
            </ul>
            <button>{{ Auth::user()->name }}</button>
          </div>
            
          <div class="menu-hamburger">
            <h1>
                MENU <img src="{{asset('img/menu-btn.png')}}" alt="">
            </h1>
          </div>
        </div>
        
        
      </nav>

      <header>
        <div class="title">
          <p>About</p>
          <h1>We love to make great <br>things, things that matter.</h1>
          <span  style="font-size: 12px;">Funding handshake buyer business-to-business metrics iPad 
          partnership. First mover advantage <br>innovator success deployment non-disclosure.</span>
        </div>
        <div class="galerie">
          <div class="img">
            <img src="{{asset('img/rectangle-1270.png')}}" alt="">
            <img src="{{asset('img/rectangle-1273.png')}}" alt="">
          </div>
          <img src="{{asset('img/rectangle-1271.png')}}" alt="">
          <div class="img">
            <img src="{{asset('img/rectangle-1272.png')}}" alt="">
            <img src="{{asset('img/rectangle-1274.png')}}" alt="">
          </div>
          
        </div>
      </header>
    </div>

    
  <section class="section1">  
    <div class="infos">
      <p>Our story</p>
      <h1>Handshake infographic mass market <br>crowdfunding iteration.</h1>
      <p>Conversion angel investor entrepreneur first mover advantage. Handshake <br>infographic mass 
      market crowdfunding iteration. Traction stock user experience <br>deployment beta innovator incubator focus. 
      Sales user experience branding growth <br>hacking holy grail monetization conversion prototype stock network effects. 
      Learning <br>curve network effects return on investment bootstrapping business-to-consumer.</p>
    </div>
  </section>

  <section class="section2">
    <div class="number">
        <div class="head">
            <p>Our numbers</p>
            <h1>Handshake infographic mass market <br>crowdfunding iteration.</h1>
        </div>
        <div class="corps">
            <div class="fils">
                <h1>120m</h1>
                <p>Cool feature title</p>
            </div>
            <div class="fils">
                <h1>10.000</h1>
                <p>Cool feature title</p>
            </div>
            <div class="fils">
                <h1>240</h1>
                <p>Cool feature title</p>
            </div>
        </div>
    </div>
  </section>

  <section class="section3">
    <div class="team">
        <div class="head">
            <p>Our team</p>
            <h1>The leadership team</h1>
            <p>Conversion angel investor entrepreneur first mover advantage. Handshake 
            <br>infographic mass market crowdfunding iteration. Traction stock user experience
            <br>deployment beta innovator incubator focus.</p>
        </div>
        <div class="corps">
            <div class="person">
                <img src="{{asset('img/image-2.png')}}" alt="">
                <h1>Michael Scott</h1>
                <p>General Manager</p>
            </div>
            <div class="person">
                <img src="{{asset('img/image-1.png')}}" alt="">
                <h1>Dwight Schrute</h1>
                <p>General Manager</p>
            </div>
            <div class="person">
                <img src="{{asset('img/image.png')}}" alt="">
                <h1>Pam Beetsley</h1>
                <p>General Manager</p>
            </div>
        </div>
    </div>
  </section>

  <section class="section4">
    <div class="values">
        <div class="head">
            <p>Our values</p>
            <h1>Things in we believe</h1>
            <p style="font-size: 12px;">Conversion angel investor entrepreneur first mover advantage. Handshake <br>infographic mass market
               crowdfunding iteration. Traction stock user experience <br>deployment beta innovator incubator focus.</p>
        </div>
        <div class="corps">
            <div class="parent">
                <img src="{{asset('img/image-4.png')}}" alt="">
                <div class="fils">
                    <h1>We are commited.</h1>
                    <p>Conversion angel investor entrepreneur first mover advantage. <br> 
                      Handshake infographic mass market crowdfunding iteration.</p>
                </div>
            </div>
            <div class="parent">
                <img src="{{asset('img/image-5.png')}}" alt="">
                <div class="fils">
                    <h1>We are responsible.</h1>
                    <p>Conversion angel investor entrepreneur first mover advantage. <br>
                      Handshake infographic mass market crowdfunding iteration.</p>
                </div>
            </div>
            <div class="parent">
                <img src="{{asset('img/image-3.png')}}" alt="">
                <div class="fils">
                    <h1>We aim for progress.</h1>
                    <p>Conversion angel investor entrepreneur first mover advantage. <br>
                      Handshake infographic mass market crowdfunding iteration.</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="section5">
    <div class="contact">
        <h1>An enterprise template to ramp <br>up your company website</h1>
        <div class="envoi">
            <form action="">
                <input type="text" placeholder="Your email address">
                <input type="submit" value="Start now">
            </form>
        </div>
    </div>
  </section>

  <!--Pied de page de notre site-->
  <footer  class="footer">
      <div class="container">
          <div class="row">
              <div class="footer-col">
                  <div class="logo">
                    <img src="{{asset('img/logo2.png')}}" alt="">
                    <h1>Boldo</h1>
                  </div>
                  <p>Social media validation business model <br>canvas graphical user interface launch <br>party 
                  creative facebook iPad twitter.</p>
                  <p>All right reserved.</p>
              </div>
              <div class="footer-col">
                  <h4>Landings</h4>
                  <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Product</a></li>
                      <li><a href="#">Services</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>Company</h4>
                  <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Careers <span>Hiring!</span></a></li>
                      <li><a href="#">Services</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>Resources</h4>
                  <ul>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Products</a></li>
                      <li><a href="#">Services</a></li>
                  </ul>
              </div>  
          </div>
      </div>    
      
  </footer>

  <script>
    const menuhamburger = document.querySelector(".menu-hamburger")
    const menu = document.querySelector(".link")

    menuhamburger.addEventListener('click',()=>{
    menu.classList.toggle('mobile-menu')
    })
  </script>
    
  </body>
</html>
