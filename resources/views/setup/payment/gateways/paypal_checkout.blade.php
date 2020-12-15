<form role="form" class="form-horizontal" enctype="multipart/form-data" action="{{ route('patch_settings_paypal_checkout') }}" method="post" autocomplete="off" >
   {{ csrf_field()  }}
   {{ method_field('PATCH') }}
   <div class="form-group">
      <label>Environment <span class="required">*</span></label>    
      <?php echo form_dropdown("environment", $options['env_list'], old_set('environment', NULL, $rec->keys), "class='form-control selectPickerWithoutSearch'") ?>      
      <div class="invalid-feedback d-block">{{ showError($errors,'environment') }}</div>
   </div>
   <div class="form-group">
     <label>Display Name <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'name') }}" name="name" value="{{ old_set('name', NULL, $rec) }}">
      <div class="invalid-feedback">{{ showError($errors,'name') }}</div>
   </div>
   <div class="form-group">
      <label>Client Id <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'client_id') }}" name="client_id" value="{{ old_set('client_id', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'client_id') }}</div>
   </div>
   <div class="form-group">
      <label>Client Secret <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'client_secret') }}" name="client_secret" value="{{ old_set('client_secret', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'client_secret') }}</div>
   </div>    
    <?php
      $inactive = (old_set('inactive', NULL, $rec)) ? 'checked' : '';
       ?>
   <div class="form-group">
      <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="inactive"  name="inactive" value="1"
         {{ $inactive }}
         >
         <label class="custom-control-label" for="inactive">Inactive</label>
      </div>
   </div>
   <input type="submit" name="submit" class="btn btn-success" value="Submit"/>
</form>