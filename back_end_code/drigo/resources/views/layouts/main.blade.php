<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link of index file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/index.css')}}">
    <!-- css link of index file end -->

    <!-- css link of header file start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://css.gg/user.css' rel='stylesheet'>
    <link href='https://css.gg/menu-left-alt.css' rel='stylesheet'>
    <link href='https://css.gg/close.css' rel='stylesheet'>
    <link href='https://css.gg/pen.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{url('font_end_code/css/header.css')}}">
    <!-- css link of header file end -->


    <!-- css link of home file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/home.css')}}">
    <!-- css link of home file end -->

    <!-- css link of allproduct file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/allproduct.css')}}">
    <!-- css link of allproduct file end -->

    <!-- css link of footer file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/footer.css')}}">
    <!-- css link of footer file end -->


    <!-- css link of login file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/login.css')}}">
    <!-- css link of login file end -->

    <!-- css link of productDetails file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/productDetails.css')}}">
    <!-- css link of productDetails file end -->

    <!-- css link of registration file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/registration.css')}}">
    <!-- css link of registration file end -->

    <!-- css link of search file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/search.css')}}">
    <!-- css link of search file end -->

    <!-- css link of sellerProfile file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/sellerProfile.css')}}">
    <!-- css link of sellerProfile file end -->


    <!-- css link of productUpload file start -->
    <link rel="stylesheet" href="{{url('font_end_code/css/productUpload.css')}}">
    <!-- css link of productUpload file end -->

    <title>Drigo</title>
    <link rel="icon" href="{{url('font_end_code/image/header.png')}}">

</head>

<body>
    @include('layouts.header')
    @yield('main-section')

    @include('layouts.footer')

    <script src="{{url('font_end_code/js/header.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
            // x.innerHTML = "supporting";
        } else {

        }


        function showPosition(position) {

            document.cookie = `userLatitude=${position.coords.latitude}`
            document.cookie = `userLongitude=${position.coords.longitude}`

            if (!localStorage.getItem('firstLoad')) {
                localStorage['firstLoad'] = true;
                window.location.reload();
            }



            // console.log("Longitude = " + position.coords.longitude);
            // console.log("latitude =" + position.coords.longitude);
            // console.log("latitude =" + position.coords.longitude);


        }

        function showError(error) {
            //console.log(error);
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for GeoLocation");
                    break;
                case error.TIMEOUT:
                    alert("Request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
                default:
                    alert("An unknown error occurred");
            }
        }
    </script>
</body>

</html>