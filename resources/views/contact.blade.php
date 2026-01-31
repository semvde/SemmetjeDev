<x-default-layout>
    <x-slot name="header">
        <header
            class="flex flex-col justify-center items-center bg-gradient-to-bl from-sky-900 via-transparent to-transparent h-40">
            <span>📫 Get in touch!</span>
            <h1 class="text-white">Contact</h1>
        </header>
    </x-slot>

    <section class="py-14">
        <div class="flex flex-row gap-5 max-sm:flex-col-reverse">
            <div class="grid grid-cols-1 gap-5 flex-1">
                <a href="https://linkedin.com/in/semvandenende" target="_blank">
                    <div
                        class="flex items-center gap-5 text-4xl bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg overflow-hidden transition-all duration-500 hover:scale-[1.025] hover:border-sky-500 hover:shadow-sky-700 p-3">
                        <i class="fa-brands fa-square-linkedin"></i>
                        <span class="text-base">in/semvandenende</span>
                    </div>
                </a>
                <a href="https://www.instagram.com/semmetjedev" target="_blank">
                    <div
                        class="flex items-center gap-5 text-4xl bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg overflow-hidden transition-all duration-500 hover:scale-[1.025] hover:border-sky-500 hover:shadow-sky-700 p-3">
                        <i class="fa-brands fa-instagram"></i>
                        <span class="text-base">@semmetjedev</span>
                    </div>
                </a>
                <a href="mailto:contact@semmetje.dev" target="_blank">
                    <div
                        class="flex items-center gap-5 text-4xl bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg overflow-hidden transition-all duration-500 hover:scale-[1.025] hover:border-sky-500 hover:shadow-sky-700 p-3">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="text-base">contact@semmetje.dev</span>
                    </div>
                </a>
            </div>
            <div
                class="flex-1 bg-[--body-background-layered-color] border border-sky-700 shadow-md shadow-sky-900 rounded-lg p-7">
                <span class="text-sm">🗣️ Talk to me!</span>
                <h2>Send your message!</h2>
                <p>Whether you have some project ideas you would like to discuss, would like to collaborate on a project
                    or chat about Efteling, feel free to send me a message!</p>
            </div>
        </div>
    </section>
</x-default-layout>
