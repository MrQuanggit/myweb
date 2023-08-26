@extends('admin.layout.master')
@section('page-title','Products Create')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input name="product_name" value="{{ old('product_name') }}" type="text"
                                   class="form-control @error('product_name') is-invalid @enderror">
                            @error('product_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" value="{{ old('description') }}" type="text"
                                   class="form-control @error('description') is-invalid @enderror">
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input name="stock" type="text" value="{{ old('stock') }}"
                                   class="form-control @error('stock') is-invalid @enderror">
                            @error('stock')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>View</label>
                            <input name="view" type="text" value="0"
                                   class="form-control @error('view') is-invalid @enderror">
                            @error('view')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>PriceEach</label>
                            <input name="priceEach" type="text" value="{{ old('priceEach') }}"
                                   class="form-control @error('priceEach') is-invalid @enderror">
                            @error('priceEach')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input name="slug" type="text" value="{{ old('slug') }}" class="form-control">
                            @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <input name="size" type="text" value="{{ old('size') }}" class="form-control">
                            @error('size')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image1</label>
                            <div class="d-flex">
                                <div>
                                    <img style="width: 100px; height: 100px"
                                         src="{{ ImageConstant::PRODUCT }}"
                                         class="img-border-radius avatar-40 img-fluid" id="image1">
                                </div>
                                <div>
                                    <input onchange="loadFile(event)" name="image1" type="file" value="{{ old('image1') }}" class="form-control">
                                    @error('image1')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image2</label>
                            <div class="d-flex">
                                <div>
                                    <img style="width: 100px; height: 100px"
                                         src="{{ ImageConstant::PRODUCT }}"
                                         class="img-border-radius avatar-40 img-fluid" id="image2">
                                </div>
                                <div>
                                    <input onchange="loadFile(event)" name="image2" type="file" value="{{ old('image2') }}" class="form-control">
                                    @error('image2')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image3</label>
                            <div class="d-flex">
                                <div>
                                    <img style="width: 100px; height: 100px"
                                         src="{{ ImageConstant::PRODUCT }}"
                                         class="img-border-radius avatar-40 img-fluid" id="image3">
                                </div>
                                <div>
                                    <input onchange="loadFile(event)" name="image3" type="file" value="{{ old('image3') }}" class="form-control">
                                    @error('image3')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image4</label>
                            <div class="d-flex">
                                <div>
                                    <img style="width: 100px; height: 100px"
                                         src="{{ ImageConstant::PRODUCT }}"
                                         class="img-border-radius avatar-40 img-fluid" id="image4">
                                </div>
                                <div>
                                    <input onchange="loadFile(event)" name="image4" type="file" value="{{ old('image4') }}" class="form-control">
                                    @error('image4')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image5</label>
                            <div class="d-flex">
                                <div>
                                    <img style="width: 100px; height: 100px"
                                         src="{{ ImageConstant::PRODUCT }}"
                                         class="img-border-radius avatar-40 img-fluid" id="image5">
                                </div>
                                <div>
                                    <input onchange="loadFile(event)" name="image5" type="file" value="{{ old('image5') }}" class="form-control">
                                    @error('image5')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" id="">
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="{{route('product.index')}}" class="btn btn-info">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(event.srcElement.name);
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
