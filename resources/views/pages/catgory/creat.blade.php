@extends('dashbord.layout.dashbord')
@section('body')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">إضافة منتج جديد</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('category.insert') }}">
        @method('post')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="productName">اسم المنتج</label>
                <input type="text" class="form-control" id="productName" name="name" placeholder="ادخل اسم المنتج">
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
