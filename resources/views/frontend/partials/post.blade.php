<div class="latest-post-area">
    <div class="section-title">
        <h4 class="mt60"> <span>latest post</span></h4>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-5">
            <div class="post-area mt20">
                <div class="banner-img">
                    <img class="full-width" src="assets/images/bg-banner/bnr3.png" alt="banner-img">
                    <p>24.07.17</p>
                </div>
                <div class="blog-post">
                    <h4 class="mt30 mb-0"><a href="#">boro player diagnosed with leukemia diam reformidans per diam accusam eu.</a></h4>
                    <p class="mt20">Diam reformidans duo an, per diam accusam eu. His alterum deseruisse cu, at pri facilis mandamus, usu ei minimum vituperatoribus. Euismod voluptatum cu usu, ad sale delenit pri, vim nonumy postea suavitate no. Repudiare </p>
                    <div class="coments">
                        <a href="#"><i class="fa fa-user-circle"></i>admin</a>
                        <a href="#"><i class="fa fa-comments-o"> </i>comments</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-md-12 col-lg-7">
            <div class="comment-area mt20 xs-mt-50">
                @foreach($posts as $post)
                <div class="comment-box">
                    <img class="img-fluid" src="{{$post->photo_id ? $post->photo->file : '/images/holder/post.png'}}" alt="sport img">
                    <div class="user-cmnt">
                        <h4><a href="{{route('post.show',$post->slug)}}">{{$post->title}}</a></h4>
                        <div class="coments">
                            <a href="#"><i class="fa fa-calendar"></i>{{$post->created_at->diffForHumans()}}</a>
                            <a href="#"><i class="fa fa-user-circle"></i>{{$post->user->role->name}}</a>
                            <a href="http://foo.com/bar.html#disqus_thread"><i class="fa fa-comments-o"> </i>comments</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
