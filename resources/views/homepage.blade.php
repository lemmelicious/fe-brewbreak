@extends('homepage.layouts.app')
 
@section('title', 'Brew Break Coffee | Homepage')
 
@section('content')

            

            @include('homepage.includes.nav')



            <section class="hero-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="text-center mb-5 pb-2">
                                <h1 class="text-white" id="home">Welcome to Brew Break Coffee</h1>

                                <p class="p-p text-white">To inspire and nurture the human spirit.</p>

                                <a href="#products" class="btn custom-btn smoothscroll mt-3">Shop Now</a>
                            </div>

            
            @include('homepage.includes.carousel')



                        </div>

                    </div>
                </div>
            </section>


            {{-- About --}}
            @include('homepage.includes.about')


            {{-- More --}}
            @include('homepage.includes.more')


            {{-- Products --}}
            @include('homepage.includes.products')



            {{-- Gallery --}}
            @include('homepage.includes.gallery')



            {{-- Contact & Google-map --}}
            @include('homepage.includes.contact')

@endsection


        
