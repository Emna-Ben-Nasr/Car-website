<x-guest-layout title="signup" bodyClass="page-signup">
              <h1 class="auth-page-title">Signup</h1>

              <form action="" method="post">
                <div class="form-group">
                  <input type="email" placeholder="Your Email" />
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Your Password" />
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Repeat Password" />
                </div>
                <hr />
                <div class="form-group">
                  <input type="text" placeholder="First Name" />
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Last Name" />
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Phone" />
                </div>
            </form>
            <x-slot:footerlink>
                <div class="login-text-dont-have-account">
                  Already have an account? -
                  <a href="/login.html"> Click here to login </a>
                </div>
            </x-slot:footerlink>


</x-guest-layout>
