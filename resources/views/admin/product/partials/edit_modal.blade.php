 <!-- Edit Modal -->
 <div class="modal fade" id="editModal{{$productsData->id}}" role="dialog">
     <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Edit Product</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
                 <form action="{{route('products.update', $productsData->id)}}" method="POST" class="form-horizontal">
                     @csrf
                     @method('PUT')

                     <div class="form-group">
                         <label for="task-name" class="col control-label">Product Name</label>

                         <div class="col">
                             <input type="text" name="name" class="form-control" value="{{$productsData->name}}">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="task-name" class="col control-label">Description</label>
                         <div class="col">
                             <input type="text" name="desc" class="form-control" value="{{$productsData->desc}}">
                         </div>

                     </div>
                     <div class="form-group">
                         <label for="task-name" class="col control-label">Image</label>
                         <div class="col">
                             <input type="text" name="image" class="form-control" value="{{$productsData->image}}">
                         </div>

                     </div>
                     <div class="form-group">
                         <label for="task-name" class="col control-label">Price</label>

                         <div class="col">
                             <input type="text" name="price" class="form-control" value="{{$productsData->price}}">
                         </div>

                     </div>
                     <div class="form-group">
                         <label for="task-name" class="col control-label">Brand</label>
                         <div class="col">
                             <select class="form-control" name="brand_id">
                                 @foreach($brandsData as $brandsData)
                                 <option value="{{$brandsData->id}}" {{$productsData->brand_id == $brandsData->id ? 'selected' : ''}}>{{$brandsData->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="form-group">
                         <label for="task-name" class="col control-label">Type</label>
                         <div class="col">
                             <select class="form-control" name="type_id">
                                 @foreach($typesData as $typesData)
                                 <option value="{{$typesData->id}}" {{$productsData->type_id == $typesData->id ? 'selected' : ''}}>{{$typesData->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="form-group">
                         <label for="task-name" class="col control-label">Nation</label>
                         <div class="col">
                             <select class="form-control" name="nation_id">
                                 @foreach($nationsData as $nationsData)
                                 <option value="{{$nationsData->id}}" {{$productsData->nation_id == $nationsData->id ? 'selected' : ''}}>{{$nationsData->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                     <!--  -->
                     <div class="modal-footer">
                         <div class='row'>
                             <button type="submit" class="btn btn-success">
                                 <i></i>Sửa
                             </button>
                             <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Huỷ</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>

     </div>
 </div>