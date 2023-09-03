<section class="main__breadcrumbs">
    <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item grey-text">Главная</li>
            @foreach($pages as $page)
                <li class="breadcrumbs__item grey-text">{{ $page }}</li>
            @endforeach
        </ul>
    </div>
</section>
