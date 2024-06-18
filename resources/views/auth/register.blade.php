<x-guest-layout>
    <div class="form-auth flex flex-col border-opacity-50">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <div class="label">
                    <span class="label-text-alt">Nome</span>
                </div>
                <label>
                    <i class="grow bi bi-person"></i>
                    <input id="name" name="name" type="text" placeholder="Nome" class="grow input input-sm" required/>
                </label>
            </div>
            <div class="mt-4">
                <div class="label">
                    <span class="label-text-alt">Email</span>
                </div>
                <label>
                    <i class="grow bi bi-person"></i>
                    <input id="email" name="email" type="text" placeholder="Email" class="grow input input-sm" required/>
                </label>
            </div>
            <div class="mt-4">
                <div class="label">
                    <span class="label-text-alt">Senha</span>
                </div>
                <label>
                    <i class="grow bi bi-lock"></i>
                    <input id="password" name="password" type="password" placeholder="*********" class="grow input input-sm" required/>
                </label>
            </div>
            <div class="mt-4">
                <div class="label">
                    <span class="label-text-alt">Senha</span>
                </div>
                <label>
                    <i class="grow bi bi-lock"></i>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="*********" class="grow input input-sm" required/>
                </label>
            </div>
            <div class="mt-4">
                <x-primary-button class="login-button block w-full">
                    Registrar
                </x-primary-button>
            </div>
            <div class="forgot-password">
                Já está cadastrado?&nbsp;
                <a class="link-primary" href="{{ route('login') }}">
                    Entrar
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
