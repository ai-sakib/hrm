@extends('hrm.layouts.app')
@section('title') Employee @endsection
@section('content')
    <employee-create-or-edit :id="{{ json_encode($id) }}"></employee-create-or-edit>
@endsection