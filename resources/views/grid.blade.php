@extends('master')

@section('title')
    grid
@endsection

@section('content')
    <div class="container">
        <h4>แบ่งหน้าจอแบบ 12 Column</h4>
            <div class="row">
                <div class="col-md-1 text-center text-bg-success">1</div>
                <div class="col-md-1 text-center text-bg-danger">1</div>
                <div class="col-md-1 text-center text-bg-warning">1</div>
                <div class="col-md-1 text-center text-bg-dark">1</div>
                <div class="col-md-1 text-center text-bg-primary">1</div>
                <div class="col-md-1 text-center text-bg-info">1</div>
                <div class="col-md-1 text-center text-bg-light">1</div>
                <div class="col-md-1 text-center text-bg-success">1</div>
                <div class="col-md-1 text-center text-bg-danger">1</div>
                <div class="col-md-1 text-center text-bg-warning">1</div>
                <div class="col-md-1 text-center text-bg-dark">1</div>
                <div class="col-md-1 text-center text-bg-secondary ">1</div>
            </div>
        <h4>แบ่งหน้าจอแบบ 2 Column</h4>
            <div class="row">
                <div class="col-sm-6 text-center text-bg-primary">6</div>
                <div class="col-sm-6 text-center text-bg-warning">6</div>
            </div>
        <h4>แบ่งหน้าจอแบบ 2 Column ไม่เท่ากัน</h4>
            <div class="row">
                <div class="col-sm-4 text-center text-bg-primary">4</div>
                <div class="col-sm-8 text-center text-bg-warning">8</div>
            </div>
        <h4>Grid Offset</h4>
            <div class="row">
                <div class="col-sm-8 col-8 offset-sm-2 offset-2 text-center text-bg-primary">8</div>
            </div>
    </div>
@endsection