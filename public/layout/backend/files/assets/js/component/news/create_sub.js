$('#btn_sub_cate').on('click', function() {
    $.ajax({
        type: 'GET',
        url: '/admin/news/sub_category.view.add',

        success(data) {
            // console.log(data);
            $('#modal_sub_category_add_body').html(data);
            $('#modal_sub_category_add_parent').modal('show');
            // $('#change_cate_create').select2({
            //     dropdownParent: $('#modal_parent'),
            // });

            $('#btn_close_modal_sub').on('click', function() {
                $('#modal_sub_category_add_parent').modal('hide');
                LoadTableSub();
            });
        },
    })
});

function LoadTableSub() {
    $('#dt-ajax-array2').DataTable({
        processing: true,
        serverSide: false,
        ajax: '/admin/news/sub_category.list',
        destroy: true,
        responsive: false,
        language: {
            processing: 'Đức đang load mí bạn đợi tí được hông !!!'
        },
        columns: [
            { data: 'sub_id', name: 'sub_id', className: 'text-center' },
            { data: 'sub_name', name: 'sub_name', className: 'text-center' },
            { data: 'sub_priority', name: 'sub_priority', className: 'text-center' },
            { data: 'sub_cate', name: 'sub_priority', className: 'text-center' },
            { data: 'action', name: 'action', className: 'td-button' }
        ],
    });
};

function createSub_Category() {
    // $('#btn_create_sub_category').on('click', function() {
    $.ajax({
            type: "POST",
            url: '/admin/news/sub_category.add',
            data: {
                sub_name: $("input[name=sub_name]").val(),
                sub_priority: $("input[name=sub_priority]").val(),
                sub_cate: $('#change_cate_create').val(),
            },
            success(data) {
                if (data.success == "Thành công") {
                    alert(data.success);
                    // Solid success
                    // var text = 'Thêm danh mục thành công nạ';
                    // Success(text);
                }
            }
        })
        // });
};