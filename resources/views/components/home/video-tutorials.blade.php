<!-- ====== Cards Section Start -->
<section id="tutorials" class="pt-24 pb-16 dark:bg-slate-800">
    <div class="container">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    <h2 class="text-dark mb-4 text-3xl font-bold dark:text-gray-300">
                        Video Tutorials
                    </h2>
                    <p class="text-body-color text-base">
                        You learn most by building projects. Go ahead and build something right now.
                    </p>
                </div>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
            @foreach ($videoTutorials as $video)
                <x-video-tutorial-item :video-id="$video['videoId']" :title="$video['title']"
                    :description="$video['description']"></x-video-tutorial-item>
            @endforeach
        </div>
        <div class="flex justify-center">
            <x-button-link href="https://youtube.com/TheCodeholic" target="_blank" class="rounded-lg">
                View All Tutorials
            </x-button-link>
        </div>
    </div>
</section>
<!-- ====== Cards Section End -->
