 <!doctype html>
 <html lang="en" class="dark-theme">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Login - Dashboard</title>

     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet" />
 </head>


 <body class="min-vh-100 d-flex flex-column py-4">
     <main class="container flex-grow-1 d-flex align-items-center">
         @yield('content')
     </main>

 </body>

 <!-- <footer class="footer text-center mt-auto">
     <div class="footer-text">
         Copyright © 2022. All right reserved.
     </div>
 </footer> -->