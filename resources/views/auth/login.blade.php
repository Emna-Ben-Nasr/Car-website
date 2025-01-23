<x-guest-layout title="login" bodyClass="page-login">

    <h1 class="auth-page-title">Login</h1>

    <form action="" method="post">
      <div class="form-group">
        <input type="email" placeholder="Your Email" />
      </div>
      <div class="form-group">
        <input type="password" placeholder="Your Password" />
      </div>
      <div class="text-right mb-medium">
        <a href="/password-reset.html" class="auth-page-password-reset"
          >Reset Password</a
        >
      </div>
    </form>
    <x-slot:footerlink>
      <div class="login-text-dont-have-account">
        Don't have an account? -
        <a href="/signup.html"> Click here to create one</a>
      </div>
    </x-slot:footerlink>

</x-guest-layout>
