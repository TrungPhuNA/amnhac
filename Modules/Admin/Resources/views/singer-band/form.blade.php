<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name" value="{{ old('name',isset($singerBand->name) ? $singerBand->name  : '') }}" name="name">
        @if($errors->has('name'))
            <span class="error-text">
                {{$errors->first('name')}}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Type:</label>
        <label class="checkbox-inline"><input type="radio" name="type" @if(!isset($singerBand)) {{ 'checked' }} @endif @if(isset($singerBand)) {{ $singerBand->type==1 ? 'checked' : ''}} @endif value="1" > Singer </label>
        <label class="checkbox-inline"><input type="radio" name="type"  @if(isset($singerBand)) {{ $singerBand->type == 0 ? 'checked' : ''}} @endif value="0"> Band </label>
    </div>
    <div class="form-group">
        <label for="name">Name user:</label>
        <input type="text" class="form-control" data-role="tagsinput" placeholder="Name user..."   value ="{{ old('name_member',isset($singerBand->name_member) ? $singerBand->name_member : '') }}" name="name_member">
        @if($errors->has('name_member'))
            <span class="error-text">
                {{$errors->first('name_member')}}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Description:</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="3" placeholder="Description ...">{{ old('description',isset($singerBand->description) ? $singerBand->description : '') }}</textarea>
        @if($errors->has('description'))
            <span class="error-text">
                {{$errors->first('description')}}
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Content:</label>
        <textarea name="content" class="form-control" id="content" cols="30" rows="3" placeholder="Content">
                    {{ old('content',isset($singerBand->content) ? $singerBand->content : '') }}
                </textarea>
        @if($errors->has('content'))
            <span class="error-text">
                        {{$errors->first('content')}}
                    </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Avatar:</label>
        <input type="file" id="avatar"  name="avatar" class="form-control">
        @if(isset($singerBand->avatar))
            <img src="{{ pare_url_file($singerBand->avatar) }}" alt="" class="img img-responsive" style="width: 80px;height: 80px;">
        @endif
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
@section('href')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
@stop