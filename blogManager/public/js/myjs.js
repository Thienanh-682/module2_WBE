$(document).ready(function () {
   $('#search-blog').on('keyup', function () {
       let value = $(this).val();
       $.ajax({
           url: 'http://127.0.0.1:8000/blog/search',
           type: 'GET',
           dataType :'json',
           data: {keyword: value},
           success:function (result) {
               let html = '';
               console.log(result);
               $.each(result , function (index, item) {
                   html += '<tr class="blog-'+item.id+'">';
                   html += '<td>';
                   html += ++index;
                   html += '</td>';
                   html += '<td>';
                   html += item.name;
                   html += '</td>';
                   html += '<td>';
                   html += item.category;
                   html += '</td>';
                   html += '<td>';
                   html += item.author;
                   html += '</td>';
                   html += '<td>';
                   html += item.image;
                   html += '</td>';
                   html += '<td>';
                   html += '<button class="btn btn-danger delete-blog" data-id="'+item.id+'">Delete</button>';
                   html += '</td>';
                   html += '</tr>'
               });
               $('#index-blog').html(html)
           },
           error:function () {
           }
       })
   });

    $('body').on('click','.delete-blog', function () {
        if (confirm("ban chac chan muon xoa khong?")) {
            let blogId = $(this).data('id');
            console.log(blogId);
            $.ajax({
                url: 'http://127.0.0.1:8000/blog/' + blogId + '/delete',
                type: 'GET',
                dataType: 'JSON',
                success: function (result) {
                    $('.blog-' + blogId).remove();
                }
            })
        }
    })
});
