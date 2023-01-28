@extends('layouts.myapp')

@section('content')
<section class="most_popular py-5">
    <div class="container py-4">
        <div class="row">
            <header class="section-title">
                <h2 class="display-4">{{ $popular_details->name }}</h2>
            </header>
            <div class="col-md-12 mb-2">
                <div class="text-center">
                    <a href="{{ $popular_details->book }}" target="_blank" class="btn btn-primary">Click to Book</a>
                </div>
            </div>
            <div class="col-md-12  pb-2">
                <div class="text-center p-2 embed-responsive embed-responsive-16by9">

                    @if ($popular_details->vdo)
                        <video class="embed-responsive-item" width="100%" controls autoplay="true">
                            <source src="{{ asset('assets/video/' . @$popular_details->vdo) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            </div>

            <!-- <hr> -->

            <div class="col-md-12 ">
                <div class="about_place">
                    <h3 class="most_popular_title display-6 text-line">About some information</h3>
                    <div>
                        <h4 class="address_heading">Address &amp; contact information</h4>
                        <div class="content">
                            <i class='bx bx-map'></i>
                            <p>Senchal Road Opposite Ghoom-Degree College, Darjeeling, West Bengal 734102</p>
                        </div>
                        <div class="content">
                            <i class='bx bx-phone'></i>
                            <a href="tel:+0123456987">+0123 456 987</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-8 mt-2">
                <div class="comments-area mb-30">
                    <h3 class="sub-title">Reviews</h3>
                    <ol class="comment-list">
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-author">
                                    <div id="profileImage"></div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-metadata">
                                        <h4 class="name" id="profilename">Sunanda Ghosh</h4>

                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A laudantium
                                        distinctio ea reprehenderit est laborum!
                                    </p>
                                    <ul class="list">
                                        <li><i class='bx bx-heart'></i>Likes</li>
                                        <li><i class='bx bx-reply'></i>Reply</li>
                                        <li>15 days</li>
                                    </ul>
                                </div>
                            </div>
                            <ol class="children">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-author">
                                            <img src="{{asset('assets/img/user.png')}}" alt="image" />
                                        </div>
                                        <form>
                                            <div class="form-group form-inline">
                                                <input name="message" class="form-control" placeholder="Write a reply"
                                                    required="required">
                                                <button type="submit" class="btn-primary">
                                                    Send
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
                <div class="comment-reply">
                    <form id="commentForm" class="comment-form">
                        <h3 class="sub-title">Post review</h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xs-12">
                                <div class="input-group">
                                    <div class="input-icon"><i class='bx bx-user'></i></div>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        required="required" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xs-12">
                                <div class="input-group">
                                    <div class="input-icon"><i class='bx bx-phone'></i></div>
                                    <input type="text" class="form-control" name="phone" maxlength="10"
                                        placeholder="Phone" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xs-12">
                                <div class="input-group">
                                    <div class="input-icon"><i class='bx bx-file'></i></div>
                                    <input type="file" class="form-control pt-3" name="file" placeholder="file" />
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6 col-xs-12">
                                <div class="star-rating">
                                    <input type="radio" id="5-stars" name="rating" value="5" />
                                    <label for="5-stars" class="star">&#9733;</label>
                                    <input type="radio" id="4-stars" name="rating" value="4" />
                                    <label for="4-stars" class="star">&#9733;</label>
                                    <input type="radio" id="3-stars" name="rating" value="3" />
                                    <label for="3-stars" class="star">&#9733;</label>
                                    <input type="radio" id="2-stars" name="rating" value="2" />
                                    <label for="2-stars" class="star">&#9733;</label>
                                    <input type="radio" id="1-star" name="rating" value="1" checked />
                                    <label for="1-star" class="star">&#9733;</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group">
                                    <div class="input-icon textarea"><i class='bx bx-envelope'></i></div>
                                    <textarea name="message" class="form-control" placeholder="Write Comment" required="required" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary">
                            Post Review
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
