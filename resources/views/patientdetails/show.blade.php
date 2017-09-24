@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $patientdetail->PatientName !!} :: @parent @endsection

@section('meta_author')
    <meta name="author" content="{!! $article->author->username !!}"/>
@endsection
{{-- Content --}}
@section('content')
    <h3>{{ $patientdetail->PatientName }}</h3>
    <p>{!! $patientdetail->id !!}</p>

    </div>
@endsection
