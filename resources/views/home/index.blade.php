<x-layouts.landing>
    <section id="jumbotron" class="w-full min-h-[calc(100vh-76px)] flex flex-col justify-end overflow-hidden">
        <x-atoms.wrapper>
            <x-row>
                <x-col :col-md="6">
                    <div class="flex flex-col justify-center min-h-full py-[80px]">
                        <h1 class="text-5xl font-bold capitalize leading-[1.2]">
                            Aplikasi untuk kisah cinta anak bangsa
                        </h1>

                        <p class="text-lg text-gray-500 mt-5 font-semibold">
                            Bucin bukan sekadar aplikasi kencan biasa. Bucin adalah penjalin hubungan, penyemangat hati,
                            dan
                            pemberi dukungan dalam pencarian cinta sejati. Bucin percaya cinta adalah bahasa universal
                            yang menghubungkan kita sebagai anak bangsa, dan setiap sudut negara ini memiliki kisah
                            cinta tak terhitung.
                        </p>

                        <div class="flex mt-6">
                            <img class="h-[35px] mr-2" src="{{ asset('/images/playstore.png') }}">
                            <img class="h-[35px]" src="{{ asset('/images/appstore.png') }}">
                        </div>
                    </div>
                </x-col>

                <x-col :col-md="6">
                    <div class="flex justify-center min-h-full items-end overflow-x-hidden">
                        <img src="{{ asset('/images/home.png') }}" alt="Home"
                            class="w-[80%] sm:w-[75%] md:w-[70%] lg:w-[55%] border-[10px] border-gray-300 rounded-t-3xl border-b-0 shadow-lg md:shadow-2xl">
                    </div>
                </x-col>
            </x-row>
        </x-atoms.wrapper>
    </section>

    <section id="ai" class="w-full min-h-screen flex flex-col justify-end overflow-hidden bg-gray-100 border-y">
        <x-atoms.wrapper>
            <x-row class="flex-col-reverse md:flex-row">
                <x-col :col-md="6">
                    <div class="flex justify-center min-h-full items-end overflow-x-hidden">
                        <img src="{{ asset('/images/profile.png') }}" alt="Home"
                            class="w-[80%] sm:w-[75%] md:w-[70%] lg:w-[55%] border-[10px] border-gray-300 rounded-t-3xl border-b-0 shadow-lg md:shadow-2xl">
                    </div>
                </x-col>

                <x-col :col-md="6">
                    <div class="flex flex-col justify-center min-h-full py-[80px]">
                        <h2 class="text-4xl font-bold capitalize leading-[1.3]">
                            Menggunakan A.I untuk memastikan
                            keaslian pasangan
                        </h2>

                        <p class="text-lg text-gray-500 mt-5 font-semibold">
                            Bucin menggunakan kecerdasan buatan (A.I) untuk memastikan keaslian pasangan Anda, sehingga
                            Anda dapat berinteraksi dengan orang yang sebenarnya. Setiap foto yang diunggah akan
                            dianalisis secara otomatis oleh A.I. Ini adalah langkah Bucin untuk memberikan pengalaman
                            kencan yang aman dan terpercaya, serta menjaga kejujuran dalam mencari cinta sejati.
                        </p>
                    </div>
                </x-col>


            </x-row>
        </x-atoms.wrapper>
    </section>

    <section id="cinlok" class="w-full min-h-screen flex flex-col justify-end overflow-hidden">
        <x-atoms.wrapper>
            <x-row class="">
                <x-col :col-md="6">
                    <div class="flex flex-col justify-center min-h-full py-[80px]">
                        <h2 class="text-4xl font-bold capitalize leading-[1.3]">
                            Cari pasangan disekitar kamu dengan mudah
                        </h2>

                        <p class="text-lg text-gray-500 mt-5 font-semibold">
                            Udah pernah mendengar tentang 'Cinlok' (Cinta Lokasi)? Sekarang, di Bucin, kamu bisa mencari
                            'Cinlok' kamu sendiri. Temukan seseorang yang cocok denganmu dan bagi minat serta
                            kebahagiaan bersama. Di sini, kita menghadirkan peluang untuk menemukan cinta sejati,
                            seperti dalam 'Cinlok' (Cinta Lokasi) yang selalu kamu idamkan.
                        </p>
                    </div>
                </x-col>

                <x-col :col-md="6">
                    <div class="flex justify-center min-h-full items-end overflow-x-hidden">
                        <img src="{{ asset('/images/cinlok.png') }}" alt="Home"
                            class="w-[80%] sm:w-[75%] md:w-[70%] lg:w-[55%] border-[10px] border-gray-300 rounded-t-3xl border-b-0 shadow-lg md:shadow-2xl">
                    </div>
                </x-col>

            </x-row>
        </x-atoms.wrapper>
    </section>


    <section id="blinddate" class="w-full min-h-screen flex flex-col justify-end overflow-hidden bg-gray-100 border-y">
        <x-atoms.wrapper>
            <x-row class="flex-col-reverse md:flex-row">
                <x-col :col-md="6">
                    <div class="flex justify-center min-h-full items-end overflow-x-hidden">
                        <img src="{{ asset('/images/blinddate.png') }}" alt="Home"
                            class="w-[80%] sm:w-[75%] md:w-[70%] lg:w-[55%] border-[10px] border-gray-300 rounded-t-3xl border-b-0 shadow-lg md:shadow-2xl">
                    </div>
                </x-col>

                <x-col :col-md="6">
                    <div class="flex flex-col justify-center min-h-full py-[80px]">
                        <h2 class="text-4xl font-bold capitalize leading-[1.3]">
                            Cari pasangan yang tidak memandang fisik
                        </h2>

                        <p class="text-lg text-gray-500 mt-5 font-semibold">
                            Bucin memperkenalkan fitur Blind Date yang memungkinkan Anda untuk berkenalan tanpa melihat
                            penampilan fisik. Ini adalah kesempatan unik untuk membangun hubungan berdasarkan
                            kepribadian, minat, dan nilai-nilai bersama. Bucin percaya bahwa cinta sejati dapat
                            ditemukan tanpa terpaku pada penampilan fisik. Jadi, jika Anda mencari pengalaman kencan
                            yang lebih dalam dan berarti, cobalah fitur Blind Date.
                        </p>
                    </div>
                </x-col>


            </x-row>
        </x-atoms.wrapper>
    </section>

    <section id="prioritas" class="w-full min-h-screen flex flex-col justify-end overflow-hidden">
        <x-atoms.wrapper>
            <x-row class="">
                <x-col :col-md="6">
                    <div class="flex flex-col justify-center min-h-full py-[80px]">
                        <h2 class="text-4xl font-bold capitalize leading-[1.3]">
                            Urutkan Prioritas Calon Pasangan
                        </h2>

                        <p class="text-lg text-gray-500 mt-5 font-semibold">
                            Bucin memberi Anda kendali penuh untuk mengatur prioritas Anda dalam pencarian
                            cinta. Dengan fitur ini, Anda dapat menentukan apa yang paling penting bagi Anda dalam
                            seorang pasangan. Apakah itu kesamaan minat, nilai-nilai yang cocok, atau faktor lainnya,
                            Anda dapat mengatur prioritas sesuai keinginan Anda. Bucin percaya bahwa cinta sejati adalah
                            tentang menemukan seseorang yang benar-benar sesuai dengan apa yang Anda cari, dan fitur
                            Mengatur Prioritas akan membantu Anda mencapainya dengan lebih mudah.
                        </p>
                    </div>
                </x-col>

                <x-col :col-md="6">
                    <div class="flex justify-center min-h-full items-end overflow-x-hidden">
                        <img src="{{ asset('/images/priority.png') }}" alt="Home"
                            class="w-[80%] sm:w-[75%] md:w-[70%] lg:w-[55%] border-[10px] border-gray-300 rounded-t-3xl border-b-0 shadow-lg md:shadow-2xl">
                    </div>
                </x-col>

            </x-row>
        </x-atoms.wrapper>
    </section>
</x-layouts.landing>
