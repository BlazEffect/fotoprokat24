@extends('app')

@section('styles')
    @vite('resources/scss/pages/register.scss')
@endsection

@section('header')
    @include('layout/header')
@endsection

@section('main')
    <div class="page__container">
        @include('layout/blocks/breadcrumbs', ['pages' => ['Регистрация']])

        @include('layout/blocks/page-title', ['title' => 'Регистрация'])

        <section class="register-block">
            <form action="" class="register-form">
                <input type="hidden" name="step" value="one">
                @csrf

                <div class="register-form__step form-step--one">
                    <div class="form-control">
                        <input id="register-surname" type="text" name="surname" class="register-form__surname-input form-input" placeholder=" " required>
                        <label for="register-surname" class="register-form__surname-label form-label grey-text">Фамилия</label>
                    </div>

                    <div class="form-control">
                        <input id="register-name" type="text" name="name" class="register-form__name-input form-input" placeholder=" " required>
                        <label for="register-name" class="register-form__name-label form-label grey-text">Имя</label>
                    </div>

                    <div class="form-control">
                        <input id="register-middle-name" type="text" name="middle-name" class="register-form__middle-name-input form-input" placeholder=" " required>
                        <label for="register-middle-name" class="register-form__middle-name-label form-label grey-text">Отчество</label>
                    </div>

                    <div class="form-control">
                        <input id="register-birthday" type="date" name="birthday" class="register-form__birthday-input form-input" placeholder=" ">
                        <label for="register-birthday" class="register-form__birthday-label form-label grey-text">Дата рождения</label>
                    </div>

                    <div class="form-control">
                        <input id="register-email" type="email" name="email" class="register-form__email-input form-input" placeholder=" " required>
                        <label for="register-email" class="register-form__email-label form-label grey-text">E-mail</label>
                    </div>

                    <div class="form-control">
                        <input id="register-mobile-phone" type="tel" name="mobile-phone" class="register-form__mobile-phone-input form-input" placeholder=" " required>
                        <label for="register-mobile-phone" class="register-form__mobile-phone-label form-label grey-text">Мобильный</label>
                    </div>
                </div>

                <div class="register-form__step form-step--two">

                </div>

                <div class="register-form__step form-step--three">

                </div>

                <div class="register-form__buttons">
                    <a href="#" class="register-form__continue button lime-background">Продолжить регистрацию</a>
                    <button class="register-form__submit button white-background" type="submit">Завершить регистрацию</button>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('footer')
    @include('layout/footer')
@endsection
