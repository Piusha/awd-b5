<div class="container">
    <div class="row">
        @guest
            <div class="col-md-12">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
                </div>
            </div>
        @else
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
                </div>
            </div>
            
            <div class="col-md-7">
                <div class="navbar navbar-inverse" role="banner">
                    
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
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
                        </ul>
                    
                </div>
            </div>
        @endguest
    </div>
</div>
