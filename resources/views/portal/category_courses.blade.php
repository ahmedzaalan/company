@extends('portal.layout')

@section('content')
<div class="container" style="margin-top:15px;">
<div class="row">
@foreach ($courses as $course)
<div class="col-md-12 media border-bottom">
        <div class="col-sm-3 media-left media-middle">
            <img class="img-responsive news-img" width="100" height="150"
                 style="border: 2px solid #f4f4f4;" />
            <img class="img-responsive news-img" width="100" height="150"
                 style="border: 2px solid #f4f4f4;"
                 src="~/Content/images/news_default_large.jpg"
                 title="ahmed" />
        </div>
        <div class="col-sm-9 ">
            <div class="col-md-10">
                <h4 class="media-heading">{{$course->title}}</a></h4>
            </div>

            <div class="col-md-12">
                <div class="date-time"> {{$course->start_date}} </div>
                <p>
                    {{$course->description}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
    @endsection
