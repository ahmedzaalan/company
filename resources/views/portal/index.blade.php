@extends('portal.layout')
@section('content')
<div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden-xs">
        @php
            $k= 0;
        @endphp
        @foreach ($slides as $silde)
    <li data-target="#myslide" data-slide-to="{{$k++}}" class="{{ $k == 1 ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @for ($i=0;$i<$slides->count();$i++)
        <div class="item {{ $i == 0 ? 'active' : '' }}">
            <img src="{{ Storage::url($slides[$i]->image_path)}}" alt="Pic 1">
            <div class="carousel-caption hidden-xs">
               <h1> programing</h1>
            <p class="lead">{{$slides[$i]->text}}</p>

            </div>
        </div>
        @endfor

        ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--<section class="About text-center wow bounceIn" data-wow-duration="2s"  data-wow-offset="300" >
    <div class="container">
        <h1> Meet Our NewTemplete<span> Osama Inc.</span></h1>
        <p class="lead">Hello Created With All The Love With Hello Created With All The Love With <strong>Bootstrap</strong> 3.2.0</p>
    </div>

</section>-->
<section class="features text-center">
   <div class="container">
       <h1>Our Projects</h1>
       <div class="row">

       @foreach ($latest_projects as $project)
               <div class="col-lg-3 col-md-6">
                <div class="feat hvr-float-shadow wow bounceInLeft" data-wow-duration="1s" data-wow-offset="400">
                  <!--<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>-->
                    <h4>{{$project->title}}</h4>
                      <p>
                            {{$project->description}}
                      </p>
                </div>
           </div>
       @endforeach



       </div>
   </div>

</section>

<section class="testimonials text-center wow flipInY"data-wow-duration="1s" data-wow-offset="400">
    <div class="container">
        <h1>What Our Clients Says ?</h1>
        <div id="carrousel-testimonials" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                    @foreach ($latest_opinions as $item)
                    <div class="item {{ $loop->iteration == 1 ? 'active' : '' }}">
                      <p class="lead">
                            {{$item->content}}
                        </p>
                    <span> {{$item->name}}</span>
                </div>
@endforeach
                <!--
                <div class="item">
                    <p class="lead">
                        Transition animations not supported in Internet Explorer 8 & 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
                    </p>
                    <span> Maram Aboualatta</span>
                </div>

                <div class="item">

                    <p class="lead">
                        Transition animations not supported in Internet Explorer 8 & 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
                    </p>
                    <span> Ahmed Aboualatta</span>
                </div>

                <div class="item">

                    <p class="lead">
                        Transition animations not supported in Internet Explorer 8 & 9  Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
                    </p>
                    <span> Raneem Aboualatta</span>
                </div>


                -->
            </div>
            <ol class="carousel-indicators ">
                    @foreach ($latest_opinions as $item)
            <li data-target="#carrousel-testimonials" data-slide-to="{{$loop->iteration - 1 }}" class="{{ $loop->iteration == 1 ? 'active' : '' }}">
                    <img src="{{url($item->image_path)}}" alt="Osama"/>
                </li>
                @endforeach

            </ol>

        </div>
    </div>
</section>
<section class="price-table text-center">
  <div class="container">
      <h1>Our Courses</h1>

      <div class="row">
          @foreach ($categories as $category)
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="price-box wow fadeInDown" data-wow-duration="2s" data-wow-offset="400">
                  <h2 class="text-danger"> {{$category->name}}</h2>
                  <!--<p class="center-block">$90</p>-->
                  <ul class="list-unstyled">
                      @foreach ($category->courses->take(4) as $course)
                      <li>{{$course->title}}</li>
                      @endforeach
                  </ul>
                  @if($category->courses->count() > 4)
                  <a href="{{url('/category_courses/'.$category->id)}}" class="btn btn-danger">Show More</a>
             @endif
                </div>
          </div>
          @endforeach
      </div>
  </div>
</section>
<section class="our-team text-center">
    <div class="team">
    <div class="container">
        <h1>Meet our awesome teem</h1>
        <div class="row">
                @foreach ($employees as $employee)
            <div class="col-lg-3 col-sm-6">
                <div class="person wow pulse" data-wow-duration="1s" data-wow-offset="400">
                    <img class="img-circle" src="{{Storage::Url($employee->image_path)}}" alt="chris " />
                    <h3>{{$employee->name}}</h3>
                    <p>{{$employee->position->name}}</p>
                   <!-- <i class="fab fa-facebook-square fa-5x "></i>-->
                </div>
            </div>
            @endforeach

        </div>
    </div>
        </div>
