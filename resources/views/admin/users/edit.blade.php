@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <h5 class="card-header">Chỉnh sửa người dùng</h5>
                <div class="card-body">
                        <form action="{{ route('users.update', $users->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Fullname</label>
                                <input name="name" value="{{ $users->name }}" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input name="user_name" value="{{ $users->user_name }}" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" value="{{ $users->password }}" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input name="user_email" value="{{ $users->user_email }}" type="email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input name="user_phone" value="{{ $users->user_phone }}" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Images</label>
                                <div class="d-flex">
                                    <div>
                                        @if(!$users->user_image)
                                            <img style="width: 100px; height: 100px"
                                             src="{{ ImageConstant::AVATAR }}"
                                             class="img-border-radius avatar-40 img-fluid" id="user_image">
                                        @else
                                            <img style="width: 100px; height: 100px" src="{{ asset('storage/'.substr($users->user_image, 7)) }}" alt="">
                                        @endif

                                    </div>
                                    <div>
                                        <input onchange="loadFile(event)" name="user_image" value="" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role" id="">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Chỉnh sửa</button>
                                <a href="{{ route('users.index') }}" class="btn btn-info">Trở về</a>
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
            var output = document.getElementById('user_image');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
