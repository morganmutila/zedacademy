<x-layout title="Sign In | {{ config('app.name') }}">
    <div class="d-flex justify-content-center align-items-center my-4 border-bottom">
        <a href="{{ route('home') }}" class="mb-4"><x-logo/></a>
    </div>
    <div class="container">
        <div class="d-flex align-items-center px-md-5 justify-content-center">

            <main class="col-md-5 col-12 d-flex align-items-center justify-content-center flex-column px-md-4"> 

                <h1 class="fs-3 fw-bold mt-md-4 mb-3 mb-md-5">Sign in to {{ config('app.name') }}.</h1>  


                <form method="POST" action="{{ route('login') }}" class="w-100 px-3">
                    @csrf
                    
                    <div class="mb-3">
                        <input wire:model="username"  id="username" name="username" placeholder="Username or Email" type="username" class="form-control bg-light rounded @error('username') is-invalid @enderror>" autocomplete="username" value="{{ old('username') }}">
                        @error('username')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <input  wire:model.defer="form.password" id="password" type="password" placeholder="Password" class="form-control bg-light rounded @error('password') is-invalid @enderror" name="password">
                        @error('password')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center">
                            <input class="form-check-input m-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 1.2rem;height: 1.2rem;">
                            <label class="form-check-label text-dark ms-2 small" for="remember">Keep me signed in until I sign out
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary text-white w-100 px-5 fw-bold py-2">
                            Sign in
                        </button>
                    </div>  
                    <div class="mb-4">
                        <a href="{{ route('password.request') }}" class="fw-semibold text-dark text-decoration-none">Forget password</a>
                    </div>
                    

                    <div class="text-center">
                      <p>Not a member yet? <a href="{{ route('register') }}" class="text-dark text-decoration-none fw-semibold">Sign Up</a></p>
                    </div>
                </form>

            </main>     
        </div>
    </div>
</x-layout>
