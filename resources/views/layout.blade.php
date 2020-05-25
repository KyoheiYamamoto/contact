<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
      <header class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container mr-4">
          <a class="navbar-brand mr-4" href="{{route('top')}}">お問い合わせフォーム</a>
        </div>
      </header>

      <main>
          @yield('content')
      <main>


      <footer class="footer bg-dark">
        <div class="container">
            <p class="text-white text-right">@Kyohei-Yamamoto All right reserved</p>
        </div>
      </footer>
  </body>
</html>
