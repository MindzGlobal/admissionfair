<!-- Header navbar start -->
<div class="header-navbar" id="navbar-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{ asset('student/images/virtual-logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
                         data-animations="fadeInUp">
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="#">Home</a>
                            <li><a href="#" onClick="parent.open('https://www.mindzglobal.com/contact-us/')">Contact</a>
                            </li>
                            @guest
                          
                        @else
                            <li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name.''.Auth::user()->last_name}} <span class="caret"></span>
                                </a>
                            </li>
                            <li>
                                 <a class="dropdown-item" href="{{ route('student.logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                {{--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">  --}}
                                    

                                    <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                {{--  </div>  --}}
                            </li>
                        @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End of Header navbar start -->