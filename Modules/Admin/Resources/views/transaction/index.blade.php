@extends('admin::layouts.master')
@section('content')
{{--    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">--}}
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Ticket Manage</a></li>
            <li class="active">List</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-inline" action="" style="margin-bottom: 20px">
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control"  placeholder="Tên sản phẩm ..." name="name" value="{{ \Request::get('name') }}">--}}
                {{--</div>--}}
                <div class="form-group col-sm-4" style="display: inline-block">
                    <input style="width: 100%" type="text" id="dates" name="dates" value="{{ Request::query('dates') }}" class="form-control" autocomplete="off" placeholder="vd : 10/29/2018 - 10/29/2018">
                </div>

                <div class="form-group">
                    <select name="status" id="" class="form-control">
                        <option value="">__Active__ </option>
                        <option value="2" {{ Request::get('status') == 2 ? "selected='seletedd'" : '' }}>Process</option>
                        <option value="1" {{ Request::get('status') == 1 ? "selected='seletedd'" : '' }}>Success</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Ticket manage</h2>
        <p> Total Price : <b>{{ number_format($transactionsTotal,0,',','.') }}</b> VNĐ</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Info user</th>
                <th>Total Money</th>
                <th>Action</th>
                <th style="width: 15%">Payment methods</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                 @foreach($transactions as $transaction)
                     <tr>
                         <td>#{{ $transaction->id }}</td>
                         <td>
                             <p><b style="display: inline-block;width: 70px">Name </b>{{ isset($transaction->user->name) ? $transaction->user->name : '[N\A]' }}</p>
                             <p><b style="display: inline-block;width: 70px">Address </b>{{ $transaction->tr_address }}</p>
                             <p><b style="display: inline-block;width: 70px">Phone </b>{{ $transaction->tr_phone }}</p>
                             <p><b style="display: inline-block;width: 70px">Time </b>{{ $transaction->created_at->format('d-m-Y') }}</p>
                         </td>
                         <td>{{ number_format($transaction->tr_total,0,',','.') }} VNĐ</td>
                         <td>
                             @if ( $transaction->tr_status == 1)
                                 <a href="#" class="label-success label">Success</a>
                             @else
                                 <a href="{{ route('admin.get.active.transaction',$transaction->id) }}" class="label label-default">Process</a>
                             @endif
                         </td>
                         <td>
							 <span class="label-primary label">Direct payment</span>
                         </td>
                         <td>
                             <a class="btn_customer_action" href="{{ route('admin.get.delete.order',$transaction->id) }}"><i class="fa fa-trash"></i> Delete</a>
                             <a class="btn_customer_action js_order_item" data-id="{{ $transaction->id }}" href="{{ route('admin.get.view.order',$transaction->id) }}">
								 <i class="fa fa-eye"></i> View </a>
                         </td>
                     </tr>
                 @endforeach
            </tbody>
        </table>
        <div>
            {!! $transactions->links() !!}
        </div>
    </div>

    <div class="modal fade" id="myModalOrder" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Order code details#<b class="transaciont_id"></b></h4>
                </div>
                <div class="modal-body" id="md_content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@stop
@section('script')
{{--    <script src="{{ asset('js/moment.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/daterangepicker.js') }}"></script>--}}
    <script>
        $(function(){
        	$(".js_order_item").click(function(event){
				event.preventDefault();
				let $this = $(this);
				let url = $this.attr('href');
				$("#md_content").html('')
				$(".transaciont_id").text('').text($this.attr('data-id'));

				$("#myModalOrder").modal('show');

				$.ajax({
					url: url,
				}).done(function(result) {
					if (result)
                    {
                    	$("#md_content").append(result);
                    }
				});
            });
        })
		// $(function () {
		//
		// 	$('input[name="dates"]').daterangepicker({
		// 		autoUpdateInput: false,
		// 		locale: {
		// 			cancelLabel: 'Clear'
		// 		}
		// 	});
		//
		// 	$('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		// 		$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		// 	});
		//
		// 	$('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		// 		$(this).val('');
		// 	});
		//
		// })
    </script>
@stop