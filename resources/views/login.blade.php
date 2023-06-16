<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LOGIN KOMODO</title>
    <section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }

      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            ODEYO <br />
            <span style="color: hsl(218, 81%, 75%)">KOMODO        APPLICATION</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Odeyo adalah sebuah situs pengelola keuangan yang dibuat agar bisa digunakan oleh semua pelaku usaha yang ingin membuka tokonya secara online/digital.
            Situs web ini juga dilengkapi dengan beberapa fitur yang nantinya akan memudahkan pelaku usaha dalam mengelola keuangan dalam usahanya.
            Adapun fitur untuk menghitung keuntungan dan kerugian yang bertujuan untuk memudahkan para pelaku usaha.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">

</head>

<body>

  <div class="header">
     <form action="{{ route('admin.index')}}" method="get">
        <div class="form-outline mb-4">
          @csrf
          <h2>LOGIN</h2>
          <label for="email"><b>Username</b></label>
          <input type="email" class="form-control" placeholder="Enter Username" name="email" required>
          <br>
          <label for="password"><b>Password</b></label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
          <br>
          <button class="btn btn-success" type="submit" >Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

      </form>
</body>
</html>