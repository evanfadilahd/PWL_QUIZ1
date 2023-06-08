@extends('User/layouts/main')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Register</h1>
        <form action="/createaccount" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Select Role</label>
                <select id="role" name="role">
                    <option value="2">Buyer</option>
                    <option value="3">Supplier</option>
                </select>
            </div><br><br>
            <div class="mb-3 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">REGISTER</button>
            </div>
        </form>
    </div>

    <div style="text-align: center">
        <a>or</a>
        <a href="{{ route('login') }}">Login</a>
    </div>
    
@endsection