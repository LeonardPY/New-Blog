@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Tag</h1>
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
                    <form action="{{ route('admin.tag.update', $tag->id) }}" method="post" class="w-25">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Add tag" value="{{ $tag->title }}">
                            @error('title')
                                <div class="text-danger" >{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection