$(document).ready(function(data){
                         $('.add_to_cart').click(function(){
                              var product_id = $(this).attr("id");
                              var product_name = $('#name'+product_id).val();
                              var product_page = $('#page'+product_id).val();
                              var email = $('#email'+product_id).val();
                              var weight = $('#weight'+product_id).val();
                              var product_id_menu = $('#id_menu'+product_id).val();
                              var product_price = $('#price'+product_id).val();
                              var product_quantity = $('#quantity'+product_id).val();
                              var action = "add";
                              if(product_quantity > 0)
                              {
                                   $.ajax({
                                        url:"cart.html",
                                        method:"POST",
                                        dataType:"json",
                                        data:{
                                             product_id:product_id,
                                             product_name:product_name,
                                             weight:weight,
                                             email:email,
                                             product_name:product_name,
                                             product_page:product_page,
                                             product_id_menu:product_id_menu,
                                             product_price:product_price,
                                             product_quantity:product_quantity,
                                             action:action
                                        },
                                        success:function(data)
                                        {
                                             $('#order_table').html(data.order_table);
                                             $('.badge').text(data.cart_item);
                                             $.notify("produk berhasil ditambahkan", "success");


                                        }
                                   });
                              }
                              else
                              {

                                   $.notify("masukan jumlah quantity", "error");
                              }
                         });
                         $(document).on('click', '.delete', function(){
                              var product_id = $(this).attr("id");
                              var action = "remove";

                                   $.ajax({
                                        url:"cart.html",
                                        method:"POST",
                                        dataType:"json",
                                        data:{product_id:product_id, action:action},
                                        success:function(data){
                                             $('#order_table').html(data.order_table);
                                             $('.badge').text(data.cart_item);
                                        }
                                   });
                                   $.notify("produk berhasil dihapus", "info");

                         });
                         $(document).on('keyup', '.quantity', function(){
                              var product_id = $(this).data("product_id");
                              var quantity = $(this).val();
                              var action = "quantity_change";
                              if(quantity != '')
                              {
                                   $.ajax({
                                        url :"cart.html",
                                        method:"POST",
                                        dataType:"json",
                                        data:{product_id:product_id, quantity:quantity, action:action},
                                        success:function(data){
                                             $('#order_table').html(data.order_table);
                                        }
                                   });
                              }
                         });

                         $(document).on('keyup', '.cash', function(){
                              var product_id = $(this).data("product_id");
                              var cash = $(this).val();
                              var action = "cash_change";
                              if(quantity != '')
                              {
                                   $.ajax({
                                        url :"cart.html",
                                        method:"POST",
                                        dataType:"json",
                                        data:{product_id:product_id, cash:cash, action:action},
                                        success:function(data){
                                             $('#order_table').html(data.order_table);
                                        }
                                   });
                              }
                         });









                    });
