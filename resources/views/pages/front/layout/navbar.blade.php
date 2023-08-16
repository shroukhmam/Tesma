<nav class="navbar navbar-expand-lg fixed-top home">
                 <a class="navbar-brand" href="#"><img style="width: 200px;margin-left: 50px;" src="{{URL::asset('assets/front/image/2.png')}}" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-awesome fa fa-bars"></span>
                        <span class="navbar-toggler-awesome fa fa-times hide"></span>
                  </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
                 <li class="nav-item active li" data-class=".home">
                    <a class="nav-link" href="{{route('front.front')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" data-class=".about">
                    <a class="nav-link" href="{{route('front.front')}}#about">ABOUT</a>
               </li>
               <li class="nav-item" data-class=".servicet">
                    <a class="nav-link drop" href="#">SERVICES <i class="fa fa-caret-down"></i></a>
                    <div class="dropmenu">
                      <a class="nav-link" href="{{route('front.marketing')}}">marketing</a>
                      <hr>
                      <a class="nav-link" href="{{route('front.business')}}">Business Digitization & Integrations</a> 
                    </div>
               </li>
               
               <!-- <li class="nav-item" data-class=".works">
                    <a class="nav-link" href="#works">OURWORKS</a>
               </li>
               <li class="nav-item" data-class=".skills">
                    <a class="nav-link" href="#skills">SKILLS</a>
               </li> -->
               <li class="nav-item" data-class=".contact">
                    <a class="nav-link" href="#contact">CONTACT</a>
               </li>
         </ul>
       </div>
     </nav>