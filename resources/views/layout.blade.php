<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <p> this text is from master </p>

		@section('sidebar')
			<p>Master Sidebar</p>
		@show

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
