(function ($) {
    $(document).ready(function () {
        console.log('jQuery ready')
        $('.tag__filter').on('click', function (event) {
            event.preventDefault();
            const ajaxURL = $(this).data('url')
            let data = {
                action: $(this).data('action'),
                nonce:  $(this).data('nonce'),
                filter: $(this).data('filter'),
                paging: $(this).data('paging'),
            }
            $('.load-screen').addClass('loading')
            if ($(this).hasClass('active')) {
                $(this).removeClass('active')
                data.filter = "clear"
                $.ajax({
                    "type": 'POST',
                    "url": ajaxURL,
                    "dataType": 'html',
                    "data": data,
                    "headers": {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Cache-Control': 'no-cache',
                    },
                    "success": function (data) {
                        $('.load-screen').removeClass('loading')
                        const projects = $('.projects-list__items')
                        projects.html(data)
                    },
                    "error": function (xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                })
            } else {
                $('.active').removeClass('active')
                $(this).addClass('active')
                $.ajax({
                    "type": 'POST',
                    "url": ajaxURL,
                    "dataType": 'html',
                    "data": data,
                    "headers": {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Cache-Control': 'no-cache',
                    },
                    "success": function (data) {
                        $('.load-screen').removeClass('loading')
                        const projects = $('.projects-list__items')
                        projects.html(data)
                    },
                    "error": function (xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                })
            }

        })
    })
})(jQuery)
