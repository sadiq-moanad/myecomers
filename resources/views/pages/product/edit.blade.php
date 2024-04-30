@extends('dashbord.layout.dashbord')
@section('body')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">تعديل الفئة</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
        @method('PUT') <!-- تحديد طريقة PUT -->
        @csrf
        <div class="col-md-10">
            <label for="">ادخل القسم</label>
            <select name="category_id" class="form-control">
                <option>اختر القسم</option>
                @foreach ($categories as $item)
                <option value="{{ $item->id }}" @if($item->id==$product->category_id) selected="selected" @endif>{{ $item->name}}</option>
                @endforeach
    
            </select>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="productName">Category Name</label>
                <input type="text" class="form-control" value="{{$product->productname}}" id="productName" name="productname" >
            </div>
            <div class="form-group">
                <label for="productName">contry</label>
                <input type="text" class="form-control" value="{{$product->contry}}" id="productName" name="contry" >
            </div>
            <div class="form-group">
                <label for="productName">color</label>
                <input type="text" class="form-control" value="{{$product->color}}" id="productName" name="color" >
            </div>
            <div class="form-group">
                <label for="productName">price</label>
                <input type="text" class="form-control" value="{{$product->price}}" id="productName" name="price" >
            </div>
            <div class="form-group">
                <label for="productName">صورة </label>
                <img src="{{asset('images/'.$product->image)}}" width="100">
                <input type="file" class="form-control" id="productName" name="image" placeholder="ادخل صورة المنتج">
            </div>
            <div class="form-group">
                <label for="productDescription" >  وصف الفئة</label>
                <textarea class="form-control" id="productDescription" name="descrbion"  rows="5" >{{$product->descrbion}}</textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </div>
    </form>
</div>
@endsection
