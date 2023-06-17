@extends('layouts.master')

@section('header')
<div class="container">
    <h1 class="display-4">Welcome to The Service Page</h1>
    <p class="lead">A brief description of your startup goes here.</p>
    <a href="#" class="btn btn-light btn-lg">Get Started</a>
</div>
@stop

@section('features')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Product 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque. Aliquam erat volutpat.</p>
        </div>
        <div class="col-md-4">
            <h2>Product 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque. Aliquam erat volutpat.</p>
        </div>
        <div class="col-md-4">
            <h2>Feature 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque. Aliquam erat volutpat.</p>
        </div>
    </div>
</div>
@stop