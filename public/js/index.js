var pageNum = 1;

$(document).ready(function() {
    $("#modalLoginForm").modal('show');
    $("#modalLoginForm").appendTo("body");
    $("#create_link1").click(function() {
        $("#myModal").modal('show');
        $("#myModal").appendTo("body");
    });

    $(document).on('click', '#readmore', function() {
        pageNum++;
        $.ajax({
            url:  '/' + pageNum + '/ajaxposts',
            method: 'get',
            success: function(data) {
                data.forEach(function(value) {
                    let postList = "<div class='row align-items-center'>" +
                        "<div class='col-12 col-md-6'>" +
                        "<div class='single-blog-thumbnail'>" +
                        "<img src='img/blog-img/4.jpg' alt=''>" +
                        "<div class='post-date'>" +
                        "<a href='#'>12 <span>march</span></a>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "<div class='col-12 col-md-6'>" +
                        "<div class='single-blog-content'>" +
                        "<div class='line'></div>" +
                        "<a href='#' class='post-tag'>ToiLaThien</a>" +
                        "<h4><a href='#' class='post-headline'>" + value.name + "</a></h4>" +
                        "<p>" + value.content + "</p>" +
                        "<div class='post-meta'>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "</div>" + "<br>";

                    $("#content").append(postList);
                });
            },
            error: function(error) {

            }
        });
    });
});