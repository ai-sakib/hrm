@extends('hrm.layouts.app')
@section('title') Holiday @endsection
@section('content')
    <holiday-create-or-edit :id="{{ json_encode($id) }}"></holiday-create-or-edit>
@endsection