<div>
    <!-- He who is contented is rich. - Laozi -->
    <h3>Hello, This is form blade component</h3>
    <h6>Hi, My Self - {{ $name }}</h6>
    <h5>
        Fruits are:- </h5>
        <ul>
            @foreach ( $fruits as $fruit )
                <li>{{ $fruit}}</li>
            @endforeach
        </ul>
    
</div>