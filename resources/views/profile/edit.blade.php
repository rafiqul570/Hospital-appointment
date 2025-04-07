
@extends('admin.layouts.template')
@section('content')
<div class="container card p-5">
    <h2>Edit Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Update Profile -->
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="form-control">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" class="form-control">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>

    <hr>

    <!-- Update Password -->
    <h4>Change Password</h4>
    <form action="{{ route('admin.profile.updatePassword') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Current Password:</label>
            <input type="password" name="current_password" class="form-control">
            @error('current_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>New Password:</label>
            <input type="password" name="password" class="form-control">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>Confirm New Password:</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning">Update Password</button>
    </form>

    <hr>

    <!-- Delete Profile -->
    <h4>Delete Profile</h4>
    <form action="{{ route('profile.destroy') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure? This action cannot be undone.')">Delete Profile</button>
    </form>
</div>
@endsection

