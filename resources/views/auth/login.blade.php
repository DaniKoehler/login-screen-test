<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-auth flex flex-col border-opacity-50">
        <div class="welcome-message">
            <h1 class="welcome-title">Boas-vindas!</h1>
            <p class="login-info">Entre utilizando umas das opções abaixo</p>
        </div>
        <div class="social-buttons flex justify-between">
            <a href="#" class="social-button google btn btn-sm btn-outline">
                <i class="bi bi-google"></i>
            </a>
            <a href="#" class="social-button facebook btn btn-sm btn-outline">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="social-button apple btn btn-sm btn-outline">
                <i class="bi bi-apple"></i>
            </a>
            <a href="#" class="social-button twitter btn btn-sm btn-outline">
                <i class="bi bi-twitter"></i>
            </a>
        </div>

        <div class="divider">ou</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <div class="label">
                    <span class="label-text-alt">Email</span>
                </div>
                <label>
                    <i class="grow bi bi-person"></i>
                    <input type="email" id="email" name="email" placeholder="Email" class="grow input input-sm" />
                </label>
            </div>
            <div class="mt-4">
                <div class="label">
                    <span class="label-text-alt">Senha</span>
                </div>
                <label>
                    <i class="grow bi bi-lock"></i>
                    <input type="password" id="password" name="password" placeholder="*********" class="grow input input-sm" />
                </label>
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="keep-signed rounded" name="remember">
                    <span class="keep-signed-text ms-2 text-sm">{{ __('Manter conectado') }}</span>
                </label>
            </div>
            <div class="mt-4 captcha-container">
                <div class="label">
                    <span class="label-text-alt">Sou humano</span>
                </div>
                <div class="captcha-elements">
                    <img src="{{ route('captcha') }}" alt="captcha" class="captcha-img" data-refresh-config="default">
                    <a href="#" id="refresh-captcha" class="captcha-refresh"><i class="bi bi-arrow-clockwise"></i></a>
                    <label>
                        <input type="text" name="captcha" placeholder="Digite o captcha" class="grow input input-sm" />
                    </label>
                </div>
            </div>
            <div class="mt-4">
                <x-primary-button class="login-button block w-full">
                    <i class="bi bi-box-arrow-in-right"></i>&nbsp;{{ __('Entrar') }}
                </x-primary-button>
            </div>
            <div class="forgot-password">
                @if (Route::has('password.request'))
                    Esqueceu sua senha?&nbsp;
                    <a class="link-primary" href="{{ route('password.request') }}">
                        {{ __('Recuperar senha') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
