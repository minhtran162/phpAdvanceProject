 <!-- edit modal -->
 <div class="modal fade" id="edittypeModal{{$typesData->id}}" role="dialog">
     <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Edit Type</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
                 <form action="{{route('types.update', $typesData->id)}}" method="POST" class="form-horizontal">
                     @csrf
                     @method('PUT')

                     <div class="form-group">
                         <label for="task-name" class="col control-label">Type Name</label>
                         <div class="col">
                             <input type="text" name="name" class="form-control" value="{{$typesData->name}}">
                         </div>
                     </div>

                     <!--  -->
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-success">
                             <i></i>Edit
                         </button>
                         <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                     </div>
                 </form>
             </div>
         </div>

     </div>
 </div>