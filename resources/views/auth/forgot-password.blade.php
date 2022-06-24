<x-layout title="Forgot Password | {{ config('app.name') }}">

    <div class="d-flex justify-content-between align-items-center py-4 shadow-tiny px-3 px-md-4">
        <a href="{{ route('home') }}"><x-logo/></a>
        <a class="btn-login nav-link fw-semibold text-primary p-2 px-3 rounded " href="{{ route('login') }}">Sign in</a>
    </div>    
    <div class="container">
        <div class="d-flex align-items-center px-md-5 justify-content-center">

            <main class="col-md-6 col-12 d-flex align-items-center justify-content-center flex-column px-2 px-md-4">     
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="fw-bold mt-5 mb-4">Password Reset</h1> 
                <p class="mb-4 text-dark text-center" style="font-family:helvetica;">Enter your <strong>Zedacademy username</strong>, or the <strong>email address</strong>. We'll send you an email with your username and a link to reset your password.</p>

                <form method="POST" action="{{ route('password.email') }}" class="px-md-5 px-3 w-100">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="fw-semibold">Email address or username</label>
                        <input id="email" name="email" type="text" class="form-control bg-light rounded-lg @error('email') is-invalid @enderror>" autocomplete="email" value="{{ old('email') }}">
                        @error('email')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-primary text-white py-2 px-3 fw-semibold">
                            Send Reset link
                        </button>
                    </div>
                    <div class="mb-3 small text-center">
                        If you still need help, contact Zedacademy Support.
                    </div> 
                </form>
            </main>
        </div>    
    </div>

</x-layout>
