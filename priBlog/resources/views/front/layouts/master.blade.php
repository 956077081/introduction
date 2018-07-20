<html>
<head>
    <title>个人主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <!-- css files -->
    <link href="{{asset('static/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('static/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('static/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- /css files -->
    <!-- font files -->
    {{--<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>--}}
    {{--<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>--}}
    <!-- /font files -->
    <!-- js files -->
    <script src="{{asset('static/front/js/modernizr.custom.js')}}"></script>
    <!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top cl-effect-20">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">潘宏涛</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span data-hover="Home">Home</span></a></li>
                        <li><a href="#about"><span data-hover="About">About</span></a></li>
                        <li><a href="#service"><span data-hover="Technique">Technique</span></a></li>
                        <li><a href="#events"><span data-hover="Events">Events</span></a></li>
                        <li><a href="#contact"><span data-hover="Contact">Contact</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Banner Section -->
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="{{asset('static/front/images/banner1.jpg')}}" alt="First slide">
        </div>
        <div class="item">
            <img class="second-slide" src="{{asset('static/front/images/banner2.jpg')}}" alt="Second slide">
        </div>
        <div class="item">
            <img class="third-slide" src="{{asset('static/front/images/banner3.jpg')}}" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<!-- /Banner Section -->
<!-- About Section -->
<section class="about-us" id="about">
    <h3 class="text-center slideanim">About me</h3>
    <p class="text-center slideanim">就读于西安理工大学,计算机科学与工程学院,专业: 计算机科学与技术 &nbsp;&nbsp;&nbsp;&nbsp;个人邮箱:&nbsp;&nbsp;18706727398@163.com</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{asset('static/front/images/about-img2.jpg')}}" alt="about" class="img-responsive slideanim">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="about-info">
                    <h4 class="slideanim">About me</h4>
                    <p class="abt slideanim">我是一个认真工作，认真钻研，勇于创新的人,有较强的自学潜力，创新意识和进取精神,不断地完善自己，提高自身素质。我在学好专业课与公共课的基础上，还阅读了超多的课外书籍，不断地增加新知识，陶冶情操开拓视野,对于专业的学习有很大的热情,</p>
                    <p class="abt slideanim">糟糕的的不是你第一次不会,而是下一次还不会.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About Section -->
<!-- Services Section -->
<section class="our-services slideanim" id="service">
    <h3 class="text-center slideanim">学习生涯</h3>
    <p class="text-center slideanim">It's better to read ten thousand miles than ten thousand miles .</p>
    <div id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 centered">
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle slideanim" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">职业技能</a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner slideanim">
                                    <p>1. 熟练使用PHP 以及掌握java语言, 对OOP有深入的了解.</p>
                                    <p>2. 熟练mysql数据库和innodb和myisam引擎有所了解,和nosql能熟练应用.对memcache的缓存处理,或redis都能应用.</p>
                                    <p>3. 能后再linux下进行LAMP开发,熟练使用Linux系统</p>
                                    <p>4. PHP框架掌握 ThinkPHP 以及laravel的使用</p>
                                    <p>5. 对于前端知识HTML javascript能够简单应用,以及掌握Ajax异步请求的应用.</p>
                                    <p>6.  熟练辅助工具的使用,例如:Git 以及操作ftp ssh 等软件的使用</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle slideanim" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Retina Ready Theme</a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse in">
                                <div class="accordion-inner slideanim">
                                    <p>个人网站:&nbsp;&nbsp;&nbsp;<a  href="http://www.phtstudy.xin">www.phtstudy.xin</a></p>
                                    <p>Github:&nbsp;&nbsp;&nbsp;<a  href="https://github.com/956077081">https://github.com/956077081</a>
                                    <p>CSDN:&nbsp;&nbsp;&nbsp;<a  href="https://blog.csdn.net/qq_35786291">https://blog.csdn.net/qq_35786291</a></p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->


                    </div><!-- Accordion -->
                </div>
                <div class="col-md-6">
                    <img src="{{asset('static/front/images/service-img.jpg')}}" class="img-responsive slideanim" alt="service">
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->
</section>
<!-- /Services Section -->
<!-- Events -->
<section class="our-events slideanim" id="events">
    <h3 class="text-center slideanim">Our Events</h3>
    <p class="text-center slideanim">开发的项目</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="event-info">
                    <h4 class="text-center slideanim">在线电子病历系统</h4>
                    <p class="eve slideanim">主要为面向基层的病历管理系统.个人参与:后台开发修改迁徙以及数据库整理. <a href="http://www.phtstudy.xin/web_emr">医疗系统</a> 测试登录账号:admin 密码:123456</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="event-info">
                    <h4 class="text-center slideanim">博客网站</h4>
                    <p class="eve slideanim">简易的博客网站,提供用户的自由发表,对个人的文章管理,以及评论等等功能齐全,提高个人对PHP基础的理解,使用PHP原生码编写,做到对网站的安全,防范,提供用户的体验.<br><a href="http://www.phtstudy.xin/blog">博客论坛 </a>测试账号:admin001 密码:123456</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="event-info">
                    <h4 class="text-center slideanim">文章的CMS系统</h4>
                    <p class="eve slideanim">主要是对于发表的文章进行数据库存储,通过制作的前台页面进行管理.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Events -->
