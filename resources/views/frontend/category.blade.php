<x-frontend-layout>
    <section>
        <div class="container py-10">
            <div class="grid md:grid-cols-12 gap-6">
                <div class="md:col-span-8 space-y-5">
                    @foreach ($articles as $article)
                        <div class="grid grid-cols-3 items-center gap-5 border-rounded-md overflow-hidden">
                            <div class="col-span-1">
                                <img class="w-full h-[200px] object-cover" src="{{ asset($article->image) }}"
                                    alt="{{ $article->title }}">
                            </div>
                            <div class="col-span-2 py-4">
                                <h1 class="text-2xl">
                                    {{ $article->title }}
                                </h1>
                                <div class="limited-text">
                                    {!! $article->description !!}
                                </div>
                                <small></small>
                                <a href="">Read more..</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="md:col-span-4"></div>
            </div>
        </div>
    </section>
</x-frontend-layout>
