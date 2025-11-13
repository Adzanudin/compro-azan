@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $title ?? ''}}</h5>
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Fullname</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter your fullname" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{route('blog.index')}}" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
