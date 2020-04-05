<div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th> No Of Products</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>No of Products</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($dataList as $dataItem)
                        <tr>
                            <td>{{ $dataItem->name }}</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                                <td><button class="btn btn-primary">edit</button>
                              <button class="btn btn-danger">Delete</button></td>
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
