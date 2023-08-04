<a href="https://wa.me/6285960401552" class="float" target="_blank">
<i class="fa-brands fa-whatsapp my-float"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-login" style="min-height: auto;background: white;padding: 0;">
                <div class="form-login">
                    <div class="user">
                      <div class="formBx">
                        <form method="POST" action="{{ route('register.popup') }}">
                            @csrf
                                <input type="hidden" name="location" id="" value="tour">
                              <h2>Create an account</h2>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                                <button type="submit" class="btn btn-primary btn-login d-block rounded-0 mt-3">
                                    {{ __('Register') }}
                                </button>

                                <p class="signup">
                                Already have an account ?
                                @if (Route::has('login'))
                                    <a style="font-style: normal;" href="{{ route('login') }}">{{ __('Sign in.') }}</a>
                                @endif
                              </p>
                            </form>
                      </div>
                      <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg" alt="" /></div>
                    </div>
                  </div>
            </div>
        </div>
        <div>

        </div>
      </div>
    </div>
  </div>


<footer class="b-main-color">
    <div class="container py-5">
        <div class="row justify-content-between pb-5">
            <div class="col-md-3">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                <div class="my-4 me-3 icon">
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="my-4 me-3 icon">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
                <div class="my-4 me-3 icon">
                    <a href="#">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-2 text-white">
                <div class="pb-3">
                    <span class="f-12">Whatsapp</span>
                    <a href="https://wa.me/6285960401552" target="_blank"
                        class="d-block text-white f-roboto f-16">+62-859-6040-1552</a>
                </div>
                <div class="pb-3">
                    <span class="f-12">E-Mail</span>
                    <a href="mailto:info@unikat.group" target="_blank"
                        class="d-block text-white f-roboto f-16">info@unikat.group</a>
                </div>
                <div class="pb-3">
                    <span class="f-12">Address</span>
                    <a href="https://goo.gl/maps/cNQWq9ndDreyZNbC9" target="_blank"
                        class="d-block text-white f-roboto f-16">Jl. Raya
                        Uluwatu, No.11 Ungasan,
                        Bali - 80361</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-white">
                    <h2 class="f-20 fw-bold">SUBSCRIBE TO OUR NEWSLETTER</h2>
                    <p>If you're looking to stay up-to-date with the latest news, offers, and promotions from UNIKAT, we
                        invite you to join our newsletter.</p>
                    <form action="">
                        <input type="email"
                            class="form-control form-control bg-transparent border-0 border-btm rounded-0 fst-italic"
                            placeholder="Your email*">
                        <a href="#"
                            class="btn btn-light px-4 py-2 rounded-0 mt-3 fw-bold l-space-1 f-poppins border border-dark btn-hover-trans">SUBMIT</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="pt-5 border-top">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 150px;">
                </div>
                <div class="col text-end">
                    <p class="mb-0 text-white f-12">Copyright Unikat 2023</p>
                </div>
            </div>
        </div>
    </div>
</footer>
