<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
            <div class="col-md-6" style="height: 100%;">
                    <img src="../assets/img/curved-images/bg2.svg" alt="" srcset="">
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-success text-gradient">{{ __('Authentification') }}</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Non d\'utilisteur') }}</label>
                                    <div class="@error('email')border border-success rounded-3 @enderror">
                                        <input wire:model="username" id="username" type="username" class="form-control"
                                            placeholder="username" aria-label="username" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Mot de pass') }}</label>
                                    <div class="@error('password')border border-success rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input wire:model="remember_me" class="form-check-input btn-success" type="checkbox"
                                        id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">{{ __('Se rappeler de moi') }}</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-success w-100 mt-4 mb-0">{{ __('Se connecter') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('Mot de pass oublié ? cliquez') }} <a
                                    href="{{ route('forgot-password') }}"
                                    class="text-success text-gradient font-weight-bold">{{ __('ici') }}</a></small>
                            <p class="mb-4 text-sm mx-auto">
                                {{ __(' pas encore inscrits ? ') }}
                                <a href="{{ route('sign-up') }}"
                                    class="text-success text-gradient font-weight-bold">{{ __(' S\'incrire') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</section>
