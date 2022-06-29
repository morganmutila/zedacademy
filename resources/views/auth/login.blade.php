<x-layout title="Sign In | {{ config('app.name') }}">
    <div class="d-flex justify-content-center align-items-center my-4 shadow-tiny bg-white ">
        <a href="{{ route('home') }}" class="mb-4"><x-logo/></a>
    </div>
    <div class="container" style="margin-bottom: 80px;">
        <div class="d-flex align-items-center px-md-5 justify-content-center">

            <main class="col-md-6 col-12 d-flex align-items-center justify-content-center flex-column px-md-4"> 

                <a href="{{ url()->previous() }}" class="d-md-none fw-bold text-dark text-decoration-none align-self-start btn btn-link mb-4 ms-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>&nbsp;Go back</a> 
                <h1 class="fs-3 fw-bold mt-md-4 mb-3 mb-md-5">Log in to {{ config('app.name') }}.</h1>  


                <form method="POST" action="{{ route('login') }}" class="w-100 px-3">
                    @csrf
                    
                    <div class="mb-3">
                        <input wire:model="username"  id="username" name="username" placeholder="Username or Email" type="username" class="form-control bg-light rounded @error('username') is-invalid @enderror>" autocomplete="username" value="{{ old('username') }}">
                        @error('username')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <input  wire:model.defer="form.password" id="password" type="password" placeholder="Password" class="form-control bg-light rounded @error('password') is-invalid @enderror" name="password">
                        @error('password')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center">
                            <input class="form-check-input m-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 1.2rem;height: 1.2rem;">
                            <label class="form-check-label text-dark ms-2 small" for="remember">Keep me logged in until I logout
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary text-white w-100 px-5 fw-bold py-2">
                            Log in
                        </button>
                    </div>  
                    <div class="mb-4">
                        <a href="{{ route('password.request') }}" class="fw-semibold text-dark text-decoration-none">Forget password</a>
                    </div>
                    <div class="d-none d-md-block text-center">
                        <a href="{{ url()->previous() }}" class="fw-bold text-dark text-decoration-none align-self-start btn btn-link mb-4 ms-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>&nbsp;Go back</a> 
                    </div>
                </form>
            </main>     
            <div class="fixed-bottom border-top d-flex justify-content-center align-items-center py-4 bg-white mt-5">Don’t have an account?&nbsp;<a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Sign up</a></div>
        </div>
    </div>
</x-layout>
