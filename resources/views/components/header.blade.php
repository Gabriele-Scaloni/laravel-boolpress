<h2>
    
    <h3> 
        @auth 
        
        {{Auth::user() -> name}} <br>
        <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
        
        @endauth


    </h3>


</h2>