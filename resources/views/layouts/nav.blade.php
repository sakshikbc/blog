
  <nav class="navbar navbar-default nav-transprent mb100 circle">
    <!-- style to use:  fill, stroke, circle, shift -->
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-sample" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">
                <img width="90" src="dropship-content/img/bigly-white.svg" alt="">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-sample">
              
              <ul class="nav navbar-nav navbar-right">
                          <li>
                           <a href="/">Home</a> 
                          </li>
                          <li>
                           <a href="pricing">Pricing</a> 
                          </li>
                  
                            <li>
                            <a href="/tools">Features</a>
                          </li>
                           <li>
                            <a href="/tools">Services</a>
                          </li>
                          <li>
                            <a href="{{ route('allposts') }}">Blog</a>
                          </li>
                            <li>
                            <a href="/tools">Resources</a>
                          </li>
                          <li>
                            <a href="/tools">Get Started</a>
                          </li>

                  
                          <li> <a class="nav-link" href="{{ route('newBlog') }}">New Blog</a></li>
                          <li> <a class="nav-link" href="{{ route('showAll') }}">Show all</a></li>
                         
                                                    
                        </ul>

            </div>
          </div>
  </nav>