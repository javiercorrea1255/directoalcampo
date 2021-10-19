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
                <div id="paypal-button-container"></div>
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

        

    <script src="https://www.paypal.com/sdk/js?client-id={{config('services.paypal.client_id')}}&currency=MXN"></script>

  
    <script>
        paypal.Buttons({
  
          // Sets up the transaction when a payment button is clicked
          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: {{$course->price->value}} // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                }
              }]
            });
          },
  
          // Finalize the transaction after payer approval
          onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                        Livewire.emit('buyCourse', details)
              
              
                // Successful capture! For dev/demo purposes:
                  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                  var transaction = orderData.purchase_units[0].payments.captures[0];
                  alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
  
              // When ready to go live, remove the alert and show a success message within this page. For example:
              // var element = document.getElementById('paypal-button-container');
              // element.innerHTML = '';
              // element.innerHTML = '<h3>Thank you for your payment!</h3>';
              // Or go to another URL:  actions.redirect('thank_you.html');
            });
          }
        }).render('#paypal-button-container');
  
      </script>

</div>