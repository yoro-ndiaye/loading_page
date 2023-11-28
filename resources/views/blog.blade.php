<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boldo</title>
    <link rel="stylesheet" href="{{asset('cssblog/blogstyle.css')}}" />
    <link rel="stylesheet" href="{{asset('cssblog/globals.css')}}" />
  </head>
  <body>
    <div class="blog">
      <div class="div">
        <div class="group">
          <div class="logo">
            <div class="text-wrapper">Boldo</div>
            <div class="logo-shape">
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
            </div>
          </div>
          <div class="navigation">
            <div class=""><a class="text-wrapper-2" href="{{route('dashboard')}}">Homepage</a></div>
            <div class=""><a class="text-wrapper-2" href="{{route('blog')}}">Blog</a></div>
            <div class=""><a class="text-wrapper-2" href="{{route('about')}}">About</a></div>
            <div class="frame"><div class="nom"> <strong class="start-now">{{ Auth::user()->name }}</strong> </div></div>
          </div>
        </div>
        <div class="featured-article">
          <img class="img" src="imgblog/rectangle-1270-6.png" />
          <div class="frame-2">
            <div class="frame-3">
              <div class="frame-4">
                <div class="text-wrapper-3">Category</div>
                <div class="text-wrapper-4">November 22, 2021</div>
              </div>
              <p class="p">Pitch termsheet backing validation focus release.</p>
            </div>
            <div class="frame-4 third">
              <img class="ellipse" src="imgblog/ellipse-10-2.png" />
              <div class="john-doe">Chandler Bing</div>
            </div>
          </div>
        </div>
        <div class="heading">
          <div class="our-blog">Blog</div>
          <div class="value-proposition">Thoughts and words</div>
        </div>
        <div class="articles-row">
          <div class="article">
            <img class="rectangle-3" src="imgblog/rectangle-1270-5.png" />
            <div class="frame-5">
              <div class="frame-3">
                <div class="frame-4 first">
                  <div class="text-wrapper-3">Category</div>
                  <div class="text-wrapper-4">November 22, 2021</div>
                </div>
                <p class="text-wrapper-5">Pitch termsheet backing validation focus release.</p>
              </div>
              <div class="frame-4 second">
                <img class="ellipse" src="imgblog/ellipse-10-2.png" />
                <div class="john-doe">Chandler Bing</div>
              </div>
            </div>
          </div>
          <div class="article-2">
            <img class="rectangle-4" src="imgblog/rectangle-1270-4.png" />
            <div class="frame-5">
              <div class="frame-3">
                <div class="frame-4 first">
                  <div class="text-wrapper-3">Category</div>
                  <div class="text-wrapper-4">November 22, 2021</div>
                </div>
                <p class="text-wrapper-5">
                  Seed round direct mailing non-disclosure agreement graphical user interface rockstar.
                </p>
              </div>
              <div class="frame-4 second">
                <img class="ellipse" src="imgblog/ellipse-10.png" />
                <div class="john-doe">Rachel Green</div>
              </div>
            </div>
          </div>
          <div class="article-3">
            <img class="rectangle-4" src="imgblog/rectangle-1270-3.png" />
            <div class="frame-6">
              <div class="frame-3">
                <div class="frame-4 first">
                  <div class="text-wrapper-3">Category</div>
                  <div class="text-wrapper-4">November 22, 2021</div>
                </div>
                <p class="text-wrapper-5">
                  Beta prototype sales iPad gen-z marketing network effects value proposition
                </p>
              </div>
              <div class="frame-4 second">
                <img class="ellipse" src="imgblog/ellipse-10-1.png" />
                <div class="john-doe">Monica Geller</div>
              </div>
            </div>
          </div>
        </div>
        <div class="articles-row-2">
          <div class="article">
            <img class="rectangle-4" src="imgblog/rectangle-1270-2.png" />
            <div class="frame-5">
              <div class="frame-3">
                <div class="frame-4 first">
                  <div class="text-wrapper-3">Category</div>
                  <div class="text-wrapper-4">November 22, 2021</div>
                </div>
                <p class="text-wrapper-5">Pitch termsheet backing validation focus release.</p>
              </div>
              <div class="frame-4 second">
                <img class="ellipse" src="imgblog/ellipse-10-2.png" />
                <div class="john-doe">Chandler Bing</div>
              </div>
            </div>
          </div>
          <div class="article-2">
            <img class="rectangle-4" src="imgblog/rectangle-1270-1.png" />
            <div class="frame-5">
              <div class="frame-3">
                <div class="frame-4 first">
                  <div class="text-wrapper-3">Category</div>
                  <div class="text-wrapper-4">November 22, 2021</div>
                </div>
                <p class="text-wrapper-5">
                  Seed round direct mailing non-disclosure agreement graphical user interface rockstar.
                </p>
              </div>
              <div class="frame-4 second">
                <img class="ellipse" src="imgblog/ellipse-10.png" />
                <div class="john-doe">Rachel Green</div>
              </div>
            </div>
          </div>
          <div class="article-3">
            <img class="rectangle-4" src="imgblog/rectangle-1270.png" />
            <div class="frame-6">
              <div class="frame-3">
                <div class="frame-4 first">
                  <div class="text-wrapper-3">Category</div>
                  <div class="text-wrapper-4">November 22, 2021</div>
                </div>
                <p class="text-wrapper-5">
                  Beta prototype sales iPad gen-z marketing network effects value proposition
                </p>
              </div>
              <div class="frame-4 second">
                <img class="ellipse" src="imgblog/ellipse-10-1.png" />
                <div class="john-doe">Monica Geller</div>
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="text-wrapper-6">Latest news</div>
       
        <div class="footer-CTA">
          <div class="call-to-action">
            <div class="group-wrapper">
              <div class="div-wrapper">
                <div class="group-2">
                  <p class="text-wrapper-7">An enterprise template to ramp up your company website</p>
                  <div class="group-3">
                    <div class="overlap-group-wrapper">
                      <div class="overlap-group"><div class="text-wrapper-8">Your email address</div></div>
                    </div>
                    <div class="buttons-2"><div class="text-wrapper-9">Start now</div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="logo-2">
              <div class="text-wrapper-10">Boldo</div>
              <div class="logo-shape-2">
                <div class="rectangle-5"></div>
                <div class="rectangle-6"></div>
              </div>
            </div>
            <p class="text-wrapper-11">
              Social media validation business model canvas graphical user interface launch party creative facebook iPad
              twitter.
            </p>
            <div class="text-wrapper-12">All rights reserved.</div>
            <div class="overlap">
              <div class="group-4">
                <div class="group-5">
                  <div class="home-products">Home<br /><br />Products<br /><br />Services</div>
                  <div class="text-wrapper-13">Landings</div>
                  <div class="home-careers">Home<br /><br />Careers<br /><br />Services</div>
                  <div class="text-wrapper-14">Company</div>
                  <div class="blog-products">Blog<br /><br />Products<br /><br />Services</div>
                  <div class="text-wrapper-15">Resources</div>
                </div>
              </div>
              <div class="frame-7"><div class="text-wrapper-16">Hiring!</div></div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>
