<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="pro_name">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm" value="{{ old('pro_name',isset($tour->pro_name) ? $tour->pro_name  : '') }}" name="pro_name">
                @if($errors->has('pro_name'))
                    <span class="error-text">
                        {{$errors->first('pro_name')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name">Mô tả:</label>
                <textarea name="pro_description" class="form-control" id="" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm">{{ old('pro_description',isset($tour->pro_description) ? $tour->pro_description : '') }}</textarea>
                @if($errors->has('pro_description'))
                    <span class="error-text">
                        {{$errors->first('pro_description')}}
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
                <label for="name">Ảnh sản phảm:</label>
                <input type="file" name="album[]" multiple>
            </div>
            <div class="form-group">
                <label for="name">Nội dung:</label>
                <textarea name="pro_content" class="form-control" id="pro_content" cols="30" rows="3" placeholder="Nội dung">{{ old('pro_content',isset($tour->pro_content) ? $tour->pro_content : '') }}</textarea>
                @if($errors->has('pro_content'))
                    <span class="error-text">
                        {{$errors->first('pro_content')}}
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name">Loại sản phẩm:</label>
                <select name="pro_category_id" id="" class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
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
                <label for="name">Time bảo hành:</label>
                <input type="number" placeholder="Thời gian bảo hành" class="form-control"
                       name="pro_warranty" value="{{ old('pro_warranty',isset($tour->pro_warranty) ? $tour->pro_warranty  : '0') }}">
            </div>
            <div class="form-group">
                <label for="name">% Khuyến mãi:</label>
                <input type="number" placeholder="% giảm giá" class="form-control" name="pro_sale" value="{{ old('pro_sale',isset($tour->pro_sale) ? $tour->pro_sale  : '0') }}">
            </div>

            <div class="form-group">
                <label for="name">Số lượng sản phẩm:</label>
                <input type="number" placeholder="10" class="form-control" name="pro_number" value="{{ old('pro_number',isset($tour->pro_number) ? $tour->pro_number  : '0') }}">
            </div>

            <div class="form-group">
                <img  id="out_img" src="{{ asset('images/no_image.jpg') }}" alt="" style="width: 100%;height: 300px">
            </div>

            <div class="form-group">
                <label for="name">Avatar:</label>
                <input type="file" id="input_img"  name="avatar" class="form-control">
            </div>
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
		CKEDITOR.replace( 'pro_content' );
    </script>
@stop
