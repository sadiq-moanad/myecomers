@extends('dashbord.layout.dashbord')
@section('body')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('category.update', ['id' => $category->id]) }}">
        @method('PUT') <!-- Specify the PUT method -->
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label for="productName">Category Name</label>
                <input type="text" class="form-control" value="{{$category->name}}" id="productName" name="name" placeholder="Enter category name">
            </div>
            <div class="form-group">
                <label for="productDescription" >Category Description</label>
                <textarea class="form-control" id="productDescription" name="descrbion" rows="5" placeholder="Enter category description">{{$category->descrbion}}</textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
@endsection
