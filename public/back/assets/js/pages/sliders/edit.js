$('#slider-edit-form').submit(function(e) {
    e.preventDefault();

    if (!$(this).data('disabled')) {
        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(data) {
                $('#slider-edit-form').data('disabled', true);
                window.location.href = BASE_URL + "/sliders";
            },
            beforeSend: function(xhr) {
                block('#main-card');
                xhr.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            complete: function() {
                unblock('#main-card');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }

});

$(".slider-link").autocomplete({
    source: pages
});
$('#motionTitle').tagsInput({
    'defaultText': 'افزودن',
    'width': '100%',
    'autocomplete_url': BASE_URL + '/get-tags',
});