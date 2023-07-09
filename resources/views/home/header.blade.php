<!-- Header -->
<script src="https://kit.fontawesome.com/6d29645cc6.js" crossorigin="anonymous"></script>
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><h2>SPEEDY <em>RENT</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0" action="{{route('searched')}}">
                            <input class="form-control  mt-1" type="search" placeholder="Search" name="search" value="" aria-label="Search">
                            <button class="btn btn-link " type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #f33f3f;"></i></button>
                        </form>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">products</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('products')}}">All Products</a>
                            <a class="dropdown-item" href="{{route('allcategories')}}">Categories</a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MORE</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('about')}}">About Us</a>
                            <a class="dropdown-item" href="{{route('contact')}}">contact us</a>

                        </div>
                    </li>


                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                    @endauth

                    @auth()
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('message')}}">messages</a>
                            <a class="dropdown-item" href="{{route('book')}}">my reservation</a>
                            <a class="dropdown-item" href="{{route('editProfile')}}">Change Username</a>
                            <a class="dropdown-item" href="{{route('changePassword')}}">Change Password</a>

                        </div>
                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</header>
