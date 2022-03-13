<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="{{ route('home.index') }}" class="logo">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li><a href="{{ route('home.index') }}" class="active">Home</a></li>
            <li><a href="{{ route('user.category.index') }}">Category</a></li>
            <li><a href="{{ route('user.contact.index') }}">Contact Us</a></li>
            @auth
            @php
              $dashboard = "";
              if (auth()->user()->user_role === 'Admin') {
                  $dashboard = route('admin.dashboard.index');
              }elseif (auth()->user()->user_role === 'Employee') {
                $dashboard = route('employee.dashboard.index');
              }else{
                $dashboard = route('employeer.dashboard.index');
              }
          @endphp
            <li style="background: #32b0bd;border-radius: 9px; padding-right: 40px; padding-left: 40px;"><a href="{{ $dashboard }}">Dashboard</a></li>
            @endauth
            @guest
            <li style="background: #32b0bd; border-radius: 9px;"><a href="{{ route('register') }}">Register Here!</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            @endguest
          </ul>
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
  <!-- ***** Header Area End ***** -->
