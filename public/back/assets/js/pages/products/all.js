CKEDITOR.config.height = 400;
CKEDITOR.replace('description');

$('.tags').tagsInput({
    defaultText: 'افزودن',
    width: '100%',
    autocomplete_url: BASE_URL + '/get-tags'
});

$('.product-category').select2ToTree({
    rtl: true,
    width: '100%'
});

$('.product-categories').select2ToTree({
    rtl: true,
    width: '100%'
});

// validate form with jquery validation plugin
jQuery('#product-create-form, #product-edit-form').validate({
    rules: {
        title: {
            required: true
        },
        weight: {
            required: true,
            digits: true
        }
    }
});

//------------ specification group js codes

var groupsCount = groupCount;

$('#add-product-specification-group').click(function () {
    var template = $('#specification-group').clone();

    var group = $('#specifications-area').append(template.html());

    var count = ++groupCount;
    groupsCount++;

    var input = group.find('input[name="specification_group"]');

    input.attr('name', 'specification_group[' + count + '][name]');
    input.data('group_name', count);

    groupSortable();

    setTimeout(() => {
        group.find('.specification-group').removeClass('.animated fadeIn');
    }, 700);
});

function groupSortable() {
    $('#specifications-area').sortable({
        opacity: 0.75,
        start: function (e, ui) {
            ui.placeholder.css({
                height: ui.item.outerHeight(),
                'margin-bottom': ui.item.css('margin-bottom')
            });
        },
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        }
    });
}

groupSortable();

$(document).on('click', '.remove-group', function () {
    var group = $(this).closest('.specification-group');

    group.addClass('animated fadeOut');

    setTimeout(() => {
        group.remove();
    }, 500);

    groupsCount--;
});

//------------ specifications js codes

$(document).on('click', '.add-specifaction', function () {
    var template = $('#specification-single').clone();

    var specification = $(this)
        .closest('.specification-group')
        .find('.all-specifications')
        .append(template.html());

    var count = ++specificationCount;
    var group_name = $(specification)
        .closest('.specification-group')
        .find('.group-input')
        .data('group_name');

    specification
        .find('input[name="special_specification"]')
        .attr(
            'name',
            'specification_group[' +
                group_name +
                '][specifications][' +
                count +
                '][special]'
        );
    specification
        .find('input[name="specification_name"]')
        .attr(
            'name',
            'specification_group[' +
                group_name +
                '][specifications][' +
                count +
                '][name]'
        );
    specification
        .find('textarea[name="specification_value"]')
        .attr(
            'name',
            'specification_group[' +
                group_name +
                '][specifications][' +
                count +
                '][value]'
        );

    specificationSortable();

    setTimeout(() => {
        specification
            .find('.single-specificition')
            .removeClass('.animated fadeIn');
    }, 700);
});

$(document).on('click', '.remove-specification', function () {
    var specification = $(this).closest('.single-specificition');

    specification.addClass('animated fadeOut');

    setTimeout(() => {
        specification.remove();
    }, 500);
});

function specificationSortable() {
    $('.all-specifications').sortable({
        opacity: 0.75,
        start: function (e, ui) {
            ui.placeholder.css({
                height: ui.item.outerHeight(),
                'margin-bottom': ui.item.css('margin-bottom')
            });
        },
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        }
    });
}

specificationSortable();

//------------ files js codes

function addProductFile() {
    var template = $('#files-template').clone();

    var file = $('#product-files-area')
        .append(template.html())
        .find('.single-file:last');
    var count = ++filesCount;

    file.find('input[name="title"]').attr(
        'name',
        'download_files[' + count + '][title]'
    );
    file.find('select[name="status"]').attr(
        'name',
        'download_files[' + count + '][status]'
    );
    file.find('input[name="file"]').attr(
        'name',
        'download_files[' + count + '][file]'
    );
    file.find('input[name="file"]').attr(
        'id',
        'download_files[' + count + '][id]'
    );
    file.find('label[for="file"]').attr(
        'for',
        'download_files[' + count + '][id]'
    );
    file.find('input[name="price"]').attr(
        'name',
        'download_files[' + count + '][price]'
    );
    file.find('input[name="discount"]').attr(
        'name',
        'download_files[' + count + '][discount]'
    );

    filesSortable();

    setTimeout(() => {
        file.removeClass('animated fadeIn');
    }, 700);
}

$(document).on('click', '#add-product-file', function () {
    addProductFile();
});

$(document).on('click', '.remove-file', function () {
    var file = $(this).closest('.single-file');

    file.addClass('animated fadeOut');

    setTimeout(() => {
        file.remove();
    }, 500);
});

if (filesCount == 0) {
    addProductFile();
}

function filesSortable() {
    $('#product-files-area').sortable({
        opacity: 0.75,
        start: function (e, ui) {
            ui.placeholder.css({
                height: ui.item.outerHeight(),
                'margin-bottom': ui.item.css('margin-bottom')
            });
        },
        helper: function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        }
    });
}

filesSortable();

$('#product-type').on('change', function () {
    if ($(this).val() == 'physical') {
        //$('.physical-item').show();
        $('.download-item').show();
    } else {
        $('.physical-item').hide();
        $('.download-item').show();
    }
});

$('#product-type').trigger('change');

//------------ spectype js codes

$('#specifications_type').autocomplete({
    source: availableTypes
});

