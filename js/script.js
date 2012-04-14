$(document).ready(function() {
    $('#open').fancybox({
        maxWidth	: 800,
        maxHeight	: 600,
        fitToView	: false,
        width		: 500,
        height		: 400,
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });

    $('.links a, .signup').fancybox({
        maxWidth	: 800,
        maxHeight	: 600,
        fitToView	: false,
        width		: 400,
        height		: 280,
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });
    $('#open-div').submit(function(e) {
        e.preventDefault();
        $(this).find('button').attr('disabled', true).text('Submitting...');
        var info = $(this).serializeArray();
        console.log(info);
        $.post('submit.php', info, function() {
            alert('Done!');
        });
    });
});
