<div class="sticky-top">
   <div class="card mb-40">
      <div class="card-header">Search</div>
      <div class="card-body">
         <form id="search-form" autocomplete="off">
            <div class="form-group">
               <label>Order Date</label>
               <input type="text" class="form-control" name="order_date" >    
            </div>
            <div class="form-group">
               <label>Due Date</label>             
               <?php echo form_dropdown("dead_line", $data['dead_line_list'], NULL, "class='form-control form-control-sm  selectpicker'") ?>              
            </div>            
            <div class="form-group">
               <label>Assignee</label>
               <?php echo form_dropdown("staff_id", $data['staff_list'], NULL, "class='form-control form-control-sm  selectpicker'") ?>              
            </div>
            <div class="form-group">
               <label>Status</label>
               <?php echo form_dropdown("order_status_id", $data['order_status_list'], NULL, "class='form-control form-control-sm  selectpicker'") ?>              
            </div>
            <div class="form-group">
               <label>Order Number</label>
               <input type="text" class="form-control" id="order_number" name="order_number">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-success">&nbsp &nbsp &nbsp <i class="fas fa-search"></i> Search &nbsp &nbsp &nbsp</button>
            </div>
         </form>
      </div>
   </div>
</div>