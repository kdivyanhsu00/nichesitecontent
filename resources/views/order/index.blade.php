@extends('layouts.dash')
@section('title', 'Orders')
@section('content')
<div class="container page-container">
   <div class="row">
      <div class="col-md-12">
         <h4>Orders</h4>
         <br>
         @include('order.partials.statistics')
      </div>
      <div class="col-md-4">
         @include('order.partials.search')
      </div>
      <div class="col-md-8">
         <table id="orders_table" class="w-100">
            <thead>
               <tr>
                  <th scope="col"></th>
               </tr>
            </thead>
         </table>
      </div>
   </div>
</div>
@endsection

@push('scripts')
<script>
    $(function(){

        $('select').select2({
              theme: 'bootstrap4',
        });

        var oTable = $('#orders_table').DataTable({
          "bLengthChange": false,
           searching: false,
            processing: true,
            serverSide: true,
            sorting: false, 
            ordering : false,                              
            "ajax": {
                    "url": "{!! route('orders_datatable') !!}",
                    "type": "POST",
                    'headers': {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },                   
                    "data": function ( d ) {
                        
                        d.order_date              = $("input[name=order_date]").val();
                        d.order_number              = $("input[name=order_number]").val();
                        d.staff_id                  = $('select[name=staff_id]').val();
                        d.order_status_id               = $('select[name=order_status_id]').val();
                        d.dead_line               = $('select[name=dead_line]').val();
                        // d.sort_by                   = $('select[name=sort_by]').val();
                       
                        // etc
                    }
            },
            columns: [                              
                {data: 'customer_html', name: 'customer_html'},  
                // {data: 'customer', name: 'customer'},                                
                // {data: 'due_date', name: 'due_date'},
                // {data: 'assignee', name: 'assignee'},
                // {data: 'total', name:'total', className: "text-right"},
                
                
            ]
        }).on('page.dt', function() {
          $('html, body').animate({
            scrollTop: $(".dataTables_wrapper").offset().top
          }, 'slow');
        });


        $('#search-form').on('submit', function(e) {
          oTable.draw();
          e.preventDefault();
        });

        // Date pickers

        $('input[name="order_date"]').daterangepicker({
          autoUpdateInput: false,
          ranges: dateRanges,// globaly defined
          locale: {
              cancelLabel: 'Clear'
          }
        })
        .on('apply.daterangepicker', function(ev, picker) {

            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));

        }).on('cancel.daterangepicker', function(ev, picker) {

            $(this).val('');
        });


    });      
</script>
@endpush