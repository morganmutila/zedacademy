<x-layout title="Sign In | {{ config('app.name') }}">


<div class="container-fluid h-100 position-absolute top-0 bottom-0 p-0">
    <div class="row m-0 align-items-stretch h-100">
        @error('email') 
            <div class="alert rounded-0 m-0 py-2 border-0 text-white text-center" style="background-color: #ff5555;">{{ $message }}</div>
        @enderror  

        <section class="col-lg-4 d-none d-lg-block" style="background: #f1cdd7;color: #865c6c;">
            <header class="p-5"> 
               <a href="{{ route('home') }}"><x-logo/></a>
               <h3 class="mt-3 fw-bold">Discover the world’s top Designers & Creatives.</h3>
            </header>
        </section>

        <section class="col-lg-8 col-12 d-flex flex-column h-100">
            <header class="d-flex justify-content-between py-4"> 
                <a href="{{ route('login') }}" class="text-accent text-decoration-none fw-bold px-md-3">Back to login</a>
               <p class="align-self-end text-end pe-4 ml-auto">Not a member? <a href="{{ route('register') }}" class="text-decoration-none text-accent">Sign up now</a></p>
            </header>
            <main class="d-flex align-items-start justify-content-center flex-column py-lg-5"> 
                <section class="col-lg-6 offset-lg-3 col-12">
                    <h1 class="fs-3 fw-bolder text-dark mb-lg-5">Forgot Password?</h1>  
                </section>    
                <section class="col-lg-6 col-12 offset-lg-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-4 text-dark">Enter the email address you used when you joined and we’ll send you instructions to reset your password.</div>

                    <div class="mb-4 text-dark">For security reasons, we do NOT store your password. So rest assured that we will never send your password via email.</div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="fw-bold text-dark">Email Address</label>
                            <input id="email" name="email" type="email" class="form-control border-0  bg-light rounded-lg " autocomplete="email" value="{{ old('email') }}" @error('email') style="background: #ffeeee !important;" @enderror>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary text-white px-5 py-2">
                                Send Reset Instructions
                            </button>
                        </div>
                    </form>
                </section>    
            </main>     
        </section>
    </div>
</div>

</x-layout>
