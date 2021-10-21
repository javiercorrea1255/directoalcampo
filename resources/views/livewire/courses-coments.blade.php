<div>
    <h1 class="font-bold text-xl mb-4">Comentarios del curso</h1>

    @can('enrolled', $course)
       
            <div class="flex items-start mb-4">
                <figure class="flex-shrink-0 mr-4">
                    <img class="h-10 w-10 object-cover rounded-full shadow select-none" src="{{ auth()->user()->profile_photo_url }}" alt="Dr. Gordon Emard">
                </figure>
                <div class="flex-1 bg-gray-50 rounded shadow-inner p-3">
                    <textarea wire:model="comment" rows="3" class="form-input" placeholder="Escriba una reseña del curso..."></textarea>
                    <div class="flex justify-between items-center gap-3">
                    
                        <div>
                            <button type="button" class="btn btn-blue" wire:click="store">Publicar comentario</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-8">
    @endcan


    @foreach ($course->reviews as $review)
        <div class="flex items-start mb-8">
            <figure class="flex-shrink-0 mr-4">
                <img class="h-10 w-10 object-cover rounded-full shadow select-none" src="{{ $review->user->profile_photo_url }}" alt="Dr. Gordon Emard">
            </figure>
            <div class="flex-1 bg-gray-50 rounded shadow-inner py-3 px-6">
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-sm font-bold text-gray-500">{{ $review->user->name }}</h1>
                    <span class="bg-white px-2 rounded-sm shadow-sm">
                        <svg class="inline h-4 w-4 text-yellow-400 mr-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg><b>{{ $review->rating }}</b>
                    </span>
                </div>
                <p>{{ $review->comment }}</p>
            </div>
        </div>
    @endforeach
</div>