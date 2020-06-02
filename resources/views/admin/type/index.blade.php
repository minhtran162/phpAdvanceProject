@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-6">
            <br>
            <h2 style="color: crimson">Type</h2>
            <h4 style="margin-top:30px">{{$typesData->count()}} types</h4>
        </div>

        <!-- add modal -->
        <div class="col-lg-6 right">
            <div style="margin-top:20px">
                <button type="btn" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#addModal">
                    <i class="fa fa-plus"></i> Add Type
                </button>
            </div>

            <!-- add modal -->
            @include('admin.type.partials.add_modal')
        </div>
    </div>

    <br>
    @include('common.errors')

    <!-- table -->
    <table class="table table-hover">
        <thead>
            <tr class="bg-info">
                <th>ID</th>
                <th>Name</th>
                <th style="width: 15%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($typesData as $typesData)
            <tr>
                <td>{{$typesData->id}}</td>
                <td>{{$typesData->name}}</td>
                <td>
                    <div class="row action-button">
                        <!-- edit button -->
                        <div class="action-edit">
                            <button type="submit" class="btn btn-outline-info edit" data-toggle="modal" data-target="#edittypeModal{{$typesData->id}}">
                                <i class="fa fa-btn fa-edit"></i> Edit
                            </button>

                            <!-- edit modal -->
                            @include('admin.type.partials.edit_modal')
                        </div>

                        <!-- delete button -->
                        <div class="action-delete">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delModal{{$typesData->id}}">
                                <i class="fa fa-btn fa-trash"></i> Delete
                            </button>

                            <!-- del modal -->
                            @include('admin.type.partials.del_modal')
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection