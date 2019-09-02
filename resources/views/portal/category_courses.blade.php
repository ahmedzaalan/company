@extends('portal.layout')

@section('content')
<div class="container">
<div class="row">
@foreach ($courses as $course)

<!--------------------------------->
<div class="media">
    <div class="media-left media-top">
      <a href="#">
      <img class="media-object" src="{{Storage::url($course->image_path)}}" alt="..." width="200" height="200">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">{{$course->title}} - {{date('d-m-Y', strtotime($course->updated_at))}}</h4>
      <p>
          <div class="panel-group" id="accordion{{$loop->iteration}}" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion{{$loop->iteration}}" href="#collapseOne{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                        Description
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne{{$loop->iteration}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                            {{$course->description}}
                    </div>
                  </div>
                </div>
            </div>
      </p>
    </div>
  </div>
<!---------------------------------->
    @endforeach
</div>
</div>
    @endsection
