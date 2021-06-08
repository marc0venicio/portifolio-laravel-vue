@extends('layout.app')
@section('content')
        <section>
            <div class="img-blog"></div>
            <div class="center-blog">
                <div class="title-blog">OverLord Intellectus</div>
                <div class="sub_title-blog">Tecnologia e inovação</div>
                <div class="btns">
                    <form class="search" action="" method="get">
                        <input type="text" name="search" id="search" placeholder="Pesquisar">
                        <div class="btns">
                            <button type="submit">Pesquisar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <section class="section-blog">
            <div class="card-blog">
                <img src="img/blog-tec.jpg" alt="">
                <span>Javascript | por M. Venicio. data 22/06/21</span>
                <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero tempora nihil perferendis voluptatibus, praesentium ex.
                </p>

            </div>
            <div class="card-blog">
                <img src="img/blog-tec.jpg" alt="">
                <span>Javascript | por M. Venicio. data 22/06/21</span>
                <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero tempora nihil perferendis voluptatibus, praesentium ex.
                </p>
            </div>
            <div class="card-blog">
                <img src="img/blog-tec.jpg" alt="">
                <span>Javascript | por M. Venicio. data 22/06/21</span>
                <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero tempora nihil perferendis voluptatibus, praesentium ex.
                </p>
            </div>
        </section>
        <section class="main-blog">
            @if (session()->has('message'))
                <p> {{session()->get('message')}} </p>
            @endif
            
                <section class="row-blog">
                    @if (Auth::check())
                <div class="auth-create">
                    <span> <a href="/create"> Criar novo post</a></span>
                </div>
            @endif
            @foreach ($posts as $post)
                <div class="title-blog-card">
                    
                    <h3>{{$post->title}}</h3>
                    <span><i class="far fa-calendar-alt"></i> {{date('jS M Y ', strtotime($post->updated_at))}} por {{$post->user->name}} </span>
                </div>
                <div class="col-blog">
                    <div class="img-card-blog">
                        <img src="img/blog-tec.jpg" alt="">
                    </div>
                    <div class="title-card-blog">

                        <p> {{Str::limit($post->description, 200, '...') }} </p>
                        <div>
                            <button class="btn-blog"> <a href="/blog/{{ $post->slug }}">Saiba mais</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="pagination">
                    <ul>
                        <li>
                            <a href="">
                                <</a>
                        </li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">></a></li>
                    </ul>
                </div>            
            </section>
            

            <aside class="aside-blog">
                <h3>Posts recentes</h3>
                <div class="aside-blog-img">
                    <img src="img/blog-tec.jpg" alt="">
                    <div class="aside-blog-title">Lorem ipsum.</div>
                </div>
                <span><i class="far fa-calendar-alt"></i>jan, 7 2021</span>
                <div class="aside-blog-img">
                    <img src="img/blog-tec.jpg" alt="">
                    <div class="aside-blog-title">Lorem ipsum.</div>
                </div>
                <span><i class="far fa-calendar-alt"></i>jan, 7 2021</span>
                <div class="aside-blog-img">
                    <img src="img/blog-tec.jpg" alt="">
                    <div class="aside-blog-title">Lorem ipsum.</div>
                </div>
                <span><i class="far fa-calendar-alt"></i>jan, 7 2021</span>
                <div class="aside-blog-img">
                    <img src="img/blog-tec.jpg" alt="">
                    <div class="aside-blog-title">Lorem ipsum.</div>
                </div>
                <span><i class="far fa-calendar-alt"></i>jan, 7 2021</span>

                <h3>Comentários recentes</h3>
                <div class="blog-comentario">
                    <p><i class="far fa-comment"></i><a href=""> Lorem ipsum dolor</a> sit amet consectetur.</p>
                    <p><i class="far fa-comment"></i><a href=""> Lorem ipsum dolor</a> sit amet consectetur.</p>
                    <p><i class="far fa-comment"></i><a href=""> Lorem ipsum dolor</a> sit amet consectetur.</p>
                    <p><i class="far fa-comment"></i><a href=""> Lorem ipsum dolor</a> sit amet consectetur.</p>
                    <p><i class="far fa-comment"></i><a href=""> Lorem ipsum dolor</a> sit amet consectetur.</p>
                    <p><i class="far fa-comment"></i><a href=""> Lorem ipsum dolor</a> sit amet consectetur.</p>
                </div>
            </aside>
        </section>
        @endsection