<h2>
    
    <h3> Bentornato
        @auth 
        {{Auth::user() -> name}} <br>
        <a class="btn btn-primary" href="#">Logout</a>
        @else
            
        

        @endauth


    </h3>


</h2>