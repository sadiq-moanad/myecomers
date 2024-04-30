@extends('dashbord.layout.dashbord')
@section('body')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">إضافة منتج جديد</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('product.insert') }}" enctype="multipart/form-data">
        @method('post')
        @csrf
         <div class="col-md-10">
              <label for="">ادخل القسم</label>
            <select name="category_id" class="form-control">
                <option>اختر القسم</option>
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name}}</option>
                @endforeach

            </select>  

        <div class="card-body">
            <div class="form-group">
                <label for="productName">اسم المنتج</label>
                <input type="text" class="form-control" id="productName" name="productname" placeholder="ادخل اسم المنتج">
            </div>
             <div class="form-group">
                <label for="productName">contry	 </label>
                <input type="text" class="form-control" id="productName" name="contry" placeholder="ادخل اسم المنتج">
            </div>
            <div class="form-group">
                <label for="">price </label>
                <input type="text" class="form-control" id="" name="price" placeholder="ادخل السعر">
            </div>
            <div class="form-group">
                <label for="productName">color </label>
                <input type="text" class="form-control" id="productname" name="color" placeholder="ادخل اسم المنتج">
            </div>

            <div class="form-group">
                <label for="productName">صورة </label>
                <input type="file" class="form-control" id="productName" name="image" placeholder="ادخل صورة المنتج">
            </div>
           
            <div class="form-group">
                <label for="productDescription">وصف المنتج</label>
                <textarea class="form-control" id="productDescription" name="descrbion" rows="5" placeholder="ادخل وصف المنتج"></textarea>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="exampleCheck1">تحقق من هذا</label>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">إرسال</button>
        </div>
    </form>
</div>
@endsection
