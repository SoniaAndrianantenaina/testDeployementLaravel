@extends('layouts.master')

@section('contenu')
    <!-- Wrapper -->
    <section id="wrapper">
        <header>
            <div class="inner">
                <h2>{{ $contenu->titre }}</h2>
                
            </div>
        </header>

        <!-- Content -->
        <div class="wrapper">
            <div class="inner">

                <h6 class="major">{{ $contenu->description }}</h6>
                <p> {{ $contenu->texte }} </p>
                
                <section class="features">
                    <article>
                        <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                        <h3 class="major">Sed feugiat lorem</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.
                        </p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                        <h3 class="major">Nisl placerat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.
                        </p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                </section>
                @if (session('idAdmin'))
                <p>hello</p>
                @endif
               
            </div>
        </div>

    </section>
@endsection