$('#specifications_type').change(function () {
    var value = $(this).val();

    if (availableTypes.includes(value) && !specifications_type_first_change) {
        addSpecTypeData();
    } else if (availableTypes.includes(value) && groupsCount != 0) {
        $('#specifications-modal').modal('show');
    } else if (availableTypes.includes(value) && groupsCount == 0) {
        addSpecTypeData();
    }

    specifications_type_first_change = true;

    $('#spec-div').show();
});

$('#add-spec-type-data').click(addSpecTypeData);

$('#specifications_type').on('keyup keypress', function (e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
        e.preventDefault();
        return false;
    }
});

function addSpecTypeData() {
    $.ajax({
        url: BASE_URL + '/spectypes/spec-type-data',
        type: 'GET',
        data: {
            name: $('#specifications_type').val()
        },
        success: function (data) {
            groupCount = data.groupCount;
            specificationCount = data.specificationCount;
            groupsCount = data.groupCount;

            $('#specifications-area').html(data.view);
            specificationSortable();
            groupSortable();
        },
        beforeSend: function (xhr) {
            block('#specifications-card');
        },
        complete: function () {
            unblock('#specifications-card');
        }
    });
}

//------------ prices js codes

$('#add-product-prices').click(function () {
    addProductPrice();
});

$(document).on('click', '.remove-product-price', function () {
    var price = $(this).closest('.single-price');

    price.addClass('animated fadeOut');

    setTimeout(() => {
        price.remove();
    }, 500);
});

if (priceCount == 0) {
    addProductPrice();
}

function addProductPrice() {
    var template = $('#prices-template').clone();

    var price = $('#product-prices-div').append(template.html());

    var count = ++priceCount;
    let unit = price
        .closest('.product-prices-tab')
        .find('select[name="currency_id"] option:selected')
        .data('title');

    price
        .find('select[name="attribute"]')
        .attr('name', 'prices[' + count + '][attributes][]');

    price
        .find('input[name="price"]')
        .attr('name', 'prices[' + count + '][price]')
        .data('unit', unit);
    price
        .find('input[name="discount"]')
        .attr('name', 'prices[' + count + '][discount]');
    price
        .find('input[name="cart_max"]')
        .attr('name', 'prices[' + count + '][cart_max]');
    price
        .find('input[name="cart_min"]')
        .attr('name', 'prices[' + count + '][cart_min]');
    price
        .find('input[name="stock"]')
        .attr('name', 'prices[' + count + '][stock]');
    price
        .find('input[name="discount_expire"]')
        .attr('name', 'prices[' + count + '][discount_expire]');

    setTimeout(() => {
        price.find('.single-price').removeClass('.animated fadeIn');
    }, 700);
}

$('select[name="currency_id"]').on('change', function () {
    var unit = $(this).find(':selected').data('title');

    $('.single-price .amount-input').data('unit', unit).trigger('keyup');
});

$(document).on(
    'keyup',
    '.single-price .price, .single-price .discount',
    function () {
        let unit = $(this)
            .closest('.product-prices-tab')
            .find('select[name="currency_id"] option:selected')
            .data('amount');

        let roundingAmount = $(this)
            .closest('.product-prices-tab')
            .find('select[name="rounding_amount"] option:selected')
            .data('value');

        let roundingType = $(this)
            .closest('.product-prices-tab')
            .find('select[name="rounding_type"] option:selected')
            .data('value');

        let discount = $(this).closest('.single-price').find('.discount').val();

        let price = $(this).closest('.single-price').find('.price').val();

        price = price ? parseFloat(price) : 0;
        unit = parseFloat(unit);
        discount = discount ? parseFloat(discount) : 0;
        roundingAmount =
            roundingAmount != 'no' ? parseFloat(roundingAmount) : 0;

        let finalPrice = (price - price * (discount / 100)) * unit;

        finalPrice = toRoundInt(finalPrice, roundingType, roundingAmount);

        finalPrice = +finalPrice.toFixed(2);

        let finalPriceText = number_format(finalPrice) + ' تومان';

        $(this)
            .closest('.single-price')
            .find('.final-price')
            .val(finalPriceText);
    }
);

$(document).on('change', '.prices-option-div select', function () {
    $('.single-price .price').trigger('keyup');
});

$('.prices-option-div select').trigger('change');

//------------ generate slug

$('#generate-product-slug').click(function (e) {
    e.preventDefault();

    var title = $('input[name="title"]').val();

    $.ajax({
        url: BASE_URL + '/product/slug',
        type: 'POST',
        data: {
            title: title
        },
        success: function (data) {
            $('#slug').val(data.slug);
        },
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'X-CSRF-TOKEN',
                $('meta[name="csrf-token"]').attr('content')
            );
            $('#slug-spinner').show();
        },
        complete: function () {
            $('#slug-spinner').hide();
        }
    });
});

//------------ dropzone sortable

$('.dropzone-area').sortable({
    items: '.dz-preview',
    opacity: 0.75,
    start: function (e, ui) {
        ui.placeholder.css({
            height: ui.item.outerHeight(),
            'margin-bottom': ui.item.css('margin-bottom')
        });
    },
    helper: function (e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function (index) {
            $(this).width($originals.eq(index).width());
        });
        return $helper;
    }
});

//------------ spectype js codes

$('#brand').autocomplete({
    source: BASE_URL + '/brands/ajax/get',
    delay: 1000
});

//------------ publish time picker js codes

$('#publish_date_picker').on('keydown', function (e) {
    e.preventDefault();
    $(this).val('');
    $('#publish_date').val('');
});
