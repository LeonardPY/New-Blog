@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.user.update', $user->id) }}" method="post" class="w-25">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="User Name">
                            @error('name')
                                <div class="text-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Emile">
                            @error('email')
                            <div class="text-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Select Role</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $role_id => $role)
                                    <option
                                        value="{{ $role_id }}" {{ $role_id  == $user->role ? 'selected' : '' }}>{{ $role }}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="Hidden" name="user_id" value="{{ $user->id }}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
