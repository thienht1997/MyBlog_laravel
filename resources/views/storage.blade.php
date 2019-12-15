@extends('layouts.master')
@section('title')
    Storage
@endsection
@section('content')

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                {{-- <img src="img/bg-img/b5.jpg" alt=""> --}}
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="post-date">
                                    <script>
                                        $(document).ready(function () {
                                            $("#create_form").hide();
                                            let isShow = false;
                                            $("#create_link").click(function () {
                                                if (isShow == false) {
                                                    isShow = true;
                                                    $("#create_form").show();
                                                    $("#create_link").text('Hide Form');
                                                } else if (isShow == true) {
                                                    $("#create_form").hide();
                                                    isShow = false;
                                                    $("#create_link").text('Show Form');
                                                }
                                            });
                                        });
                                    </script>
                                    <button id="create_link" class='btn btn-success' value="Show form"> Show form
                                    </button>
                                    <h1></h1>
                                    <div id="create_form">
                                        <form action="{{route('create_link')}}" method="post">
                                            @csrf
                                            <label for="">Add something new!</label> <br>
                                            <h3>Title:</h3>
                                            <input type="text" name="title" value="">
                                            <br>
                                            <h3>Link:</h3>
                                            <input type="text" name="link" value="">
                                            <br><br>
                                            <input type="submit" value="Add">
                                        </form>
                                        <br>
                                    </div>
                                    <table class="table table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Create At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($links as $key=>$link)
                                            <tr>
                                                <th scope="row">{{++$key}}</th>
                                                <td>{{$link->title}}</td>
                                                <td><a href="{{$link->link}}" target="_blank">{{$link->link}}</a></td>
                                                <td>{{$link->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

        </div>
        <!-- ##### Single Blog Area End ##### -->

@endsection
