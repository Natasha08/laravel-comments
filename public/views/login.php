<!-- <?php @if (Route::has('login')) ?> -->
    <div class="top-right links">
        <!-- <?php @if (Auth::check()) ?> -->
            <a href="{{ url('/home') }}">Home</a>
        <!-- <?php @else ?> -->
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        <!-- <?php @endif ?> -->
    </div>
