<x-frontend-layout :co="$company">

    <section>
        <div class="container py-10">
        <div class="grid grid-cols-12 gap-8">
                <div class="col-span-8">
                   <div>
                    <img class="h-[70vh] w-full object-cover" src="{{asset($latest_article->image)}}" alt="{{$latest_article->title}}">
                    <h1 class="text-2xl font-bold py-2">
                        {{$latest_article->title}}
                    </h1>
                    <div class="flex flex-wrap tra">
                        {!!$latest_article->description!!}
                    </div>
                   </div>
                </div>
            <div class="col-span-8 "></div>
            <div class="col-span-4 h-10 bg-primary"></div>
        </div>
        </div>
    </section>

</x-frontend-layout>
