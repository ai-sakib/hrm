@extends('hrm.layouts.app')
@section('title') Work Type @endsection
@section('content')
    <work-type-create-or-edit  :id="{{ json_encode($id) }}"></work-type-create-or-edit>
@endsection