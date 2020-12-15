<div class="card order-box shadow bg-white rounded">
   <h5>
      <a href="{{ route('orders_show', $order->id) }}">
      {{ $order->title }}
      </a>
   </h5>
   <div class="row">
      <div class="col-md-6">
         {{ $order->number }} 
      </div>
      <div class="col-md-6  text-right">
         <div><span class="badge {{ $order->status->badge }}">{{ $order->status->name }}</span></div>
      </div>
   </div>
   <p class="order-instruction">
      <?php echo Str::words($order->instruction, 20, ' ...'); ?>         
   </p>
   <div class="row order-overview">
      <div class="col-md-6"><span class="font-weight-bold">Service Type</span>
         <br>
         {{ $order->service->name }}
      </div>
      <div class="col-md-6"><span class="font-weight-bold">Total</span>
         <br>
         {{ format_money($order->total) }}
      </div>
   </div>
   <div class="row order-overview">
      <div class="col-md-6"><span class="font-weight-bold">Posted</span>
         <br>
         {{ $order->created_at->format('d-M-Y')}}
      </div>
      <div class="col-md-6"><span class="font-weight-bold">Deadline</span>
         <br>
         {{ $order->dead_line->format('d-M-Y')}}
      </div>
   </div>
</div>