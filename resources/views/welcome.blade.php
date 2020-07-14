
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MiniBoOk</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Pangolin' rel='stylesheet'>

        <!-- Bootstrap -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
      
        <!-- jQuery -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        
        <script src="js/scripts.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Font awesome -->
        <link 
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
            rel="stylesheet"  type='text/css'> 
            

         <!--JAVASCRIPT CODE HERE-->           
      


                <script type="text/javascript">
                        function show_sidebar()
                        {
                        document.getElementById('sidebar').style.visibility="visible";
                        }
                        
                        function hide_sidebar()
                        {
                        document.getElementById('sidebar').style.visibility="hidden";
                        }
                        </script>
     <!--   ============================================== -->



<style>
      
      @import url(https://fonts.googleapis.com/css?family=Indie+Flower);
    
    body{
                background-color: rgb(106, 180, 181);
               /* background-image: url("img/fond_ecran3.jpg");*/
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.8;
                font-family: 'Indie Flower';
                
                           
            }
            .container {
                width: 520px;
                height: 550px;
                background: url("img/notebook.jpg");
                position: relative;
                margin-top: 350px;
                margin-right : 570px;
                margin-bottom: 100px;
                opacity: 1;
                font-family: 'Indie Flower';
               
                transition: "box-shadow" 0.2s ease-in-out 0s;
               
                
              
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                perspective: 1000px;
              
            }    
            .container:hover{
                box-shadow: 10px 10px;
            }

         
            .cover {
                width: 500px;
                height: 100%;
            
                position: absolute;
                left: 40px;
                background-color: white;
                background-image:  url("img/selk.png");
                background-repeat: no-repeat;
                transform: rotateY(0deg);
                transform-style: preserve-3d;
                transform-origin: left;
                transition: all .9s ease-in-out;
                opacity: 1;
                border-top-right-radius: 30px;
                border-bottom-right-radius: 30px;
                
               
                

            }
            .container:hover .cover{
                transform: rotateY(-180deg);
               
            }

         
           

            figure {
                margin: 0;
                display : block;
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                opacity: 1;
                animation-duration: 5s;
                
                }

            figure.front {
                background: url("img/image.jpg");
                opacity: 1;
                
                

            }

            figure.back {
                background: url("img/notebook2.png");
                background-repeat: no-repeat;
                transform: rotateY(180deg);
               /* opacity: 0.4;*/
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
                box-shadow: -10px 10px ;

               
            }
            .navbar {
                 
                 background: rgb(13,26,70);
                 opacity: 0.8;
                
             }

               .login-box{
                 
                 width: 280px;
                 position: absolute;
                 transition: all .2s ease-in;
                 top: 50%;
                 left: 50%;
                 transform: translate(-50%,-50%);
                 color: blue;
                 transition-delay: 0.35s;

                /* transition-delay: 0.8s;*/
                /* visibility: hidden;

             }
            
           /*  .container:hover .login-box{
                 width: 280px;
                 position: absolute;
                 transition-timing-function: linear;
                 transition: all .3s ease-in;
                 transition-delay: 0.8s;
                 top: 46%;
                 left: 57%;
                 transform: translate(-50%,-50%);
                 color: blue;
               /*  visibility:visible;*/
                 
                
             }
             

             .log{
                 float: left;
                 font-size: 50px;
                 border-bottom: 3px groove blue;
                 
             
                 margin-bottom: 30px;
                 margin-left: 38px;
                 padding: 0px 100px ;
             }

           /*  .textbox{
                 width: 100%;
                 overflow: hidden;
                 font-size: 20px;
                 padding: 8px 0;
                 margin: 8px 0;
                 border-bottom:0px solid #87CEEB;
             }*/

             input#email{
                 width: 100%;
                 overflow: hidden;
                 font-size: 20px;
                 padding: 8px 0;
                 margin-bottom: -5px;
                 margin-left: 65px;
                 top : 30%;
                 bottom: 50%;
                 border-bottom:0px solid #87CEEB;


                 border: none;
                 outline: none;
                 background: none;
                 color: blue;
                 float : left;
             }

             #mail{
                /* width: 100%;
                 overflow: hidden;
                 font-size: 20px;
                 padding: 8px 0;
                 margin: 8px 0;
                 top : 30%;
                 bottom: 50%;
                 border-bottom:0px solid #87CEEB;*/





                 width: 100%;
                 overflow: hidden;
                 font-size: 20px;
                 padding: 8px 0;
                 margin-bottom: -50px;
                 margin-left: 30px;
                 top : 30%;
                 bottom: 50%;
                 border-bottom:0px solid #87CEEB;


                 border: none;
                 outline: none;
                 background: none;
                 color: blue;
                 float : left;
             }

             input#password{
                width: 100%;
                 overflow: hidden;
                 font-size: 20px;
                 top: 100%;
                 margin-bottom: 20px;
                 margin-left: 30px;
                 border-bottom:0px solid #87CEEB;


                 border: none;
                 outline: none;
                 background: none;
                 color: blue;
                 float : left;
                 
             }
            

            /* .textbox i{
                 width: 26px;
                 float: left;
                 text-align:center;
             }*/

            /* .textbox input{
                 border: none;
                 outline: none;
                 background: none;
                 color: blue;
                 font-size: 20px;
                 width: 80%;
                 float : left;
                 margin: 0 10px;
             }*/
           

            .btn{
                width: 100%;
                background: none;
                border: 2px solid #87CEEB;
                color: blue;
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                margin-bottom: 12px;
            }


            
            


    
    </style>
   
    </head>

    <body id='page-top' class='index'>

            <!--Naviguation (for small views) -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Breand and toggle get grouped for better mobile display-->
                         <div class="navbar-header page-scroll">
                              <button type="button" class="navbar-toggle" data-toggle="collapse"
                               data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle naviguation</span>
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span>   
                               </button>
                               <a class="navbar-brand" href="#page-top"> MiniBoOk </a>
                         </div>

                         <!-- collect the nav links,forms,and other content for toggling-->

                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                             @if (Route::has('login'))
                            <ul class="nav navbar-nav navbar-right">
                            @auth
                                <li class="hidden">
                                    <a href="{{ url('/home') }}"> MiniBoOk</a>
                                </li>
                            @else    

                                <li class="page-scroll">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>   
                                @if (Route::has('register'))
                                <li class="page-scroll">
                                    <a href="{{ route('register') }}">Register</a>
                                </li>     
                                @endif
                            @endauth    
                         </ul>
                    @endif
                   </div> 
                   <!-- /.navbar-collapse--> 
               </div>
               <!-- /.container-fluid -->
            </nav> 

            <div class="container" style="border:1px solid #cecece; border-radius: 30px"  onMouseOver="show_sidebar()" onMouseOut="hide_sidebar()">
                <div class="cover" >
                    <figure class="front" style="border:1px solid #cecece;font-family:'Indie Flower'; border-top-right-radius: 30px; border-bottom-right-radius: 30px" >
                        <div>
                            <h1> &nbsp &nbsp Welcome To MiniBoOk</h1>
                            
                        </div>
                    
                    </figure>
                    <!-- container page (lisser) => -->
                    <figure class="back" >
                        <h1 style="text-align:right">  &nbsp &nbsp &nbsp &nbsp </h1>
                    </figure>

                    
                </div>
                      <!-- container page (limen) => login -->
                <div id="sidebar" style="visibility: hidden">
                    <div class="login-box">
                       <h1 class="log"> Login </h1>

                        <div class="textboxmail" id="textboxemail">
                            <i id="mail" class="fa fa-envelope-o" aria-hidden="false"></i>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="E-mail" >

                            
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                        </div>


                        <div class="textboxoass" id="textboxpassword">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                       
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input class="btn" type="button" name="" value="Sign In">

                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                         <input class="btn" type="button" name="" value="Sign Up">        

                    </div>
                </div>
                
              
       
               
                <h1>&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp </h1>

             </div>

            <!-- Header --> 
            <header>

             














               <!-- <div class="container" >
                     <div class="row">
                        <div class="col-xg-12">
                            <img class="img-responsive img-fluid" src="img/image.jpg" alt="girl-reading-book">
                            <div class="text-block">
                                <h1 class="h1">WelCome To MiniBoOk</h1>
                                <hr class="star-light">
                                <p>Read a book - write a story - share your ideas</p>
                            </div>
                        </div>
                      </div>
                </div>-->
            </header>                    
    </body>
</html>
