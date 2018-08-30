@extends('master')
@section('title', __('lan.titles.addPhotoToThePlace'))
@section('content')
    <div class="mainIndex">
        <h3>@lang('lan.addPhoto.selectAPhotoToAdd')</h3>
        <form action="{{route('uploadFormAddPhotoId',$id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image"><br>
            <button type="submit">@lang('lan.addPhoto.add')</button>
        </form>

        <h3>@lang('lan.addPhoto.photos')</h3>

        @foreach ($photos as $photo)
            <p><img src="{{Storage::url($photo->filePath)}}" width="255" height="255"></p>
        @endforeach
    </div>
@stop