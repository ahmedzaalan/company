@if($errors->any())
<ul>
@foreach ($errors->all() as $error)
    <li>
            <label class="col-sm-2 col-form-label text-danger">{{$error}}</label>
    </li>
@endforeach
</ul>
@endif
