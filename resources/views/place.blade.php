@extends('master')
@section('title', __('lan.titles.descriptionOfThePlace',['name'=>$place->name]))
@section('content')
    <div class="mainIndex">
        <div>
            @lang('lan.place.name'){{$place->name}}<br>
            @lang('lan.place.type'){{$place->selectType()}}<br>
            @lang('lan.place.description'){{$place->about}}<br>
            @lang('lan.place.rating'){{$place->rating()}}<br>
            @lang('lan.place.overallRating'){{$place->overallRating()}}<br>
            @lang('lan.place.estimate')
            <a href="{{route('addOpinion',[$place->id, $place->id, 'Place', '1'])}}"><img
                        src="/image/like.png" width="15" height="15"></a>
            <a href="{{route('addOpinion',[$place->id, $place->id, 'Place', '0'])}}"><img
                        src="/image/dislike.png" width="20" height="20"></a>
            <br>
        </div>
        <h3>@lang('lan.place.photos')</h3><br>
        @foreach ($photos as $photo)
            <div>
                <p>
                    <img src="{{Storage::url($photo->filePath)}}" width="255" height="255">
                <div>
                    @lang('lan.place.estimate')
                    <a href="{{route('addOpinion',[$place->id, $photo->id, 'Photo', '1'])}}"><img
                                src="/image/like.png" width="15" height="15"></a>
                    <a href="{{route('addOpinion',[$place->id, $photo->id, 'Photo', '0'])}}"><img
                                src="/image/dislike.png" width="20" height="20"></a>
                </div>
                @lang('lan.place.rating'){{$photo->rating()}}<br>
                <a href="{{route('downloadPhoto',[$photo->id])}}" target="_blank">@lang('lan.place.download')</a>
                <form action="{{route('filesplace.destroy',[$photo->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button>@lang('lan.place.delete')</button>
                </form>
                </p>
            </div>
            <br><br>
        @endforeach
    </div>

@stop