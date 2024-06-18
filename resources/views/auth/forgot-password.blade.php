<x-guest-layout>
    <div class="form-auth flex flex-col border-opacity-50">
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            <p class="forgot-message">
                Esqueceu sua senha? Sem problema, basta fornecer o seu email e enviaremos um link para você recuperar a sua senha.
            </p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="#">
            @csrf
            <div class="mt-4">
                <div class="label">
                    <span class="label-text-alt">Usuário</span>
                </div>
                <label>
                    <i class="grow bi bi-person"></i>
                    <input id="email" name="email" type="text" placeholder="Usuário" class="grow input input-sm" required/>
                </label>
            </div>
            <div class="mt-4">
                <x-primary-button class="login-button block w-full">
                    Recuperar senha
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
