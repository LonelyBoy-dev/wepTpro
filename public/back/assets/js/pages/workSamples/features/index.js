$(document).on('click', '.btn-delete', function () {
    $('#brand-delete-form').attr(
        'action',
        BASE_URL + '/work-samples/technology/destroy/' + $(this).data('brand')
    );
    $('#brand-delete-form').data('id', $(this).data('id'));
});

$('#brand-delete-form').submit(function (e) {
    e.preventDefault();

    $('#delete-modal').modal('hide');
    var form = this;
    var formData = new FormData(this);

    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        success: function (data) {
            //get current url
            var url = window.location.href;

            //remove brand tr
            $('#brand-' + $(form).data('id') + '-tr').remove();

            toastr.success('ویژگی با موفقیت حذف شد.');

            //refresh brands list
            $('.app-content').load(url + ' .app-content > *');
        },
        beforeSend: function (xhr) {
            block('#main-card');
            xhr.setRequestHeader(
                'X-CSRF-TOKEN',
                $('meta[name="csrf-token"]').attr('content')
            );
        },
        complete: function () {
            unblock('#main-card');
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
function sortable() {
    $('tbody').sortable({
        opacity: .75,
        handle: '.draggable-handler',
        start: function (e, ui) {
            ui.placeholder.css({
                'height': ui.item.outerHeight(),
                'margin-bottom': ui.item.css('margin-bottom'),
            });
        },
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        },

        update: function () {
            saveChanges();
        },
    });
}

function saveChanges() {

    var sortedIDs = $("#widgets-sortable").sortable("toArray");

    if (!sortedIDs.length) {
        return;
    }

    sortedIDs.forEach(function (value, index) {
        sortedIDs[index] = value.replace('widget-', '');
    });

    $.ajax({
        url: $('#widgets-sortable').data('action'),
        type: 'post',
        data: { widgets: sortedIDs },
        success: function () {
            //
        },
        beforeSend: function (xhr) {
            xhr.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
        },
        complete: function () {
            //
        },
    });
}

sortable();