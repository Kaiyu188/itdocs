$('#btn_category').on('click', function() {
    $.ajax({
        type: 'GET',
        url: '/admin/category.modal',

        success(data) {
            // console.log(data);
            $('#modal_body').html(data);
            $('#modal_parent').modal('show');

            $('#btn_close_modal_cate').on('click', function() {
                // console.log('abc');
                $('#modal_parent').modal('hide');
                LoadTableCate();
            });
        },
    })
});

function createCategory() {
    console.log($("input[name=cate_name]").val());
    console.log($("input[name=cate_priority]").val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: '/admin/category.add',
        data: {
            cate_name: $("input[name=cate_name]").val(),
            cate_priority: $("input[name=cate_priority]").val(),
        },
        success(data) {
            if (data.success == "Thành công") {
                alert(data.success);

            }
        }
    })
};