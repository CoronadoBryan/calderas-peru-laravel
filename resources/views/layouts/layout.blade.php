<!doctype html>
<html class="no-js" lang="en">

<!-- Start head -->
<x-head css='{!! isset($css) ? $css : "" !!}'/>
<!-- End head -->

<body class="body-dark-bg">

    <!-- Start preloader -->
    <x-preloader/>
    <!-- End preloader -->

    <div class="fix">

        <!--Start Main Header Two -->
        <?php 

            if (!isset($header)) {
                ?>
                <x-header/>
                <?php
            }
        ?>
        <!--End Main Header Two -->

        <!--Start Page Header-->
        <?php 

            if (isset($title)) {
                ?>
                <x-pageHeader title='{{ isset($title) ? $title : "" }}' subTitle='{{ isset($subTitle) ? $subTitle : "" }}'/>
                <?php
            }

            
        ?>

        <!--End Page Header-->

        @yield('content')

        <!--Start footer-->
            <?php 

            if (!isset($footer)) {
                ?>
                <x-footer/>
                <?php
            }
        ?>
        <!--End footer-->

    </div>

    <!--Start search-popup-->
    <x-searchPopUp/>
    <!--End search-popup-->

    <!-- script start-->
    <x-script script='{!! isset($script) ? $script : "" !!}' />
    <!-- script end-->

</body>

</html>