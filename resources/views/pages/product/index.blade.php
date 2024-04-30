@extends('dashbord.layout.dashbord')
@section('body')
<a href="{{ route('product.creat') }}">
<div class="btn btn-primary"> اضافة منتج </div>
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
                      <th>اسم </th>
                      <th>وصف</th>

                      <th>سعر</th>
                      <th>البلد المصنع</th>
                      <th>اللون</th>
                      <th>الصورة</th>
                      <th>ت</th>
                      <th>ت</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $prodect) 
                    <tr>
                        <td>{{$prodect->productname}}</td>
                        <td>{{$prodect->descrbion}}</td>
                        <td>{{$prodect->price}}</td> 
                        <td>{{$prodect->contry}}</td> 
                        <td>{{$prodect->color}}</td> 
                        
                        <td><img src = "{{asset('images/'.$prodect->image)}}" width="80"></td> 

                        <td>
                            <a href="{{ route('product.edit', ['id' => $prodect->id]) }}" class="btn btn-primary btn-sm">تعديل</a>
                            {{-- <form method="POST" action="{{ route('product.remove', ['id' => $prodect->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا المنتج؟')">حذف</button>
                            </form>  --}}
                        </td> 
                        <td> <form method="POST" action="{{ route('product.remove', ['id' => $prodect->id]) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا المنتج؟')">حذف</button>
                      </form> </td>
                    </tr>
                    @endforeach
                    
                </table>
              </div>
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        @endsection
        