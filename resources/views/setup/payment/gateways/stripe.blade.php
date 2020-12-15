<form role="form" class="form-horizontal" enctype="multipart/form-data" action="{{ route('patch_settings_stripe') }}" method="post" autocomplete="off" >
   {{ csrf_field()  }}
   {{ method_field('PATCH') }}
   <div class="form-group">
     <label>Display Name<span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'name') }}" name="name" value="{{ old_set('name', NULL, $rec) }}">
      <div class="invalid-feedback">{{ showError($errors,'name') }}</div>
   </div>
   <div class="form-group">
      <label>Publishable Key <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'publishable_key') }}" name="publishable_key" value="{{ old_set('publishable_key', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'publishable_key') }}</div>
   </div>
   <div class="form-group">
      <label>Secret Key <span class="required">*</span></label>
      <input type="text" class="form-control {{ showErrorClass($errors,'secret_key') }}" name="secret_key" value="{{ old_set('secret_key', NULL, $rec->keys) }}">
      <div class="invalid-feedback">{{ showError($errors,'secret_key') }}</div>
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