<!-- ====== Navbar Section Start -->
<header x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 flex h-24 w-full items-center bg-white shadow-md dark:bg-slate-900">
    <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full pr-4">
                <a href="/" class="flex w-full items-center py-2">
                    <img src="{{ url('/img/logo.png') }}" alt="logo"
                        class="inline-block w-[48px] dark:hidden lg:w-[64px]" />
                    <img src="{{ url('/img/logo-white.png') }}" alt="logo"
                        class="hidden w-[48px] dark:inline-block lg:w-[64px]" />
                    <span class="text-xl font-bold text-[#0c7187] dark:text-white xl:text-2xl">TheCodeholic</span>
                </a>
            </div>
            <div class="flex w-full items-center justify-end px-4">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                        x-bind:class="navbarOpen &&'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen &&'hidden' " id="navbarCollapse"
                        class="absolute right-0 top-full z-50 w-full rounded-lg bg-white py-5 px-6 shadow dark:bg-slate-900 dark:text-gray-300 lg:static lg:right-4 lg:block lg:w-full lg:max-w-full lg:px-0 lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}
                                </x-layout.navbar-item>
                            @endforeach

                            <div class="relative top-1 ml-0 lg:ml-10 xl:ml-16">
                                <div class="g-ytsubscribe" data-channelid="UCFzDHCJhi-Y0pldGc0kJ0ZA"
                                    data-layout="default" data-count="default"></div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