</section>
<section class=" subscribe text-center " >
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-offset="400">
        <h1>Keep In Touch</h1>
        <p class=" lead">Sign Up for newslatter Dont worry About spamwe hate it too</p>
        <form class="form-inline" action="/subscribe" method="post">
            @csrf
            <input class="form-controll input-lg" type="text" name="email" placeholder="Write your E-mail" />
            <button class="btn-danger btn-lg"><i class="fa fa-edit"></i>Subscribe</button>
        </form>
    </div>
</section>
<!--
    <section class="statistics text-center">
    <div class="data">
        <div class="container">
            <h1>Our Main Statistics</h1>
            <div class="row">
                <div class="col-lg-3">
                    <div class="stats">
                        <i class="fa fa-golf-ball fa-5x" > </i>
                        <p>9,950</p>
                        <span>Satisfied Users</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="stats">
                        <i class="fa fa-comments fa-5x"> </i>
                        <p>95,850</p>
                        <span>Posted Comments</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="stats">
                        <i class="fa fa-suitcase fa-5x"> </i>
                        <p>10,542</p>
                        <span>Project Done</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="stats">
                        <i class="fa fa-users fa-5x"> </i>
                        <p>5,540</p>
                        <span>Tickets Archieved</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
-->
<!--
<section class="our-skills ">
    <div class="container">
        <h1 class="text-center">Our Skills</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="skills-progress">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active " role="progressbar" aria-valuenow="90" aria-valuemin="0"aria-valuemax="80" style="width:90%">
                         Html5/css
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active " role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="80" style="width:65%">
                            PHP/Mysql
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width:80%">
                            Javascript/Jquery
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped active " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="80" style="width:70%">
                            Wordpress
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="skills-info">
                    <h3>Team Info</h3>
                    <p class="lead">
                         Bootstrap exclusively uses CSS3 for its animations  Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.

                    </p>
                    <button type="button" class="btn btn-primary">Talk With Profisional</button>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<section class="contact-us text-center">
    <div class="fields">
        <div class="container">
            <i class="fa fa-headphones fa-5x"></i>
          <h1>Tell What You Feel</h1>
            <p class="lead">Feel Free When You Contact Us Anytime</p>
            <div class="row">
            <form role="form" method="POST" action="/contact_us" data-toggle="validator">
                    @csrf
                   <div class="col-lg-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="200">

                    <div class="form-group">
                        <input 
                        data-error="Bruh, that ttttt address is invalid" 
                        required type="text" class="form-control input-lg" placeholder="Username" name="Username" /></div>
                    <div class="form-group">
                        <input required type="email" data-error="Bruh, that email address is invalid" class="form-control input-lg" placeholder="Email" name="Email"/>
                        <div class="help-block with-errors">
                    </div>
                        
                    </div>
                    <div class="form-group"><input required type="number" class="form-control input-lg" placeholder="Cellphone" name="Cellphone" /></div>
                    </div>
                    <div class="col-lg-6 wow bounceInRight" data-wow-duration="1s" data-wow-offset="200">
                    <div class="form-group">
                        <textarea required name="Message" maxlength="255" class="form-control input-lg "placeholder="Your Massege"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Contact Us</button>
                </div>
            </form>

    <!--@include('errors')-->
        </div>
        </div>
    </div>
</section>
<section class="our-clients">
    <div class="container">
        <div class="row">
          <ul class="list-unstyled">
              <li class="col-md-2 col-sm-4">
                  <img class="img-responsive center-block wow bounceIn" src="clients/1.jpg" alt="WWF"data-wow-duration="0.5s" data-wow-offset="200"data-wow-delay="0.5s" />
              </li>
              <li class="col-md-2 col-sm-4">
                  <img class="img-responsive center-block wow bounceIn" src="clients/2.jpg" alt="Fox"data-wow-duration="0.5s" data-wow-offset="200"data-wow-delay="1s" />
              </li>
              <li class="col-md-2 col-sm-4">
                  <img class="img-responsive center-block wow bounceIn" src="clients/3.jpg" alt="Comedy"data-wow-duration="0.5s" data-wow-offset="200"data-wow-delay="1.5s" />
              </li>
              <li class="col-md-2 col-sm-4">
                  <img class="img-responsive center-block wow bounceIn" src="clients/4.jpg" alt="Adidas"data-wow-duration="0.5s" data-wow-offset="200"data-wow-delay="2s" />
              </li>
              <li class="col-md-2 col-sm-4">
                  <img class="img-responsive center-block wow bounceIn" src="clients/5.jpg" alt="Nike"data-wow-duration="0.5s" data-wow-offset="200"data-wow-delay="2.5s" />
              </li>
              <li class="col-md-2 col-sm-4">
                  <img class="img-responsive center-block wow bounceIn" src="clients/6.jpg" alt="Oregin" data-wow-duration="0.5s" data-wow-offset="200"data-wow-delay="3s"/>
              </li>
          </ul>



        </div>
    </div>
</section>
@endsection
