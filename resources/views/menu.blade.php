@extends('base')

@section('content')

@section('title', 'Menu')
<section>
    <h2>Menu</h2>
    @foreach ($categories as $categorie)
    <div>
        <h3>{{ $categorie }}</h3>
        <ul class="plats">
            @for ($i = 0; $i< 3; $i++)
            <li>
                <img src="Image/anh-nguyen-kcA-c3f_3FE-unsplash(1).jpg" alt="verdura e carne sulla ciotola">
               <h4>Lorem, ipsum dolor</h4>
               <span class="prix">9,99€</span>
            </li>
            @endfor
        </ul>
    </div>
    @endforeach
</section>

    <footer>
        <!-- TODO -->
    </footer>
</body>
</html>
@endsection