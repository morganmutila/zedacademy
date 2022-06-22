<div>
    <!-- Modal -->
<div wire:ignore.self class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="zedacademyModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 430px;">
        <div class="modal-content rounded">
            <div class="modal-body border-0">
                <button type="button" class="btn-close float-end small" data-bs-dismiss="modal" aria-label="Close"></button>
                <main class="d-flex align-items-center p-4 pb-0 justify-content-center flex-column"> 
                    
                    <x-logo-alt/>
                    <h1 class="fs-3 fw-bold mt-md-4 mb-md-5">Sign up to {{ config('app.name') }}</h1>  

                    <form wire:submit.prevent="createNewUser" class="w-100" autocomplete="off">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input wire:model.defer="form.name" id="name" name="name" type="text" class="form-control bg-light rounded-lg @error('name') is-invalid @enderror>" autocomplete="name" placeholder="Name" value="{{ old('name') }}">
                                @error('name')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6 ps-md-0 mt-3 mt-md-0">
                                <input wire:model.defer="form.username" id="username" placeholder="Username" name="username" type="text" class="form-control bg-light rounded-lg  @error('username') is-invalid @enderror>" value="{{ old('username') }}">
                                @error('username')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <input wire:model.defer="form.email"  id="email" name="email" placeholder="Email" type="email" class="form-control bg-light rounded-lg @error('email') is-invalid @enderror>" autocomplete="email" value="{{ old('email') }}">
                            @error('email')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <span class="position-absolute fw-bold small text-accent togglePassword" style="right: 4%; top: 20%;cursor: pointer;">Show</span>
                            <input  wire:model.defer="form.password"  id="password" type="password" placeholder="Password" class="form-control bg-light rounded-lg @error('password') is-invalid @enderror" name="password">
                            @error('password')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary text-white w-100 px-5 fw-bold py-2">
                                Sign up
                            </button>
                        </div>  
                        <div class="text-center">
                          <p>Already a member? <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Sign In</a></p>
                          <hr>
                          <p class="small">By signing up you agree to {{ config('app.name') }}'s <br>Terms of Service and Privacy Policy.</p>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const togglePassword = document.querySelector('.togglePassword');

    const input = document.querySelector('[name = password]');

    let password = true;

    togglePassword.addEventListener("click", ()=> {
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
</div>
