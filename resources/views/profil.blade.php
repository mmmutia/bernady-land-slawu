@extends('layout.master')

@section('title', '- Profil')
@section('isi')

 <main id="main">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><blockquote>Profile</blockquote></h2>
      <style>
        blockquote {
          font-family: 'Times New Roman', Times, serif;
          font-size: larger;
        }
    </style>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Profile</li>
      </ol>
    </div>

  </div>
</section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <h1 class="text-center"><span>Profile</span></h1>
            <div class="row-md-6 form-group mb-3">
              <input type="text" name="name" class="form-control" id="name" value={{auth()->user()->name}} required disabled>
            </div>
            <div class="row-md-6 form-group mt-3 mt-md-0 mb-3">
              <input type="email" class="form-control" name="email" id="email" value={{auth()->user()->email}} required disabled>
            </div>
            <div class="row-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="password" id="password" value={{auth()->user()->password}} required disabled>
            </div>
          </div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
