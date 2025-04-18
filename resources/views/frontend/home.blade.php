<x-frontend-layout :co="$company">

    <section>
        <div class="container py-10">
            <div class="marquee-container-news">
                <!-- Diagonal Box -->
                <div class="diagonal-box">
                    <div class="diagonal-text">
                        <div class="hello-text">ताजा</div>
                        <div class="world-text">खवर</div>
                    </div>
                </div>

                <!-- Marquee Content (Unchanged) -->
                <div class="marquee-content-news">

                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-bullhorn"></i>
                        <a href="http://127.0.0.1:8000/article/25"
                            class="underline-grow branch-item py-1 px-2 bg-hover-secondary">
                            <span class="branch-text">{{ $latest_article->title }}

                            </span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="grid md:grid-cols-12 gap-8">
                <div class="md:col-span-8">
                    <a href="{{ route('article', $latest_article->id) }}">
                        @if ($latest_article)
                            <img class=" w-full object-cover" src="{{ asset($latest_article->image) }}"
                                alt="{{ $latest_article->title }}">
                        @else
                            <p>No latest article found.</p>
                        @endif
                        <h1 class="text-2xl font-bold py-2">
                            {{ $latest_article->title }}
                        </h1>
                        <div class="limited-text">
                            {!! $latest_article->description !!}

                            <!-- ShareThis BEGIN -->
                            <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                        </div>
                    </a>
                </div>

                <div class="md:col-span-4 ">
                    <div>
                        <h1 class="text-3xl bg-light-primary py-2 px-4 border-l-[5px] border-[var(--primary)] primary">
                            ट्रेन्डिङ
                            न्यूज</h1>
                        @foreach ($trending_articles as $article)
                            <x-article-card :article="$article" />
                        @endforeach

                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container py-10 space-y-10">
            @foreach ($categories as $category)
                @if (count($category->articles) > 0)
                    <div>
                        <div>
                            <h1 class="text-2xl"> {{ $category->nep_title }}</h1>
                            <img class="h-[24px]"
                                src="https://freepngimg.com/thumb/graphic/53371-4-abstract-lines-free-transparent-image-hd.png"
                                alt="">
                        </div>
                        <div class="grid grid-cols-3 gap-3">
                            @foreach ($category->articles as $article)
                                <x-article-card :article="$article" />
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <img class="w-full h-[240px] py-4 px-20" src="https://www.jawaaf.com/storage/01JJ6H6TARD078P4P5ZFMQSY2A.gif"
            alt="">
    </section>
</x-frontend-layout>
