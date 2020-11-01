<div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="form-group">

                        <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>

                    </div>
                    <form action="" method="get">
                        <div class="d-flex form-group">
                            <div class="mx-2">

                                <select name="sort" id="sort" class="form-control bg-primary text-white">
                                    <option value="newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                </select>
                            </div>
                            <div>

                                    <input type="search" name="query" id="" class="form-control" placeholder="Search..." value="{{ request()->has('query')? request('query'):'' }}">

                            </div>

                        </div>
                    </form>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th><input type="checkbox" name="select_all" id="select_all"></th>
                            <th>#</th>
                            <th>Name</th>
                            <th>No of Products</th>
                            <th>No of item</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th><input type="checkbox" name="select_all" id="select_all"></th>
                                <th>#</th>
                                <th>Name</th>
                                <th>No of Products</th>
                                <th>No of item</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @php
                            $sn= $dataList->currentPage()*$dataList->perPage()-$dataList->perPage();
                        @endphp
                        @foreach($dataList as $key =>$dataItem)
                            @php
                              $sn=$sn+1;
                            @endphp
                            <tr>
                                <th><input type="checkbox" name="select_all" id="{{ $dataItem->id }}"></th>
                                <td>{{ $sn }}</td>
                                <td>{{ $dataItem->name }}</td>
                                <td>{{ random_int(50,100) }}</td>
                                <td>{{ $dataItem->created_at }}</td>
                                 <td class="d-flex"><button class="btn btn-primary mr-1">edit</button>
                                     <form action="{{ route('admin.brand.destroy',$dataItem->id) }}" method="post" class="p-0 m-0">
                                         {{ csrf_field() }}
                                         {{ method_field('DELETE') }}
                                         <button type="submit" class="btn btn-danger">Delete</button>
                                     </form>
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {{$dataList->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
