<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('{{ asset('assets/img/background/page-header-bg.jpg') }}')">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>{!! isset($title) ? $title   : '' !!}</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>{!! isset($subTitle) ? $subTitle   : '' !!}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->