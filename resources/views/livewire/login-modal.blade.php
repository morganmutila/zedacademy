<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal animate__animated animate__fast animate__zoomIn" id="modalLogin" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="width: 430px;">
            <div class="modal-content rounded">
                <div class="modal-body d-flex flex-column">
                    <button type="button" class="btn-close align-self-end small" data-bs-dismiss="modal" aria-label="Close"></button>
                    <main class="d-flex align-items-center px-4 justify-content-center flex-column"> 
                                    
                        <x-logo-alt/>
                        <h1 class="fs-5 fw-bold mt-md-4 mb-md-5">To continue, log in to {{ config('app.name') }}</h1>  

                        <form wire:submit.prevent="login" class="w-100" autocomplete="off">
                            @csrf
                            
                            <div class="mb-3">
                                <input wire:model="username"  id="username" name="username" placeholder="Email or Username" type="username" class="form-control bg-light @error('username') is-invalid @enderror>" autocomplete="username" value="{{ old('username') }}">
                                @error('username')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-2">
                                <input  wire:model="password" id="password" type="password" placeholder="Password" class="form-control bg-light @error('password') is-invalid @enderror" name="password">
                                @error('password')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="mb-3">
                                <a href="{{ route('password.request') }}" class="fw-semibold text-dark text-decoration-none small">Forget password</a>
                            </div>
                            
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary text-white w-100 px-5 fw-bold py-2">
                                    Log in
                                </button>
                            </div>  
                            
                            
                        </form>
                    </main>  
                </div>
                <div class="border-top py-4 d-flex justify-content-center align-items-center">
                    <div>Don’t have an account? <a href="#modalSignUp" class=" text-decoration-none fw-semibold" data-bs-toggle="modal">Sign Up</a></div>
                </div>
            </div>
        </div>
    </div>
</div>                