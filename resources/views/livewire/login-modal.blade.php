<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalLogin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="width: 430px;">
            <div class="modal-content rounded">
                <div class="modal-body border-0">
                    <button type="button" class="btn-close float-end small" data-bs-dismiss="modal" aria-label="Close"></button>
                    <main class="d-flex align-items-center p-4 pb-0 justify-content-center flex-column"> 
                                    
                        <x-logo-alt/>
                        <h1 class="fs-5 fw-bold mt-md-4 mb-md-5">To continue, log in to {{ config('app.name') }}</h1>  

                        <form wire:submit.prevent="login" class="w-100" autocomplete="off">
                            @csrf
                            
                            <div class="mb-3">
                                <input wire:model="username"  id="username" name="username" placeholder="Username or Email" type="username" class="form-control bg-light rounded-lg @error('username') is-invalid @enderror>" autocomplete="username" value="{{ old('username') }}">
                                @error('username')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <input  wire:model="password" id="password" type="password" placeholder="Password" class="form-control bg-light rounded-lg @error('password') is-invalid @enderror" name="password">
                                @error('password')<div class="invalid-feedback small">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary text-white w-100 px-5 fw-bold py-2">
                                    Sign in
                                </button>
                            </div>  
                            <div class="mb-4">
                                <a href="{{ route('password.request') }}" class="fw-semibold text-dark text-decoration-none">Forget password</a>
                            </div>
                            <hr>

                            <div class="text-center">
                              <p>Not a member yet? <a href="{{ route('register') }}" class="text-dark text-decoration-none fw-semibold">Sign Up</a></p>
                            </div>
                        </form>
                    </main>  
                </div>
            </div>
        </div>
    </div>
</div>                