<div>
    <div class="max-w-2xl mx-auto pt-24 sm:px-6 lg:px-8 py-12 text-blue-600">
        <div class="card p-2">
            <h1 class="text-2xl text-center font-bold uppercase">Detalles del pedido</h1>
            <hr class="mt-2 mb-6">
            <article class="flex items-center">
                <img class="h-20 w-20 mr-2 object-cover rounded-md" src="{{Storage::url($course->image->url)}}" alt="">
                <h1 class="text-lg">{{$course->title}}</h1>
                <p class="text-lg font-bold ml-auto">
                    MXN$ {{number_format($course->price->value, 2, ',', '.')}}

                </p>
                // SDK MercadoPago.js V2
                <script src="https://sdk.mercadopago.com/js/v2"></script>
            </article>
 
            <div class="flex justify-end">
                
                    
                        <div class="cho-container">

                        </div>
                    
             </div>
                </a>
            </div>
 
            <div class="card my-8 mx-12 p-4 text-sm text-blue-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor molestias soluta id accusamus qui quibusdam suscipit fugiat possimus harum molestiae.
                <a href="" class="text-red-500 font-bold">Términos y Condiciones</a>
            </div>
        </div>
    </div>

    <div>

   
    <?php
    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');
    ?>

<?php
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'mi producto'
$item->quantity = 1;
$item->unit_price = 10;
$preference->items = array($item);
$preference->save();
?>
     </div>

     <script>
      // Agrega credenciales de SDK
        const mp = new MercadoPago('PUBLIC_KEY', {
              locale: 'es-AR'
        });
      
        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: 'YOUR_PREFERENCE_ID'
            },
            render: {
                  container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                  label: 'Pagar', // Cambia el texto del botón de pago (opcional)
            }
      });
      </script>