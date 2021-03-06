<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="pro_name">Name Tours:</label>
                <input type="text" class="form-control" placeholder="Name" value="{{ old('t_title',isset($tour->t_title) ? $tour->t_title  : '') }}" name="t_title">
                @if($errors->has('t_title'))
                    <span class="error-text">
                        {{$errors->first('t_title')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <textarea name="t_description" class="form-control" id="" cols="30" rows="3" placeholder="Description">{{ old('t_description',isset($tour->t_description) ? $tour->t_description : '') }}</textarea>
                @if($errors->has('t_description'))
                    <span class="error-text">
                        {{$errors->first('t_description')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Banner Tours:</label>
                <input type="file" name="t_banner">
                @if(isset($tour->t_banner))
                    <img src="{{ pare_url_file($tour->t_banner) }}" alt="" class="img img-responsive" style="width: 80px;height: 80px;">
                @endif

            </div>
            <div class="form-group">
                <label for="name">Content:</label>
                <textarea name="t_content" class="form-control" id="t_content" cols="30" rows="3" placeholder="Content">
                    {{ old('t_content',isset($tour->t_content) ? $tour->t_content : '') }}
                </textarea>
                @if($errors->has('t_content'))
                    <span class="error-text">
                        {{$errors->first('t_content')}}
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name">Categories:</label>
                <select name="t_category_id" id="" class="form-control">
                    <option value="">--Click--</option>
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('t_category_id',isset($tour->t_category_id) ? $tour->t_category_id : '') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('t_category_id'))
                    <span class="error-text">
                        {{$errors->first('t_category_id')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name">City:</label>
                <select name="t_city" id="t_city" class="form-control">
                    <option value="">--Click City--</option>
                    @if(isset($cities))
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}" {{ old('t_city',isset($tour->t_city) ? $tour->t_city : '') == $city->id ? "selected='selected'" : "" }}>{{ $city->name }}</option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('t_city'))
                    <span class="error-text">
                        {{$errors->first('t_city')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Address:</label>
                <textarea name="t_address" class="form-control" id="" cols="30" rows="3" placeholder="Address...">{{ old('t_address',isset($tour->t_address) ? $tour->t_address : '') }}</textarea>
                @if($errors->has('t_address'))
                    <span class="error-text">
                        {{$errors->first('t_address')}}
                    </span>
                @endif
                @if($errors->has('t_address'))
                    <span class="error-text">
                        {{$errors->first('t_address')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Music group or singer:</label>
                <select name="t_singer_band_id" id="" class="form-control">
                    <option value="">--Click Music group or singer --</option>
                    @if(isset($singerBands))
                        @foreach($singerBands as $singerBand)
                            <option value="{{ $singerBand->id }}"
                                    {{ old('t_singer_band_id',isset($tour->t_singer_band_id) ? $tour->t_singer_band_id : '') == $singerBand->id ?
                                    "selected='selected'" : "" }}>
                                {{ $singerBand->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('t_singer_band_id'))
                    <span class="error-text">
                        {{$errors->first('t_singer_band_id')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_price">Price:</label>
                <input type="number" placeholder="Price" class="form-control" value="{{ old('t_price',isset($tour->t_price) ? $tour->t_price  : '') }}" name="t_price">
                @if($errors->has('t_price'))
                    <span class="error-text">
                        {{$errors->first('t_price')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Time:</label>

                <div class='input-group date' id="time_start">
                    <input type='text' name="t_time_start" class="form-control" value="{{ old('t_time_start',isset($tour->t_time_start) ? $tour->t_time_start  : '') }}" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>

                </div>
                @if($errors->has('t_time_start'))
                    <span class="error-text">
                        {{$errors->first('t_time_start')}}
                    </span>
                @endif
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="name">% Khuyến mãi:</label>--}}
{{--                <input type="number" placeholder="% giảm giá" class="form-control" name="pro_sale" value="{{ old('pro_sale',isset($tour->pro_sale) ? $tour->pro_sale  : '0') }}">--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="name">Number:</label>
                <input type="number" placeholder="10" class="form-control" name="t_count_ticket"
                       value="{{ old('t_count_ticket',isset($tour->t_count_ticket) ? $tour->t_count_ticket  : '0') }}">
                @if($errors->has('t_count_ticket'))
                    <span class="error-text">
                        {{$errors->first('t_count_ticket')}}
                    </span>
                @endif
            </div>

{{--            <div class="form-group">--}}
{{--                <img  id="out_img" src="{{ asset('images/no_image.jpg') }}" alt="" style="width: 100%;height: 300px">--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="name">Avatar:</label>
                <input type="file" id="input_avatar"  name="t_avatar" class="form-control">
                @if(isset($tour->t_avatar))
                    <img src="{{ pare_url_file($tour->t_avatar) }}" alt="" class="img img-responsive" style="width: 80px;height: 80px;">
                @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="t_hot" value="1">  Hot </label>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Save info</button>
</form>

@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" ></script>
    <script>
		CKEDITOR.replace('t_content');
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#time_start").datetimepicker();
        });
    </script>
@endsection
@section('href')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@stop
