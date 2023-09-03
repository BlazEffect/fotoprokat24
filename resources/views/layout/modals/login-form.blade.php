<div class="auth-popup">
    <span class="auth-popup__close-button"></span>
    <p class="auth-popup__header">Войдите в свой аккаунт</p>

    <form class="auth-form" method="post">
        <input type="hidden" name="action" value="login">
        @csrf

        <div class="auth-form__login-block form-control">
            <input id="auth-login" type="text" name="login" class="auth-form__login form-input" placeholder=" ">
            <label for="auth-login" class="auth-form__login-label form-label grey-text">Логин</label>
        </div>

        <div class="auth-form__password-block form-control">
            <input id="auth-password" type="password" name="password" class="auth-form__password form-input" placeholder=" ">
            <label for="auth-password" class="auth-form__password-label form-label grey-text">Пароль</label>
        </div>

        <a class="auth-form__change-password-link green-text" href="#">Вспомнить логин или пароль?</a>

        <div class="auth-form__remember-block">
            <input id="auth-remember" type="checkbox" name="remember" class="auth-form__remember">
            <label for="auth-remember" class="auth-form__remember-label">Запомнить пароль для последующего входа</label>
        </div>

        <div class="auth-form__buttons">
            <button class="auth-form__submit button lime-background" type="submit">Войти</button>
            <a href="/register" class="auth-form__register-link button white-background">Регистрация</a>
        </div>
    </form>
</div>
