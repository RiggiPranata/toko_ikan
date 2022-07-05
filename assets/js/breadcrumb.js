$(function(){
    


    
    $('#menu-ikan').click(function(){
        var val = 'Ikan';
        var url = $(location).attr('href');
        console.log(url);
        var base = 'http://localhost/toko_ikan/produk';
        if(url == base || base+'#'){
            $.get('produk/kategori/'+val,function(data){
                $('#sort').html(data);
                var bc = $('#breadcrumb').children().text();
                var text = bc.substring(11);
             
                if(text !== 'Kategori Ikan'){
                    $('#breadcrumb').append(`<li class='breadcrumb-item'>Kategori Ikan</li>`)
                }
            })

        }

    });

  });