<form role="form" class="form-horizontal" enctype="multipart/form-data" action="{{ route('patch_settings_braintree') }}" method="post" autocomplete="off" >
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
      <label>Merchant Id <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'merchant_id') }}" name="merchant_id" value="{{ old_set('merchant_id', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'merchant_id') }}</div>
   </div>
   <div class="form-group">
      <label>Public Key <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'public_key') }}" name="public_key" value="{{ old_set('public_key', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'public_key') }}</div>
   </div>
   <div class="form-group">
      <label>Private Key <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'private_key') }}" name="private_key" value="{{ old_set('private_key', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'private_key') }}</div>
   </div>
   <?php
      $status_is_paypal_enabled = (old_set('is_paypal_enabled', NULL, $rec->keys)) ? 'checked' : '';
       ?>
   <div class="form-group">
      <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="is_paypal_enabled"  name="is_paypal_enabled" value="1"
         {{ $status_is_paypal_enabled }}
         >
         <label class="custom-control-label" for="is_paypal_enabled">Accept Paypal Payments</label>
      </div>
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