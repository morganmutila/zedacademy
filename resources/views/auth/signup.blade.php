<x-layout title="Sign up | {{ config('app.name') }}">
    <div class="d-flex justify-content-center align-items-center my-4 shadow-tiny bg-white ">
        <a href="{{ route('home') }}" class="mb-4"><x-logo/></a>
    </div>
    <div class="container" style="margin-bottom: 80px;">
        <div class="d-flex align-items-center px-md-5 justify-content-center">

            <main class="col-md-6 col-12 d-flex align-items-center bg-white justify-content-center flex-column px-md-4"> 
                <a href="{{ url()->previous() }}" class="d-md-none fw-bold text-dark text-decoration-none align-self-start btn btn-link mb-4 ms-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>&nbsp;Go back</a> 
                <h1 class="fs-3 fw-bold mt-md-4 mb-md-5 mb-4">Sign up to start learning.</h1>  

                <form method="POST" action="{{ route('register') }}" class="px-3 w-100">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="name" name="name" type="text" class="form-control bg-light rounded-lg @error('name') is-invalid @enderror>" autocomplete="name" placeholder="Name" value="{{ old('name') }}">
                            @error('name')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 ps-md-0 mt-3 mt-md-0">
                            <input id="username" placeholder="Username" name="username" type="text" class="form-control bg-light rounded  @error('username') is-invalid @enderror>" value="{{ old('username') }}">
                            @error('username')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                        </div>
                    </div>
                        
                    <div class="mb-3">
                        <input id="email" name="email" placeholder="Email" type="email" class="form-control bg-light rounded @error('email') is-invalid @enderror>" autocomplete="email" value="{{ old('email') }}">
                        @error('email')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3 position-relative">
                        <span class="position-absolute fw-bold small text-accent togglePassword" style="right: 4%; top: 20%;cursor: pointer;">Show</span>
                        <input id="password" type="password" placeholder="Create Password" class="form-control bg-light rounded @error('password') is-invalid @enderror" name="password">
                        @error('password')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary text-white w-100 px-5 fw-bold py-2">
                            Sign up
                        </button>
                    </div>  
                    <div class="d-none d-md-block text-center">
                        <a href="{{ url()->previous() }}" class="fw-bold text-dark text-decoration-none align-self-start btn btn-link mb-4 ms-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>&nbsp;Go back</a> 
                    </div>
                    <div class="text-center">
                        <p class="small text-muted">By continuing, you agree to {{ config('app.name') }}'s <br><a href="#" class="text-dark text-decoration-none">Terms of Service</a> and <a href="#" class="text-dark text-decoration-none">Privacy Policy.</a></p>
                    </div>
                </form>
            </main>   
            <div class=" fixed-bottom border-top d-flex justify-content-center align-items-center py-4 bg-white">Already have an account?&nbsp;<a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Log in</a></div>
        </div>
    </div>

    <script type="text/javascript">
        const togglePassword = document.querySelector('.togglePassword');

        const input = document.querySelector('[name = password]');

        let password = true;

        togglePassword.addEventListener("click", function () {
            if(password){
                input.setAttribute("type", "text");
                togglePassword.innerHTML = "Hide";
            } else{
                input.setAttribute("type", "password");
                togglePassword.innerHTML = "Show";
            }

            password = !password;
        })
    </script>
</x-layout>
