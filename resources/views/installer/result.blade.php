@extends('installer.template')
@section('title', ($data['status'] == 1) ? 'Installation Complete' : 'Installation Failed')
@section('content')

<div class="card mx-auto" style="width: 28rem; margin-bottom: 10%;">
   <div class="card-body">
      <h4 class="card-title"><i class="fas {{ $data['icon'] }}"></i> {{ $data['title'] }}</h4>
      <hr>
        <p><?php echo $data['msg']; ?></p> 
        
        @if($data['status'] == 1)
        	<table class="table table-sm">
        		<tr>
        			<td>Email</td>
        			<td class="text-right">admin@demo.com</td>
        		</tr>
        		<tr>
        			<td>Password</td>
        			<td class="text-right">123456</td>
        		</tr>
        	</table>        
            <a href="{{ route('dashboard') }}"class="btn btn-primary">Go to Login page</a>
        @endif
   </div>
</div>
@endsection      