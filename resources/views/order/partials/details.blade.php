<div class="row">
   <div class="col-md-8">
      <div class="card order-box">
         <h5>{{ $order->title }}</h5>
         <div>
            <span class="badge badge-brilliant-rose">
                {{ $order->service->price_type->name }}
            </span>
        </div>
         <hr>
         <div class="row">
            <div class="col-md-6">
               {{ $order->number }} 
            </div>
            <div class="col-md-6  text-right">
               <div><span class="badge {{ $order->status->badge }}">{{ $order->status->name }}</span></div>
            </div>
         </div>
         <div class="row mt-4">
            @role('admin')
            <div class="col-md-8">
               Client : <a href="{{ route('user_profile', $order->customer_id) }}">{{ $order->customer->full_name }}</a>
            </div>
            <div class="col-md-4 text-right">
               Total {{ format_money($order->total) }}
            </div>
            @endrole
            @role('staff')
            <div class="col-md-4">
               Payout Budget: {{ format_money($order->staff_payment_amount) }}
            </div>
            @endrole
         </div>
         <p class="order-instruction">
            <?php echo $order->instruction; ?>               
         </p>
         <hr>
         <div class="row order-overview">
            <div class="col-md-6"><span class="font-weight-bold">Service Type</span>
               <br>
               {{ $order->service->name }}
               @if($order->service->price_type_id == PriceType::PerPage)
                  <div class="font-12 text-danger"><i>* ({{ $order->spacing_type}} spacing)</i></div>
               @endif
            </div>
            <div class="col-md-6"><span class="font-weight-bold">Assigned To</span>
               @if(isset($order->assignee))
               <br>
                  @if(auth()->user()->hasRole('admin'))
                     <a href="{{ route('user_profile', $order->staff_id) }}">
                        {{ $order->assignee->full_name }}
                     </a>            
                  @else
                     {{ $order->assignee->full_name }}
                  @endif

               @else
                 <br>
                  None
               @endif
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
         <div class="row order-overview">
            <div class="col-md-6">
               <span class="font-weight-bold">Additional Services</span>
               <br>
               <ol class="pl-4">
                  @foreach($order->added_services()->get() as $service)
                  <li>{{ $service->name }}</li>
                  @endforeach
               </ol>
            </div>
            <div class="col-md-6">
               <div class="font-weight-bold">Quantity</div>               
               {{ $order->quantity }} {{ $order->unit_name }}
            </div>
         </div>
        
         <div class="row order-overview">
            <div class="col-md-6">
               <span class="font-weight-bold">Revision Requested</span>
               <br>
               {{  $order->revisionUsed() }}
            </div>
            <div class="col-md-6">
               <div class="font-weight-bold">Attachments</div>
               <ol class="pl-4">
                  @foreach($order->attachments as $attachment)
                  <li><a target="_blank" href="{{ route('download_attachment', 'file=' .  $attachment->name) }}">{{ $attachment->display_name }}</a></li>
                  @endforeach
               </ol>
            </div>         
         </div>
      </div>
   </div>
   <div class="col-md-4">
      @if($order->order_status_id == ORDER_STATUS_COMPLETE)
         @include('order.partials.rating')
         <br>
      @endif
      @if($order->customer_id == auth()->user()->id)
         @include('order.partials.deliverables')
      @endif
      @if($order->staff_id == auth()->user()->id) 
         @include('order.partials.submit_work')
         <br>
      @endif
      @if(auth()->user()->hasRole('admin') && $order->order_status_id == ORDER_STATUS_NEW)     
         @include('order.partials.assignee')
         <br>         
      @endif
      @role('admin')
         @include('order.partials.manage_status')
      @endrole
      @if(auth()->user()->hasRole('staff') && settings('enable_browsing_work') == 'yes' && $order->order_status_id == ORDER_STATUS_NEW && empty($order->staff_id))
         @include('order.partials.choose_work')
      @endif

    <!--   @role('admin')
         @if($order->isAFollower(auth()->user()->id))
            <a href="{{ route('orders_unfollow', $order->id) }}">Unfollow</a>     
         @else   
            <a href="{{ route('orders_follow', $order->id) }}">Follow</a>
         @endif   
      @endrole -->
   </div>
</div>