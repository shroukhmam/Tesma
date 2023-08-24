<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Tesma" />

    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> -->
    <link rel="stylesheet" href="{{URL::asset('assets/front/Bootstrap/static/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/animate.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />-->
    <link rel="stylesheet" href="{{URL::asset('assets/front/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/front/slick/slick.css')}}">
    <link href="{{URL::asset('assets/front/css/style.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/carousel.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/items.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/about.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/service.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/work.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/skill.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/team.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/contact.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/footer.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/downloadTop.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/front/css/servicePage.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title> TESMA</title>
    <link rel="icon" type="images/x-icon" href="{{URL::asset('assets/front/image/7.png')}}" />

</head>


<div id="root">
    @include('pages.front.layout.navbar')
    @include('pages.front.layout.slider')
    <div class="contact contacts" >
        <div class="overlay"></div>
        <div class="container">
            <div class="col-md-8 offset-md-2 ">
                <h2 class=" wow fadeInDown " data-wow-duration="1s" data-wow-delay=".2s">Contact<span class='red'>
                        us</span></h2>
                <span class="line"></span>
                <p class="heading-text  wow fadeInUp " data-wow-duration="1s" data-wow-delay=".2s">Claritas est etiam
                    processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera
                    gothica, quam nunc putamus parum</p>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 ">
            <div class="row">
                <div class="col-md-6 information" style="text-align: left !important;">
                    <div class="heading heading-with-icon icon-left d-flex"><div class="icon" style="width:auto;"><i style="border-color:#333; text-align:center;border-width:1px;background-color:#333;box-sizing:content-box;height:42px;width:42px;line-height:42px;border-radius:50%;font-size:21px;" aria-hidden="true" class="fontawesome-icon fa fa-phone-square circle-yes"></i></div><h2 class="content-box-heading fusion-responsive-typography-calculated" style="--h2_typography-font-size: 18px; line-height: 1.1; --fontSize: 18; --minFontSize: 18;padding: 7px;" data-fontsize="18" data-lineheight="19.8px">Phone</h2></div>
                    <p class="text-wrap">+58(667) 543 54 55</p>
                    <br>
                    <div class="heading heading-with-icon icon-left d-flex"><div class="icon" style="width:auto;"><i style="border-color:#333; text-align:center;border-width:1px;background-color:#333;box-sizing:content-box;height:42px;width:42px;line-height:42px;border-radius:50%;font-size:21px;" aria-hidden="true" class="fontawesome-icon fa fa-map-marker circle-yes"></i></div><h2 class="content-box-heading fusion-responsive-typography-calculated" style="--h2_typography-font-size: 18px; line-height: 1.1; --fontSize: 18; --minFontSize: 18;padding: 7px;" data-fontsize="18" data-lineheight="19.8px">Brookfield ADDRESS</h2></div>
                    <p> 359 CENTRAL MIRA STREET<br />VATUTINA 79 / 99 UKRAINE</p>
                   <br>
                    <div class="heading heading-with-icon icon-left d-flex"><div class="icon" style="width:auto;"><i style="border-color:#333; text-align:center;border-width:1px;background-color:#333;box-sizing:content-box;height:42px;width:42px;line-height:42px;border-radius:50%;font-size:21px;" aria-hidden="true" class="fontawesome-icon fa fa-envelope circle-yes"></i></div><h2 class="content-box-heading fusion-responsive-typography-calculated" style="--h2_typography-font-size: 18px; line-height: 1.1; --fontSize: 18; --minFontSize: 18;padding: 7px;" data-fontsize="18" data-lineheight="19.8px">Email</h2></div>
                    <p><a href="#">Support@DOMIAN.COM</a><br/>
                    <a href="#">Support@DOMIAN.COM</a></p>
               
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" required="" name="Name" placeholder=" Your name"
                                    class="form-control"></input>
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" placeholder="Your email" class="form-control" />
                            </div>
                            <div class="col-md-12">
                                <textarea rows="9" required="" name="Message" placeholder="Your message"
                                    class="form-control"></textarea>
                            </div>
                            <div class="col-md-4 offset-md-8">
                                <input type="submit" value="Send" class="btn btn-form" />
                            </div>

                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
    @include('pages.front.layout.footer')
</div>

<script src="{{URL::asset('assets/front/jQuery/jquery-3.4.1.min.js')}}"></script>
<script src="{{URL::asset('assets/front/Bootstrap/static/js/popper.js')}}"></script>
<script src="{{URL::asset('assets/front/Bootstrap/static/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="{{URL::asset('assets/front/js/wow.min.js')}}"></script>
<script>
new WOW().init();
</script>
<script src="{{URL::asset('assets/front/js/script.js')}}"></script>
<script src="{{URL::asset('assets/front/slick/slick.js')}}"></script>

</body>

</html>