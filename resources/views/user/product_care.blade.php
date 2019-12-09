@extends('user.layout')
@section('content')
    <style>
        .tour-img img
        {
            max-width: 100%;
        }
        .secondary-image,.actions ,.add-to-cart{ display: none}
        h2 { font-size: 15px;line-height: 18px;}
        .price-box
        {
            margin-top: 10px;
            text-align: center;
        }
    </style>
    <div class="row">
        <div class="col-sm-12">
            <div id="tour_view"></div>
        </div>
    </div>
@stop
@section('script')
    <script>

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
		let routeRendertour  = '{{ route('post.tour.view') }}';

        let tours = localStorage.getItem('tours');
        tours = $.parseJSON(tours)

        if (tours.length > 0 )
        {
            $.ajax({
                url : routeRendertour,
                method : "POST",
                data  : { id : tours},
                success : function(result)
                {
                    $("#tour_view").html('').append(result.data)
                }
            });
        }
    </script>
@stop