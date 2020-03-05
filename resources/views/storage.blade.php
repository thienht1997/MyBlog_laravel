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
                                @if(Session::has('success'))
                                    <div id='success' class="alert alert-{{Arr::random(['success', 'danger', 'primary', 'info', 'warning'])}} pt-5 text-center">
                                        <ul>
                                            {{Session::get('success')}}
                                        </ul>
                                    </div>
                                @endif
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
                                        setTimeout(function () {
                                            $('#success').hide()
                                        }, 2000);
                                        
                                        // ids = JSON.parse($(".link-ids").val());
                                        var changeImportantLevel = (rowId) => {
                                            important_level = $("#link-important" + rowId.slice(6)).val();
                                            important_level++;
                                            important_level%3 == 0 ?  $('#' + rowId).css('color', 'red') : (important_level%3 == 1 ?  $('#' + rowId).css('color', 'green') : $('#' + rowId).css('color', 'yellow'));
                                            return $.ajax({
                                                type: 'GET',
                                                url: '/api/ajaxChangeImportantLevel/' + rowId.slice(6) + '/' + important_level,
                                                dataType: 'json',
                                                success: function(response){

                                                }
                                            });
                                        };
                                    </script>
                                    <button id="create_link" class='btn btn-success' value="Show form"> Show form
                                    </button>
                                    <h1></h1>
                                    @if(isset($link))
                                        <div id="edit_form">
                                        <form action="{{route('update_link', $link)}}" method="post">
                                            @csrf
                                            <label for="">Edit link!</label> <br>
                                            <h3>Title:</h3>
                                            <input type="text" name="title" value="{{$link->title}}">
                                            <br>
                                            <h3>Link:</h3>
                                            <input type="text" name="link" value="{{$link->link}}">
                                            <br><br>
                                            <input type="submit" value="Add">
                                            <button id="back">Back</button>
                                        </form>
                                        <br>
                                    </div>
                                    @endif
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
                                    @if(isset($links))
                                    <table class="table table-dark" id="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Create At</th>
                                            @can('manage')
                                                <th scope="col">-</th>
                                                <th scope="col">-</th>
                                            @endcan

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <input class="link-ids" type="hidden" value="{{json_encode($link_ids)}}">;

                                        @foreach($links as $key=>$link)                                            
                                            <input id="{{'link-important' . $link->id}}" type="hidden" value="{{$link->important_level}}">;
                                            <tr>
                                                <th scope="row">{{++$key}}</th>
                                            <td  id="{{'title_' . $link->id}}" onclick="changeImportantLevel(this.id, {{$link->important_level}})" style={{$link->important_level % 3 == 1 ? 'color:green' : ($link->important_level % 3 == 2 ? 'color:yellow' : 'color:red')}}>{{$link->title}}</td>
                                                <td><a href="{{$link->link}}" target="_blank">{{$link->link}}</a></td>
                                                <td>{{$link->created_at}}</td>
                                                @can('manage')
                                                    <td>
                                                        <a href="{{route('edit_link', $link->id)}}">
                                                            <button class="btn btn-primary edit" id="btn_edit">
                                                                Edit
                                                            </button>
                                                        </a></td>
                                                    <td><a href="{{route('delete_link', $link->id)}}">
                                                            <button class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure to delete this?')">
                                                                Delete
                                                            </button>
                                                        </a></td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                        @endif
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
