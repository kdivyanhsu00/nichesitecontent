<div class="sticky-top">
   <div class="card mb-40">
      <div class="card-header">Search</div>
      <div class="card-body">
         <form id="search-form" autocomplete="off">
            <div class="form-group">
               <label>Name or Email</label>
               <input type="text" class="form-control" id="search" name="search">    
            </div>
            <div class="form-group">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="inactive">
                  <label class="form-check-label" for="inactive">
                  Inactive Users
                  </label>
               </div>
            </div>
            @if($data['type'] == 'staff')
            <div class="form-group">
               <label>Area of expertise</label>
               <?php echo form_dropdown("tag_id[]", $data['tag_id_list'], NULL, "class='form-control form-control-sm  multSelectpicker' multiple='multiple' id='tag_id'") ?>
            </div>
            @endif
            <div class="form-group">
               <button type="submit" class="btn btn-success">&nbsp &nbsp &nbsp <i class="fas fa-search"></i> Search &nbsp &nbsp &nbsp</button>
            </div>
         </form>
      </div>
   </div>
</div>