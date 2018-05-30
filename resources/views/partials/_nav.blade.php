<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src=/logo.jpg alt="EUNCCU" border="0" height="50" width="70"/>
          <a class="navbar-brand" href="/">Portal</a>
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/')? "active" :""}}"><a href="/">Home </a></li>
            <li class="{{Request::is('portal')? "active" :""}}"><a href="/portal">Blog Posts </a></li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bs Registration<span class="caret"></span>
                                    </a>
               <ul class="dropdown-menu" role="menu">
                                        <li {{Request::is('/bibles/create')? "active" :""}}>
                                          <a href="{{ route('bibles.create') }}">Register</a></li>
                                         <li><a href="#">Edit</a></li>

                                        
                                    </ul>
            <li> <a href="http://www.eunccu.org">EUNCCU Website</a></li>
<!-- 
            <li><a href="/closure">Leadership Nominatiion</a></li>
            <li><a href="/closure">Mission Application</a></li>
            <li><a href="/closure">EUNCCU Library</a></li>
 -->            
            
          </ul>
              
          <ul class="nav navbar-nav navbar-right">
            <li class="{{Request::is('contact')? "active" :""}}"><a href="/contact">Contact Us</a></li>
            
            
               

            
                        
                            @if (Auth::guest())
                            <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                          <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Login/Register <span class="caret"></span>
                                    </a>
                            <ul class="dropdown-menu" role="menu">
                                <li{{Request::is('login')? "active" :""}}><a href="{{ route('login') }}">Login</a></li>
                                <li {{Request::is('register')? "active" :""}}><a href="{{ route('register') }}">Register</a></li>
                              </ul>
                            </li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                      <!-- Adminstrator Rights -->
                                      @if(auth()->user()->isAdmin())
                            
                                      <li><a href="{{ route('posts.index') }}">Posts</a></li>
                                       <li><a href="{{ route('bibles.index') }}">Bs Reg</a></li>
                                       <li><a href="{{ route('users.index') }}">Users</a></li>
                                       <li><a href="{{ route('category.index') }}">Categories</a></li>

                                        <hr>
                                        @endif
                                        <li {{Request::is('logout')? "active" :""}}>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>


