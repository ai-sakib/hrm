@extends('hrm.layouts.app')
@section('title') OT Level @endsection
@section('content')
    <o-t-level-create-or-edit  :id="{{ json_encode($id) }}"></o-t-level-create-or-edit>
@endsection