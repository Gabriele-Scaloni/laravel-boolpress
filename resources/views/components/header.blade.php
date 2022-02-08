<header>

    @guest

        <form action="{{route('register')}}" method="POST">
            @method('POST')
            @csrf

            <label for="name">Name</label><br>
            <input type="text" name="name"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">Password Confirmation</label><br>
            <input type="password" name="password_confirmation"><br><br>

            <input type="submit" value="register">
        </form>
    
        <form action="{{route('login')}}" method="POST">
            @method('POST')
            @csrf

            <label for="email">Email</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="login">
        </form>
    @else   
        <h3>welcome {{Auth::user()->name}}</h3>

        <a class="btn btn-secondary" href="{{route('logout') }}">logout</a>
    @endguest

</header>


