<x-frontend-layout :co="$company">

    <section>
        <div class="container py-10">
        <div class="grid grid-cols-12 gap-8">
                <div class="col-span-8">
                   <div>
                    @if($latest_article)
                    <img class="h-[70vh] w-full object-cover" src="{{ asset($latest_article->image) }}" alt="{{ $latest_article->title }}">
                @else
                    <p>No latest article found.</p>
                @endif
                    <h1 class="text-2xl font-bold py-2">
                        {{$latest_article->title}}
                    </h1>
                    <div class="limited-text">
                        {!!$latest_article->description!!}
                    </div>
                   </div>
                </div>

            <div class="col-span-4 ">
                <div>
                    <h1 class="text-3xl bg-light-primary py-2 px-4 border-l-[5px] border-[var(--primary)] primary">ट्रेन्डिङ</h1>
                </div>
                <div class="grid grid-cols-12 gap-3 items-center mt-5 shadow-md rounded-md overflow-hidden">
                    <div class="col-span-4">
                        <img class="h-[80px]w-full object-cover"src="https://www.jawaaf.com/storage/01JP6RSQPCFG4HRSEB7MZF32PK.avif" alt="">
                    </div>
                    <div class="col-span-8">
                        <h1 class="limited-text">आज होली पर्व, हिमाली र पहाडी जिल्लामा हर्षोल्लासका साथ मनाइँदै</h1>
                        <small>date</small>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</x-frontend-layout>
