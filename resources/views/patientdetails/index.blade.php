@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $detail->title !!} :: @parent @endsection

@section('meta_author')
    <meta name="author" content="{!! $article->author->username !!}"/>
@endsection
{{-- Content --}}
@section('content')
    <h3>{{ $detail->name }}</h3>
    <p>{!! $detail->id !!}</p>

    </div>
@endsection
