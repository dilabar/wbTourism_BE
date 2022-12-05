<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Admin/css/bootstrap-multiselect.css') }}">
    <link href="{{ asset('assets/Admin/css/form.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet"> -->



    <style>
        :root {
            --yellow-color: #ea9235;
            --dark-color: #000;
            --primary-color: #009688;
            --secondary-color: #090031;
            --white-light-color: #F6F6F6;
            --white-color: #ffffff;
            --black-color: #000000;
            --box-shadow: 0 3px 6px rgb(0 0 0 / 16%);
            --box-shadow-primary: 0 20px 20px -5px #00968845;
            --primary-font-family: 'Titillium Web';
            --secondary-font-family: 'Cormorant Garamond';
            --transition: 0.8s cubic-bezier(0.22, 0.78, 0.45, 1.02);
        }

        .top-header .page-title-area::before {
            background: linear-gradient(180deg, #078e89, transparent) !important;
        }

        .page-title-area {
            position: relative;
            overflow: hidden;
            z-index: 1
        }

        .page-title-area::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            opacity: .5;
            background: #09003136;
            z-index: -1
        }

        .page-title-area .bg-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            -o-object-fit: cover;
            object-fit: cover
        }

        .page-title-area .page-title-content {
            text-transform: capitalize;
            text-align: center
        }

        .page-title-area .page-title-content h1 {
            color: #fff;
            margin-bottom: 20px;
            margin-top: -10px;
            line-height: 1.2
        }

        .page-title-area .page-title-content ul {
            padding: 0;
            margin: 0
        }

        .page-title-area .page-title-content ul li {
            margin-right: 10px;
            padding-left: 15px;
            display: inline-block
        }

        .page-title-area .page-title-content ul li:first-child {
            padding-left: 0
        }

        .page-title-area .page-title-content ul li i {
            font-size: 14px;
            margin-left: -20px;
            margin-right: 10px;
            color: #fff;
            vertical-align: -1px
        }

        .page-title-area .page-title-content ul li a {
            color: #fff
        }

        .page-title-area .page-title-content ul li a:hover {
            color: var(--primary-color)
        }

        .template1-details-section .section-title {
            margin-left: 0;
            text-align-last: left
        }

        .template1-details-section .template-details-desc {
            padding-right: 40px
        }

        .template1-details-section .nav-item {
            margin-right: 20px;
        }

        .template1-details-section .nav-pills .nav-link.active {
            color: white;
            background-color: var(--primary-color);
            border-color: none;
        }

        .template1-details-section .nav-pills .nav-link {
            margin-bottom: 0;
            color: black;
            border-radius: 6px;
            border: 1px solid var(--primary-color);
        }

        .template1-details-section .nav-pills {
            border-bottom: none;
        }



        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc {
                padding-right: 0
            }
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            .template1-details-section .template-details-desc {
                padding-right: 20px
            }
        }

        .template1-details-section .template-details-desc .image {
            overflow: hidden;
            border-radius: 3px
        }

        .template1-details-section .template-details-desc .image img {
            -webkit-transition: .5s;
            transition: .5s;
            width: 100%
        }

        .template1-details-section .template-details-desc .image img:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }

        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc .image img {
                width: 100%
            }
        }

        .template1-details-section .template-details-desc .content h3 {
            margin-top: -4px;
            margin-bottom: 15px;
            font-size: 23px
        }

        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc .content h3 {
                font-size: 20px
            }
        }

        .template1-details-section .template-details-desc .content h3 a {
            color: #090031
        }

        .template1-details-section .template-details-desc .content h3 a:hover {
            color: var(--primary-color)
        }

        .template1-details-section .template-details-desc hr {
            margin-top: 0;
            margin-bottom: 30px
        }

        .template1-details-section .template-details-desc .info-content {
            position: relative;
            padding: 25px 30px;
            margin-bottom: 25px;
            background: #f9f8fe;
            border-radius: 5px
        }

        .template1-details-section .template-details-desc .info-content .content-list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 15px
        }

        .template1-details-section .template-details-desc .info-content .content-list h6 {
            font-weight: 400;
            color: #39325a;
            margin-bottom: 0
        }

        .template1-details-section .template-details-desc .info-content .content-list h6 span {
            font-weight: 600
        }

        .template1-details-section .template-details-desc .info-content .content-list i {
            padding: 10px;
            background: #fff;
            border-radius: 50%;
            font-size: 16px;
            margin-right: 8px;
            -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, .1);
            color: var(--primary-color);
            vertical-align: middle
        }

        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc .info-content {
                padding: 16px
            }
        }

        .template1-details-section .template-details-desc .comment-reply {
            padding-top: 20px
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form {
            padding: 30px;
            background: #f9f8fe;
            border-radius: 3px;
            border: 5px solid #fff;
            -webkit-box-shadow: 0 0 29px 0 rgba(102, 102, 102, .1);
            box-shadow: 0 0 29px 0 rgba(102, 102, 102, .1)
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form .input-group {
            margin-bottom: 20px;
            padding-left: 16px;
            background: #fff;
            border-radius: 5px
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form .input-group .input-icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-right: 8px;
            text-align: center;
            white-space: nowrap
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form .input-group .input-icon i {
            color: #4141a5;
            vertical-align: -2px;
            font-size: 20px
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form .input-group .input-icon.textarea {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding-top: 16px
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form .input-group .form-control {
            padding-left: 0
        }

        .template1-details-section .template-details-desc .comment-reply .comment-form .btn-primary {
            width: 100%;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc .comment-reply .comment-form {
                padding: 20px 16px
            }
        }

        .template1-details-section .template-details-desc .comments-area .comment-list {
            padding: 0;
            margin: 0;
            list-style-type: none
        }

        .template1-details-section .template-details-desc .comments-area .comment-list .comment {
            margin-bottom: 15px
        }

        .template1-details-section .template-details-desc .comments-area .comment-list .comment:last-child {
            margin-bottom: 0
        }

        .template1-details-section .template-details-desc .comments-area .comment-body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-bottom: 20px
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-author {
            margin-right: 16px
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-author img {
            max-width: 56px;
            border-radius: 50%
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-content .comment-metadata .name {
            font-size: 18px;
            margin: 0
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-content .list {
            padding: 0;
            margin-bottom: 0;
            list-style: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-content .list i {
            margin-right: 5px;
            vertical-align: middle
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-content .list li {
            display: inline-block;
            margin-right: 12px;
            font-size: 14px;
            color: #4141a5
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-content .list li:last-child {
            font-size: 12px;
            color: #797979
        }

        .template1-details-section .template-details-desc .comments-area .comment-body .comment-content p {
            margin-top: 5px;
            font-size: 15px
        }

        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc .comments-area .comment-body .comment-author img {
                max-width: 46px
            }

            .template1-details-section .template-details-desc .comments-area .comment-body .comment-content p {
                font-size: 14px
            }
        }

        .template1-details-section .template-details-desc .comments-area .children {
            padding: 0;
            margin: 0;
            list-style-type: none;
            padding-left: 75px
        }

        .template1-details-section .template-details-desc .comments-area .children .comment-body {
            margin-bottom: 0
        }

        .template1-details-section .template-details-desc .comments-area .children .form-group {
            margin-bottom: 0;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .template1-details-section .template-details-desc .comments-area .children .form-control {
            height: 46px;
            border: 1px solid #d1d1d1;
            border-right: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .template1-details-section .template-details-desc .comments-area .children .comment-author img {
            max-width: 46px
        }

        .template1-details-section .template-details-desc .comments-area .children .btn-primary {
            margin-left: auto;
            padding: 8px 14px;
            height: 46px;
            font-size: 12px;
            border-radius: 5px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            display: block
        }

        @media only screen and (max-width:767px) {
            .template1-details-section .template-details-desc .comments-area .children {
                padding-left: 0
            }
        }

        .template1-details-section .widget-area .widget-search .search-form {
            position: relative;
            background-color: #fff
        }

        .template1-details-section .widget-area .widget-search .search-form .form-control {
            background-color: #fff;
            border: 1px solid #d1d1d1
        }

        .template1-details-section .widget-area .widget-search .search-form button {
            border: none;
            color: #797979;
            position: absolute;
            right: 16px;
            top: 50%;
            font-size: 18px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition-duration: 300ms;
            transition-duration: 300ms
        }

        .template1-details-section .widget-area .widget-search .search-form button i {
            vertical-align: middle
        }

        .template1-details-section .widget-area .widget-video {
            position: relative
        }

        .template1-details-section .widget-area .widget-video img {
            border-radius: 5px
        }

        .template1-details-section .widget-area .widget-video .video-btn {
            width: 60px;
            height: 60px
        }

        .template1-details-section .widget-area .widget-video .video-btn i {
            font-size: 20px
        }

        img {

            max-width: 100%;
            height: auto;

        }

        .template1-details-section .widget-area .widget-article .article-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-bottom: 20px
        }

        .template1-details-section .widget-area .widget-article .article-item .image {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 140px;
            flex: 0 0 140px;
            overflow: hidden
        }

        .template1-details-section .widget-area .widget-article .article-item .image img {
            -webkit-transition: .5s;
            transition: .5s
        }

        .template1-details-section .widget-area .widget-article .article-item .content {
            padding-left: 10px
        }

        .template1-details-section .widget-area .widget-article .article-item .content i {
            color: #797979;
            margin-right: 4px;
            vertical-align: -1px
        }

        .template1-details-section .widget-area .widget-article .article-item .content span {
            font-size: 15px;
            color: #797979
        }

        .template1-details-section .widget-area .widget-article .article-item .content h3 {
            margin: 5px 0;
            font-size: 18px
        }

        .template1-details-section .widget-area .widget-article .article-item .content h3 a {
            color: #090031
        }

        .template1-details-section .widget-area .widget-article .article-item .content h3 a:hover {
            color: var(--primary-color);
            text-decoration: underline
        }

        .template1-details-section .widget-area .widget-article .article-item .content .list {
            padding: 0;
            margin-bottom: 0;
            list-style: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .template1-details-section .widget-area .widget-article .article-item .content .list li {
            display: inline-block;
            margin-right: 12px;
            color: #797979;
            -webkit-transition: .5s;
            transition: .5s;
            font-size: 15px
        }

        .template1-details-section .widget-area .widget-article .article-item .content .list li:last-child {
            font-weight: 600;
            color: var(--primary-color)
        }

        .template1-details-section .widget-area .widget-article .article-item:last-child {
            margin-bottom: 0
        }

        .template1-details-section .widget-area .widget-article .article-item:hover {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 140px;
            flex: 0 0 140px
        }

        .template1-details-section .widget-area .widget-article .article-item:hover .image img {
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }

        .template1-details-section .widget-area .widget-gallery .instagram-post {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0;
            margin: 0
        }

        .template1-details-section .widget-area .widget-gallery .instagram-post li {
            position: relative;
            overflow: hidden;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
            cursor: pointer
        }

        .template1-details-section .widget-area .widget-gallery .instagram-post li::after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            -webkit-transition: .5s;
            transition: .5s;
            background: rgba(9, 0, 49, .5)
        }

        .template1-details-section .widget-area .widget-gallery .instagram-post li i {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #fff;
            opacity: 0;
            font-size: 30px;
            -webkit-transition: .5s;
            transition: .5s;
            z-index: 1
        }

        .template1-details-section .widget-area .widget-gallery .instagram-post li:hover::after {
            opacity: 1
        }

        .template1-details-section .widget-area .widget-gallery .instagram-post li:hover i {
            opacity: 1
        }

        .template1-details-section h3.sub-title {
            line-height: 1;
            margin-top: -2px;
            margin-bottom: 20px;
            font-size: 22px;
            text-transform: capitalize
        }

        .ptb-100 {
            padding-top: 100px;
            padding-bottom: 100px
        }

        .pt-100 {
            padding-top: 100px
        }

        .pb-100 {
            padding-bottom: 100px
        }

        .ptb-70 {
            padding-top: 70px;
            padding-bottom: 70px
        }

        .pt-70 {
            padding-top: 70px
        }

        .pb-70 {
            padding-bottom: 70px
        }

        .mb-15 {
            margin-bottom: 15px
        }

        .mt-10 {
            margin-top: 10px
        }

        .mt-15 {
            margin-top: 15px
        }

        .mt-20 {
            margin-top: 20px
        }

        .mb-20 {
            margin-bottom: 20px
        }

        .mb-30 {
            margin-bottom: 30px
        }

        .mt-30 {
            margin-top: 30px
        }

        .ml-30 {
            margin-left: 30px !important
        }

        .mr-45 {
            margin-right: 45px !important;
        }

        .pr-30 {
            padding-right: 30px !important;
        }

        .pr-45 {
            padding-right: 45px !important;
        }


        .no-wrap {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .color-primary {
            color: var(--primary-color) !important
        }

        .color-secondary {
            color: #4141a5 !important
        }

        .color-dark {
            color: #090031
        }

        .bg-primary {
            background-color: #fffdf8 !important
        }

        .bg-light {
            background-color: #f9f8fe !important
        }

        .bg-secondary {
            background-color: #fff9e9 !important
        }

        .section-title {
            max-width: 720px;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 50px;
            position: relative;
            z-index: 5
        }

        .section-title h2 {
            font-size: 40px;
            line-height: 1;
            margin-top: 36px;
            margin-bottom: 25px;
            letter-spacing: 5px;
            font-family: designFont;
            font-weight: 400;



        }

        .section-title p {
            max-width: 640px;
            font-size: 17px;
            font-weight: 500;
            margin-left: auto;
            margin-right: auto
        }

        .section-title .learn-more-btn {
            margin-top: 20px
        }

        .section-title.style-two {
            text-align: center;
            margin-right: auto;
            margin-left: auto
        }

        .section-title.style-two::before {
            display: none
        }

        .section-title.style-two h2 {
            padding: unset;
            margin-top: -10px
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Admin.layouts.sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Admin.layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>
                    @endif

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Detail Page of Product</h1>

                    </div>

                    <form class="addpagefrm contact100-form validate-form" action="{{ route('addProductDetail') }}"
                        method="POST" enctype="multipart/form-data">


                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Select Product (Category)</label>
                                    <select class="form-control" id="product_id" name="product_id" >
                              @if (count($product_list) > 0)
							  <option value="0" selected>-- SELECT --</option>
                              @foreach ($product_list as $b_item)
                              <option value="{{$b_item->_id}}">{{$b_item->name}}
                              </option>
                              @endforeach
                              @endif
                           </select>

                                </div>
                            </div>

                            <div id="product_dropdown" class="col-md-6">
							</div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Template Type</label>
                                    <select class="form-control" id="template_type" name="template_type">
                                        <option value="0" selected>-- Select Template Type --</option>
                                        @if (count($template_type) > 0)
                                            @foreach ($template_type as $template_item)
                                                <option value="{{ $template_item->template_id }}">
                                                    {{ $template_item->template_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" id="tags">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Tags Selection</label>
                                    <select id="example-getting-started" multiple="multiple" name="tags">
                                        <option value="product">Product</option>
                                        <option value="destination">Destination</option>
                                        <option value="events & festivals">Events & Festivals</option>
                                        <option value="gallery">Gallery</option>

                                    </select>
                                </div>
                            </div>



                        </div>

                        <div id="ajax_template_content">

                        </div>
                        <div id="gallery_section">
                        </div>



                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input class="btn btn-primary" type="submit" name="" id="" value="Add" />
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>

    <!-- ---------Modal-------------- -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Image upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type:</label>
                            <select class="form-control" name="" id="txtUserInput">
                                <option value="d">Destination</option>
                                <option value="p">Place</option>

                                <option value="b">Banner</option>
                                <option value="pr">Product</option>
                                <option value="e">Events</option>
                                <option value="o">Other</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <input type="file" class="form-control-file" id="imgInp" onchange="readURL(this);">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive" id="blah" src="{{ asset('assets/img/no-img.png') }}"
                                    width="240" alt="your image" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnCloseModal" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- --------- end modal ---------------- -->
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('Admin.layouts.footer')

    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('Admin.common.includecommonjs')
    <script src="{{ asset('/assets/Admin/js/bootstrap-multiselect.js') }}"></script>

    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
    <script src="/ckeditor/adapters/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>






    <script type="text/javascript">
        $(document).ready(function() {
            $("#product_id").change(function() {
                var id = $(this).val()
                if (id == 0) {
                    $('#product_dropdown').hide();
                } else {
                    $.ajax({
                        url: "{{ url('/admin/destination/get/getsubcat') }}",
                        type: 'GET',
                        cache: false,
                        data: {
                            'id': id,
                            _token: '{{ csrf_token() }}'
                        }, //see the $_token
                        datatype: 'json',
                        beforeSend: function() {
                            //something before send
                        },
                        success: function(data) {
                            console.log('success');
                            console.log(data);
                            $('#product_dropdown').html(data.html);
                            if (data.status == 1) {
                                $('#product_dropdown').show();


                            } else {
                                $('#product_dropdown').hide();
                            }
                            $('#template_type').val('0')
                            $('#ajax_template_content').hide();

                        },
                        error: function(xhr, textStatus, thrownError) {
                            alert(xhr + "\n" + textStatus + "\n" + thrownError);
                        }
                    })
                }

            });
            $("#template_type").change(function() {
                var id = $(this).val()
                console.log(id);
                if (id == 0) {
                    $('#ajax_template_content').hide();
                } else {

                    $.ajax({
                        url: "{{ url('/admin/template/getHtml') }}",
                        type: 'GET',
                        cache: false,
                        data: {
                            'id': $(this).val(),
                            _token: '{{ csrf_token() }}'
                        }, //see the $_token
                        datatype: 'json',
                        beforeSend: function() {
                            //something before send

                        },
                        success: function(data) {

                            // console.log('success');
                            // console.log(data);
                            //   $('.ckeditor').ckeditor();
                            $('#ajax_template_content').html(data.html);
                            if (data.gallery_visible) {
                                $('#ajax_template_content').show();
                                $('.ckeditor').ckeditor();


                            } else {
                                $('#ajax_template_content').hide();
                            }
                            if (id == 2) {
                                $('#product_dropdown').hide();

                            } else if (id == 1) {

                                if ($('#place_id').val() == null) {
                                    $('#product_dropdown').hide();

                                } else {
                                    $('#product_dropdown').show();

                                }




                            }


                        },
                        error: function(xhr, textStatus, thrownError) {
                            alert(xhr + "\n" + textStatus + "\n" + thrownError);
                        }
                    });
                }
            });
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="file" class="form-control" name="name" id="name"></td>' +
                    '<td><button class="btn btn-info">Add</button></td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function() {
                $(this).parents("tr").find("td:not(:last-child)").each(function() {
                    $(this).html('<input type="text" class="form-control" value="' + $(this)
                    .text() + '">');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function() {
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
            $(document).on("click", "#is_url", function() {
                var checkBox = document.getElementById("is_url");
                // Get the output text
                var vUrl = document.getElementById("vUrl");
                var vdo = document.getElementById("vdo");

                // If the checkbox is checked, display the output text
                if (checkBox.checked == true) {
                    vUrl.style.display = "block";
                    vdo.style.display = "none";

                } else {
                    vUrl.style.display = "none";
                    vdo.style.display = "block";
                }
            })



        });
    </script>

    <script>
        function common1() {
            var des = $('#product_id').val();
            var place_id = $('#place_id').val();
            var temp_id = $('#template_type').val();
            if (temp_id == 2) {
                console.log('dropdown closed');
                $('#product_dropdown').hide();
            }

            // $('#template_type').val('0');


        }


        // function readURL(input) {
        //    if (input.files && input.files[0]) {
        //       var reader = new FileReader();

        //       reader.onload = function (e) {
        //          $('#blah')
        //             .attr('src', e.target.result);
        //       };

        //       reader.readAsDataURL(input.files[0]);
        //    }
        // }
        function showDiv(divId, element) {
            var sp = divId.split('_')[1]
            var sn = divId.split('-')[0]
            var ck = ''
            if (sn == 'aB') {
                ck = 'cke_editor_about_' + sp
            }
            var ctwm = sn + '-contentTextWithImg_' + sp;
            var ot = sn + '-onlytext_' + sp;
            // alert(ctwm)
            var textarea = $('#' + ot).find('textarea');
            var cke = $('#' + ot).find('#' + ck)
            document.getElementById(divId).style.display = element.value == 'textwithimage' ? 'block' : 'none';
            var tm = element.value
            if (tm == 'textwithimage') {
                // alert(divId)
                document.getElementById(ot).style.display = 'none';
                document.getElementById(ctwm).style.display = 'block';
                // textarea.remove();
                $('#' + sn + '-contentText_' + sp).append(textarea);
                $('#' + sn + '-contentText_' + sp).append(cke);
            } else {
                document.getElementById(ot).style.display = 'block';
                // textarea.remove();
                textarea = $('#' + ctwm).find('textarea');
                cke = $('#' + sn + '-contentText_' + sp).find('#' + ck);
                $('#' + sn + '-onlytext_' + sp).find('.content').append(textarea);
                $('#' + sn + '-onlytext_' + sp).find('.content').append(cke);
                document.getElementById(ctwm).style.display = 'none';

            }
            //  document.getElementById(ctwm).style.display=tm;

        }

        function showPosition(divId, e) {
            var id = '#' + divId
            var eleImg = $(id).find('.img-section');
            var eleText = $(id).find('.content-section');
            if (e.value == 'right') {
                eleImg.remove();
                $(id).append(eleImg);
            }
            if (e.value == 'left') {
                eleText.remove();
                $(id).append(eleText);
            }


            // var a_item
        }

        function showAligmnent(divId, element) {
            alert(divId)
            document.getElementById(divId).style.display = element.value != '' ? 'block' : 'none';
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-getting-started').multiselect();
            //   $('.ckeditor').ckeditor();
        });
    </script>


</body>

</html>
