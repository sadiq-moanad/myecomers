@extends('dashbord.layout.dashbord')
@section('body')
<a href="{{ route('category.creat') }}">
    <div class="btn btn-primary"> اضافة فسم </div>
</a>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>z</th>
                            <th>Status</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $index=>$category)
                        <tr>
                            <td>{{$index +1}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->descrbion}}</td>
                            <td>
                                <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-sm">تعديل</a>
                                <form method="POST" action="{{ route('category.remove', ['id' => $category->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا المنتج؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
{{$categories->links()}}
@endsection
