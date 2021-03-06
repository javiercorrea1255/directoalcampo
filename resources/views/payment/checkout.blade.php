<x-app-layout>
    <div class="max-w-2xl mx-auto pt-24 sm:px-6 lg:px-8 py-12 text-blue-400">
        <div class="card p-2">
            <h1 class="text-2xl text-center font-bold uppercase">Detalles del pedido</h1>
            <hr class="mt-2 mb-6">
            <article class="flex items-center">
                <img class="h-20 w-20 mr-2 object-cover rounded-md" src="{{Storage::url($course->image->url)}}" alt="">
                <h1 class="text-lg">{{$course->title}}</h1>
                <p class="text-lg font-bold ml-auto">
                    MXN$ {{number_format($course->price->value, 2, ',', '.')}}
                </p>
            </article>
 
            <div class="flex justify-end">
                <a href="{{route('payment.pay', $course)}}" class="btn btn-blue btn-block flex justify-between mt-4">
                    <div class="flex items-center">
                        <p>Comprar mediante PayPal</p>
                        <i class="fab fa-cc-paypal text-4xl ml-2"></i>
                    </div>
                </a>
                <DIV class="flex items-center">
                    <a href='https://wa.me/message/7RJ2PATTDN64P1' class="btn btn-green btn-block flex justify-between mt-4"> Comprar mediante Transferencia Bancaria</a>
                </DIV>
            </div>
 
            <div class="card my-8 mx-12 p-4 text-sm text-blue-300">Los pagos ejecutados mediante la pasarela de Pago 'Paypal' depositan en ellos la responsabilidad de su ejecución y aprobación.
                <a href="" class="text-red-300 font-bold">Términos y condiciones</a>
            </div>
        </div>
    </div>
</x-app-layout>