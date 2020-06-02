<!-- add Modal -->
<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- modal body -->
            <div class="modal-body">
                <form action="{{route('products.store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col control-label">Product Name</label>

                        <div class="col">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Description</label>

                        <div class="col">
                            <input type="text" name="desc" id="task-name" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col control-label">Image</label>

                        <div class="col">
                            <input type="text" name="image" id="task-name" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col control-label">Price</label>

                        <div class="col">
                            <input type="text" name="price" id="task-name" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col control-label">Brand</label>

                        <div class="col">
                            <select class="form-control" name="brand_id">
                                @foreach($brandsData as $brandsData)
                                <option value="{{$brandsData->id}}">{{$brandsData->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col control-label">Type</label>

                        <div class="col">
                            <select class="form-control" name="type_id">
                                @foreach($typesData as $typesData)
                                <option value="{{$typesData->id}}">{{$typesData->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col control-label">Nation</label>

                        <div class="col">
                            <select class="form-control" name="nation_id">
                                @foreach($nationsData as $nationsData)
                                <option value="{{$nationsData->id}}">{{$nationsData->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <i></i>Add
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>