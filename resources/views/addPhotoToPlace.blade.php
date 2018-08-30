@extends('master')
@section('title', __('lan.titles.addPhotoToThePlace'))
@section('content')
    <div  class="mainIndex">
        <form action="{{route('selectPhotoById','place')}}" method="get" enctype="multipart/form-data">
            @csrf
            <h4>@lang('lan.addPhotoToThePlace.addPhotoToThePlace')</h4><br>
            <div class="main">
                <div>
                    <label for="type">@lang('lan.addPhotoToThePlace.place')</label>
                    <select name="id">
                        <option disabled>@lang('lan.addPhotoToThePlace.selectPlace')</option>
                        @foreach ($myplaces as $place)
                            <option value="{{$place->id}}">{{$place->name}}</option>
                        @endforeach
                    </select>
                </div>

                <br>
                <button type="submit">@lang('lan.addPhotoToThePlace.select')</button>
            </div>
        </form>
    </div>
@stop