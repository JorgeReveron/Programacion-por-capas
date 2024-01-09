<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APPCAR@yield("title")</title>
  <style>
    nav {background-color: lightcoral;}
    footer {background-color: lightcoral;}
  </style>
</head>
<body>
  <nav>Menu</nav>
  <header>
    <h1>Titulo de la aplicacion</h1>
    <h2>@yield("subtitle")</h2>
  </header>
  <hr>
  <main>
    @section("container")
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis dicta aperiam earum voluptatibus ab enim ipsa vel, quas nulla provident odit nesciunt ex eos, temporibus tempore ipsam, tenetur deleniti reiciendis.</p>
    @show
  </main>
  <footer>
    IES Las Galletas &copy;2024
  </footer>
</body>
</html>