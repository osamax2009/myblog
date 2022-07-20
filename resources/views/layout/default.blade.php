<html lang="en" class="h-100">
<html lang="en">
<head>
   @include('includes.head')
</head>
<body class="d-flex h-100 text-center text-bg-dark" >
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      
      <header class="mb-auto">
          @include('includes.header')
      </header>
         <main class="px-3">
          @yield('content')
        </main>
       <footer class="mt-auto text-white-50">
          @include('includes.footer')
       </footer>
      
  </div>
</body>
</html>