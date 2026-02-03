@extends('website.layouts.app')

@section('title', 'Investor Login — FaceLock AI')

@section('content')

<style>
    .login-card {
        background: #121a2e;
        padding: 2rem;
        border-radius: 16px;
        box-shadow: 0 0 20px rgba(255,255,255,0.05);
    }
  
</style>

<!-- LOGIN SECTION -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5">

                <div class="text-center mb-4">
                    <h1 class="h3 text-danger-book">Investor Login</h1>
                </div>

                <div class="login-card">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email"
                                class="form-control label_login"
                                placeholder="Enter email"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input 
                                type="password"
                                name="password"
                                class="form-control label_login"
                                placeholder="Enter password"
                                required
                            >
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <label>
                                <input type="checkbox" name="remember"> Remember me
                            </label>
                            <a href="" class="text-primary">
                                Forgot password?
                            </a>
                        </div>

                        <button type="submit" class="btn theme-button-one w-100">
                            Login
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
