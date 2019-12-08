<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="pro_name">Tên Tours:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm" value="{{ old('t_title',isset($tour->t_title) ? $tour->t_title  : '') }}" name="t_title">
                @if($errors->has('t_title'))
                    <span class="error-text">
                        {{$errors->first('t_title')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name">Mô tả:</label>
                <textarea name="t_description" class="form-control" id="" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm">{{ old('t_description',isset($tour->t_description) ? $tour->t_description : '') }}</textarea>
                @if($errors->has('t_description'))
                    <span class="error-text">
                        {{$errors->first('t_description')}}
                    </span>
                @endif
            </div>
            @if (isset($images))
            <div class="row">
                @foreach($images as $img)
                <div class="col-sm-2">
                    <a href="{{ route('admin.get.delete_image.tour', $img->id) }}" title="Click để xoá ảnh">
                        <img src="{{ pare_url_file($img->pi_slug) }}" alt="" style="height: 100px" class="img img-responsive">
                    </a>
                </div>
                @endforeach
            </div>
            @endif
            <div class="form-group">
                <label for="name">Ảnh Tours:</label>
                <input type="file" name="album[]" multiple>
            </div>
            <div class="form-group">
                <label for="name">Nội dung:</label>
                <textarea name="t_content" class="form-control" id="t_content" cols="30" rows="3" placeholder="Nội dung">
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
                <select name="t_categories" id="" class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('t_categories',isset($tour->t_categories) ? $tour->t_categories : '') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('t_categories'))
                    <span class="error-text">
                        {{$errors->first('t_categories')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name">Thành phố:</label>
                <select name="pro_category_id" id="" class="form-control">
                    <option value="">--Chọn thành phố--</option>
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('pro_category_id',isset($tour->pro_category_id) ? $tour->pro_category_id : '') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('pro_category_id'))
                    <span class="error-text">
                        {{$errors->first('pro_category_id')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Nhà cung cấp:</label>
                <select name="s_supplier_id" id="" class="form-control">
                    <option value="">--Chọn nhà cung cấp--</option>
                    @if(isset($suppliers))
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}"
                                    {{ old('s_supplier_id',isset($tour->s_supplier_id) ? $tour->s_supplier_id : '') == $supplier->id ? "selected='selected'" : "" }}>
                                {{ $supplier->s_name }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('s_supplier_id'))
                    <span class="error-text">
                        {{$errors->first('s_supplier_id')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_price">Giá sản phẩm:</label>
                <input type="number" placeholder="Giá sản phẩm" class="form-control" value="{{ old('pro_price',isset($tour->pro_price) ? $tour->pro_price  : '') }}" name="pro_price">
                @if($errors->has('pro_price'))
                    <span class="error-text">
                        {{$errors->first('pro_price')}}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Thời gian diễn ra:</label>
                <input class="form-control" type="datetime-local"  id="example-datetime-local-input">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="name">% Khuyến mãi:</label>--}}
{{--                <input type="number" placeholder="% giảm giá" class="form-control" name="pro_sale" value="{{ old('pro_sale',isset($product->pro_sale) ? $product->pro_sale  : '0') }}">--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="name">Số lượng vé:</label>
                <input type="number" placeholder="10" class="form-control" name="t_number" value="{{ old('t_number',isset($tour->t_number) ? $tour->t_number  : '0') }}">
            </div>

            <div class="form-group">
                <img  id="out_img" src="{{ asset('images/no_image.jpg') }}" alt="" style="width: 100%;height: 300px">
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="name">Avatar:</label>--}}
{{--                <input type="file" id="input_img"  name="avatar" class="form-control">--}}
{{--            </div>--}}
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="hot">  Nổi bật </label>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
</form>

@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
		CKEDITOR.replace('t_content');
    </script>
@stop
