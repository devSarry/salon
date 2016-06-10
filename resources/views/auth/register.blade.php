<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head', ['title' => 'Hiusmaa Admin Register'])
</head>


<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">


        <form class="form-login" method="POST" action="{{url('admin/register')}}">
            {!! csrf_field() !!}
            <h2 class="form-login-heading">sign in now</h2>
            <div class="login-wrap">
                <input type="text" name="email" class="form-control" placeholder="Your E-mail" value="{{ old('email') }}" autofocus>
                <br>
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" autofocus>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <br>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                <br>

                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Register</button>

            </div>


        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{url('assets/js/jquery.backstretch.min.js')}}"></script>
<script>
    $.backstretch("{{url('assets/img/LoginPage.png')}}", {speed: 500});
</script>


</body>
</html>
