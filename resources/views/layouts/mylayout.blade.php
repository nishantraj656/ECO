<!DOCTYPE html>
<html>
<head>
    <title> Ethiopian Consulate Office</title>
</head>
<body>
<!-- page layout template. Content will be displayed and format definition.
@yield - section will call and hold the content value 
    -->
<div class="header">This is header</div>
    @yield('content')
<div class="footer">This is fotter</div>
</body>
</html>