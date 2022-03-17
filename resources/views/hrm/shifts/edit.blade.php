@extends('hrm.layouts.app')
@section('title') Shift @endsection
@section('content')
    <shift-create-or-edit :id="{{ json_encode($id) }}"></shift-create-or-edit>
@endsection