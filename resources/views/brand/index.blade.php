@extends('layouts.master')

<!-- product hot -->
<div class="container-fluid bg-3 containerCustom">
    <div class="row">
        @foreach($brand as $brand)
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"></p>
                    <h4 class="card-title">{{$brands->name}}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>