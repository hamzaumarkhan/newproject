<?php
      include('include/db.php');
?>


    <div class="container mt-5">
        <h1 class="alert-info text-center p-4">
            CRUD New Application By Farman
        </h1>
        
                 
        <div class="row">
           <div class="col-sm-12 text-right mb-2">
           <button class="btn btn-warning" onclick="run_modal();" ><i class="fa fa-plus"></i>Add</button>
         
           </div>
           <div class="col-sm-12 text-center">
                  <h3 class="alert-warning p-2">Display Record</h3>
                  <table class="table table-hover table-bordered">
                    <thead>
                     <th>id</th>
                     <th>name </th>
                     <th>email</th>
                     <th>phone</th>
                     <th>password	</th>
                     <th>Action	</th>
                    </thead>
                    <tbody id="response">
                 
                   
                    </tbody>
                  </table>
              </div>
        </div>
    </div>


    


   
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myform">
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" >
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" >
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" >
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" >
          </div>
          <button type="button" class="btn btn-primary" onclick="add();">Submit</button>
     
        </form>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="editmodaldata">
      
      </div>
      
    </div>
  </div>
</div>