<!-- Gallery Section -->

<!-- /Gallery Section -->

<!-- Testimonials -->
<!-- Contact Section -->
<section class="our-contacts slideanim" id="contact">
    <h3 class="text-center slideanim">Contact me</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form  action = '{{url('/face/send')}}' method="post" >
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-lg-4 slideanim">
                            <input type="text" name = 'name' id="name" class="form-control user-name" placeholder="Your Name" />
                        </div>
                        <div class="form-group col-lg-4 slideanim">
                            <input type="email"  name ='email' id='email' class="form-control mail" placeholder="Your Email" />
                        </div>
                        <div class="form-group col-lg-4 slideanim">
                            <input type="tel" name ='tel' id="tel" class="form-control pno" placeholder="Your Phone Number" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12 slideanim">
                            <textarea name="message"  id="message"  class="form-control" rows="6" placeholder="Your Message" required/></textarea>
                        </div>
                        <div class="form-group col-lg-12 slideanim">
                            <button type="submit" href="#" class="btn-outline1">Submit</button>
                            <div id="backnews" style="color: white;font-size: 50px;text-align: center"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Section -->
<!-- Footer Section -->
<section class="footer">

    <hr>
    <div class="copyright">
        <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
    </div>
</section>
<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->
<script>
  window.onload = function (evt){

    var form = document.getElementsByTagName('form')[0];
    form.onsubmit = function(evt){
        var data  = new FormData(form);
        if(typeof  ActiveXObject != "undefined"){
              var xhr  =  new ActiveXObject('Msxml2.XMLHTTP.7.0');
        }else{
            var xhr  = new XMLHttpRequest();

        }
        var xhr  = new XMLHttpRequest();
        xhr.onreadystatechange = function(  ){
            var news = document.getElementById('backnews');
            var message = '';
            if(xhr.readyState ==  4){
                    //backnews 赋值
                    news.innerHTML =  xhr.responseText;
                document.getElementById('name').innerHTML = '';
                document.getElementById('email').innerHTML = '';
                document.getElementById('tel').innerHTML = '';
                document.getElementById('message').innerHTML = '';
             }
        }
        xhr.open('post',"{{url('/face/send')}}")
        xhr.send(data);
        evt.preventDefault();
    }

    }
</script>

<!-- js files -->
<script src="{{asset('static/front/js/jquery.min.js')}}"></script>
<script src="{{asset('static/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/front/js/SmoothScroll.min.js')}}"></script>
<!-- js for gallery -->
<script src="{{asset('static/front/js/darkbox.js')}}"></script>
<!-- /js for gallery -->
<!-- js for back to top -->
<script src="{{asset('static/front/js/main.js')}}"></script>
<!-- /js for back to top -->
<!-- js for nav-smooth scroll -->
<script>
    $(document).ready(function( evt){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });
    })
</script>
<!-- /js for nav-smooth scroll -->
<!-- js for slide animations -->
<script>
    $(window).scroll(function() {
        $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
</script>
<!-- /js for slide animations -->
<!-- /js files -->
</body>
</html>
