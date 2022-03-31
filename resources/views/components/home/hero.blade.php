{{-- Hero Section Start --}}
<div class="relative bg-white pt-[60px] pb-[110px] dark:bg-slate-800 lg:pt-[80px]">
    <div class="container">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-5/12">
                <div class="hero-content">
                    <h1
                        class="text-dark sm:text[42px] loading-snug mb-6 text-4xl font-bold dark:text-gray-200 lg:text-[40px] xl:text-[42px]">
                        My Name is Aman. <br />
                        I am <span class="rounded-md text-amber-600">Amandeep90s</span>
                    </h1>
                    <p class="mb-8 max-w-[520px] text-base">
                        I am a developer with 10+ years of experience. <br />
                        I love sharing my knowledge to others, that's my why I created a
                        <a href="https://www.youtube.com/channel/UCFzDHCJhi-Y0pldGc0kJ0ZA"
                            class="text-primary decoration-primary font-bold no-underline decoration-2 underline-offset-2 hover:underline"
                            target="_blank">YouTube Channel</a>
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                My Projects
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="text-body-color mb-4 flex items-center text-xs font-normal dark:text-gray-300">
                            Follow me on Social Media
                            <span class="bg-body-color ml-2 inline-block h-[1px] w-8"></span>
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ url('/img/me_hero.png') }}" alt="hero" class="max-w-full lg:ml-auto">
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Hero Section End --}}
