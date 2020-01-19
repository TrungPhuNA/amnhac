<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name Category" value="{{ old('name',isset($category->c_name) ? $category->c_name  : '') }}" name="name">
        @if($errors->has('name'))
            <span class="error-text">
                {{$errors->first('name')}}
            </span>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>