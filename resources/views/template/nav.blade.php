   <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <ul class="nav">
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">Ujikom-2022</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>{{--  
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('admin.produk')}}">Produk</a>
        </li>--}}
        <li class="nav-item">
           <a class="nav-link" href="{{route('pelanggan.keranjang') }}">Keranjang</a>
        </li>
        {{--
        <li class="nav-item">
           <a class="nav-link text-white" href="{{route('pelanggan.summary')}}" tabindex="-1" aria-disabled="true">Summary</a>
         </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Checkout</a>
         </li>--}}
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
       </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
     </ul>
</nav>