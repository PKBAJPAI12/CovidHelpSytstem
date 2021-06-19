<div class="modal fade" id="addcovidModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Covid Care Centre Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="_addcovidhandle.php" method="post">
            <div class="modal-body">
           
            <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Name of Covid Centre</label>
    <input class="form-control" name="centername" type="text" placeholder="Fast Covid Care">
           </div>
 

           <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Address of Covid Centre</label>
    <input class="form-control" type="text" placeholder="B-1 JanakPuri, Near Chandan Devi Hospital">
           </div>
 
           <div class="form-row">

           <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" name="state" id="inputState">
    </div>


    <div class="form-group col-md-5">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>


    <div class="form-group col-md-3">
      <label for="inputZip">Pin Code</label>
      <input type="text" class="form-control" name="pincode" id="inputZip">
    </div>

  </div>


  <div class="form-row">

<div class="form-group col-md-6">
  <label for="inputCity">Beds Capacity</label>
  <input type="text" placeholder="Total No. of Beds" class="form-control" name="totalbed" id="bedscap">
</div>

<div class="form-group col-md-6">
  <label for="inputState">Vacant Beds</label>
  <input type="text" placeholder="Availiable Beds" class="form-control"  name="vacantbed" id="vacantbeds">
</div>

</div>



  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirm
      </label>
    </div>
  </div>



        <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          
                </form>
      
    </div>
  </div>
</div>

