//   $(function() {
     $(".products").DataTable({
        processing: false,
        serverSide: true,
        ajax: {
            url: '{{ url("detail-products") }}'
        },
        columns: [
        {data: 'code', name: 'code'},
        {data: 'name', name: 'name'},
        {data: 'price', name: 'price'},
        {data: 'discount_percent', name: 'discount_percent'},
        {data: 'description', name: 'description'},
        {data: 'stok', name: 'stok'},
        {data: 'status', name: 'status'},
        {data: 'category_id', name: 'category_id',orderable: false, searchable: false},
        // {data: 'discount_percent', name: 'deskripsi', orderable: false},
        // {data: 'kategori', name: 'kategori', orderable: false, searchable: false},
    ],
    // });
});