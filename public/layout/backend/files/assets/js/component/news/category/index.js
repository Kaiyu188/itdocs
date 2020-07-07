$(function() {
    LoadTableCate();
});

function LoadTableCate() {
    $('#datatable_category').DataTable({
        processing: true,
        serverSide: false,
        ajax: '/admin/category.list',
        destroy: true,
        responsive: false,
        language: {
            processing: 'Đức đang load mí bạn đợi tí được hông !!!'
        },
        columns: [
            { data: 'id', name: 'id', className: 'text-center' },
            { data: 'cate_name', name: 'cate_name', className: 'text-center' },
            { data: 'cate_priority', name: 'cate_priority', className: 'text-center' },
            { data: 'action', name: 'action', className: 'td-button' }
        ],
    });
};