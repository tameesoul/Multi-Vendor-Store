@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="">categoryname</label>
    <input type="text" , name="name" class="form-control" value="{{$category->name}}" >
</div>
<div class="form-group">
    <label for="">category parent</label>
    <select name="parent_id" class="form-control">
        <option value="">primary category</option>
        @foreach ($parents as $parent)  
        <option value="{{ $parent->id }}" @selected($category->parent_id == $parent->id)>{{ $parent->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Category Description</label>
    <textarea name="description" class="form-control">{{$category->description}}</textarea> 
</div>

<div class="form-group">
    <label for="">category image</label>
    <input type="file" , name="image" class="form-control">
    @if ($category->image)
    <img src="{{asset('storage/'.$category->image)}}" alt="" height="80">
    @endif
</div>
<div class="form-group">
    <label>Status</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="status_active" value="active" @checked($category->status =='active')>
        <label class="form-check-label" for="status_active">Active</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="status_archived" value="archived" @checked($category->status =='archived')>
        <label class="form-check-label" for="status_archived">Archived</label>
    </div>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-larg btn-outline-primary">Save Category</button>
</div>