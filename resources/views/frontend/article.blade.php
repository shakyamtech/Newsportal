<x-frontend-layout :meta_keywords="$article->meta_keywords" meta_description="$article->meta_description">
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
                    <!-- ShareThis BEGIN -->
                    <div class="sharethis-inline-share-buttons"></div>
                    <!-- ShareThis END -->
                    <div class="fb-comments" data-href="http://127.0.0.1:8000/article/{{ $article->id }}" data-width=""
                        data-numposts="5"></div>
                </div>

                <div class="md:col-span-4">
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
