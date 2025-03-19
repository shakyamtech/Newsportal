<x-frontend-layout>
    <section>
        <div class="container py-10">
            <div class="grid md:grid-cols-12 gap-6">
                <div class="md:col-span-8 space-y-5">
                    <div>
                        <small>
                            {{ $article->views }} views
                        </small>
                    </div>
                    <h1>
                        {{ $article->title }}
                    </h1>
                    <img src="{{ asset($article->image) }}" alt="">
                    <div>
                        {!! $article->description !!}
                    </div>
                </div>
                <div class="md:col-span-4"></div>
            </div>
        </div>
    </section>
</x-frontend-layout>
