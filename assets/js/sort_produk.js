$(function(){
    $("#sort-by").change(function(){
            let selected = $("#sort-by").val();
            console.log(selected);
        
            if(selected == 'produk_id') {
                $.get('produk/sort/'+selected, function(data){
                    $('#sort').html(data);
                })
            } else if(selected == 'nama_produk') {
                $.get('produk/sort/'+selected, function(data){
                    $('#sort').html(data);
                      $('#sort-by').val('nama_produk');
                })
            }  else if(selected == 'harga') {
                $.get('produk/sort/'+selected, function(data){
                      $('#sort').html(data);
                      $('#sort-by').val('harga');
                })
            }
        });


  });