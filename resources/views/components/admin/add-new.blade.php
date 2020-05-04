<div>
    <div class="row">
        <div class="col">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewBrand"
                        id="#AddNewBrand">Add New</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddNewBrand" tabindex="-1" role="dialog"
         aria-labelledby="AddNewBrandTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.brands.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="AddNewBrandTitle">Create new Brand</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="name" class="form-control text-lowercase" id="Inputslug" placeholder="Enter slug" value="{{ old('slug') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="display_name">Display Name</label>
                            <input type="text" name="display_name" class="form-control" id="Inputdisplay_name" placeholder="Enter Display Name" value="{{ old('slug') }}">
                            @error('display_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="brandImage" name="brandImage">
                                <label class="custom-file-label" for="brandImage">Choose Brand Image</label>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add New Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
