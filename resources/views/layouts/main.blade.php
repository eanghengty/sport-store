<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
<body>
        <div class="div-header">
            <div class="div-1">
                <img src="{{asset('images/logo.png')}}" alt="logo" />
            </div>
            <div class="div-2">
                <input type="text" placeholder="ស្វែងរក..." />
                <div class='div-icon'>
                    <i class="fa fa-search icon" aria-hidden="true" ></i>
                </div>
            </div>
            <div class='div-3'>
                <div class="dropdownprofile">
                <span><i class="fa fa-user icon " aria-hidden="true"></i></span>
                @auth()
            <div class='dropdownprofile-content'>
                {{session('name')}}
                <form method="post" action="{{route('logout')}}">
                    @csrf
                    <button type="submit">logout</button>
                </form>
            </div>
            @endauth
            @guest()
            <div class='dropdownprofile-content'>
                
                <a href="{{route('login')}}">Login</a>
            </div>
            @endguest
</div>
            </div>
            <div class='div-4'>
                <i class="fa fa-shopping-cart icon" aria-hidden="true">
                    <a href="/addToCart">s</a>
                </i>
            </div>
           
            
             
        </div>
        <div>
            @yield('content')
            
        </div>
        <div class='footer-div-1'>
            {{-- {/* upper */} --}}
            <div class='footer-div-2'>
            <div class='footer-div-3'>
                {{-- {/* logo and description */} --}}
            <div class='footer-div-4'>
                <div class='footer-div-5'>
                    <img src="{{asset('images/logo.png')}}" alt="logo" />
                </div>
                {{-- {/* footer-div-5 */} --}}
                <div class='footer-div-6'>
                    <p>គោលបំណងរបស់យើងគឺ</p>
                    <p>ជួយសម្រួលក្នុងការទិញរបសើលោកអ្នក</p>
                </div>
                {{-- {/* footer-div-6 */} --}}
            </div>
            {{-- {/* footer-div-4 */}
            {/* logo and description */}
            {/* horizontal line */} --}}
            <div class='footer-div-7'>
            <div class='footer-div-8'></div>
            </div>
            {{-- {/* horizontal line */}
            {/* right part */} --}}
            <div class='footer-div-9'>
                <div class='footer-div-10'>
                    <div class='footer-div-11'>
                        <FaLocationArrow class='footer-div-11-icon'></FaLocationArrow>
                    </div>
                    <div class='footer-div-12'>
                        <p>STEM Build, Phnom Penh, Cambodia</p>
                    </div>
                </div>
                <div class='footer-div-13'>
                    <div class='footer-div-14'>
                        <BsChatLeftFill class='footer-div-14-icon'></BsChatLeftFill>
                    </div>
                    <div class='footer-div-15'>
                        <p>keilakits@gmail.com</p>
                    </div>
                </div>
                <div class='footer-div-16'>
                    <div class='footer-div-17'>
                        <BsTelephoneFill class='footer-div-17-icon'></BsTelephoneFill>
                    </div>
                    <div class='footer-div-18'>
                        <p>012 345 678</p>
                    </div>
                </div>
            </div>
            {{-- {/* right part */} --}}
            </div>
            {{-- {/* upper */}
            {/* lower */} --}}
            <div class='footer-div-19'>
                <div class='footer-div-20'>
                    <p>Copyright 2022 - Keila Kits</p>
                </div>
            </div>
            {{-- {/* lower */} --}}
            </div>
            {{-- {/* footer-div-2 */} --}}
        </div>

        <script>
            var Logform = document.getElementById("Logform");
            var Regform = document.getElementById("Regform");
            var line = document.getElementById("line");
    
            function reg(){
                Regform.style.transform = "translateX(0px)";
                Logform.style.transform = "translateX(0px)";
                // line.style.transform ="translateX(120px)";
                // line.style.backgroundColor = "#ff6347";
            }

            function log(){
                Regform.style.transform = "translateX(360px)";
                Logform.style.transform = "translateX(360px)";
                // line.style.transform ="translateX(-10px)";
                // line.style.backgroundColor = "#00B1FF";
            }
        </script>

    </body>
</html>
