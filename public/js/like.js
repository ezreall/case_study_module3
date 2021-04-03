$(function() {
    $('.likes a').click(function (e) {
        var _token   = $('meta[name="csrf-token"]').attr('content');
        var type     = $(this).hasClass('like') ? 'like' : 'dislike';
        var article_id  = $(this).parent('.likes').data('article-id');
        var $parent  = $(this).parent('.likes');

        $.post("{{ route('posts.ratePost') }}", {
            _token,
            type,
            article_id
        })
            .done((data) => {
                var message = 'You have ' + type + 'd this article';
                $parent.children('a').removeClass('active');
                $parent.find('.like .count').text(data.likes);
                $parent.find('.dislike .count').text(data.dislikes);

                if (data.detached && data.unrated) {
                    message = 'You have un' + type + 'd this article'
                } else if (!data.detached && !data.unrated) {
                    $(this).addClass('active');
                } else if (data.detached && !data.unrated) {
                    $(this).addClass('active');
                }

                Swal.fire(
                    'Success!',
                    message,
                    'success'
                );
            })
            .fail(({responseJSON}) => {
                var message = responseJSON.errors && responseJSON.errors[Object.keys(responseJSON.errors)[0]] ?
                    responseJSON.errors[Object.keys(responseJSON.errors)[0]][0] :
                    responseJSON.message;

                Swal.fire(
                    'Error!',
                    message,
                    'error'
                );
            });

    });
})
