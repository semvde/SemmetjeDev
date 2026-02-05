<x-default-layout title="Privacy • Semmetje">
    @push('head')
        <meta name="description"
              content="Portfolio of Sem van den Ende, a full-stack developer. See how I collect and process your data.">
    @endpush

    <x-slot name="header">
        <header
            class="flex flex-col justify-center items-center bg-gradient-to-bl from-sky-900 via-transparent to-transparent h-40">
            <span>🔐 Data secured!</span>
            <h1 class="text-white max-sm:text-5xl">Privacy Policy</h1>
        </header>
    </x-slot>

    <section class="py-14">
        <div class="flex flex-col gap-10">
            <div>
                <h2 class="max-sm:text-4xl">semmetje.dev - Privacy Policy</h2>
                <i>Last updated: 05-02-2026</i>
            </div>
            <div>
                <h3>Data I collect</h3>
                <p>semmetje.dev does not automatically collect personal data. However, it is possible to send me a
                    message through the various <a href="{{ route('contact') }}"
                                                   class="text-[--color-primary] underline">contact options</a>. If you
                    choose to do so, I may collect the following data:</p>
                <ul class="list-disc list-inside">
                    <li>Name</li>
                    <li>Email address</li>
                    <li>Any information you provide in your message</li>
                </ul>
                <p class="mt-5">semmetje.dev also uses Cloudflare as a security and performance service. Cloudflare
                    may process
                    some technical information, such as:</p>
                <ul class="list-disc list-inside">
                    <li>IP address</li>
                    <li>Browser type</li>
                    <li>Request metadata</li>
                    <li>Security-related data</li>
                </ul>
                <p>More information can be found in <a href="https://www.cloudflare.com/privacypolicy/"
                                                       class="text-[--color-primary] underline" target="_blank">Cloudflare's
                        Privacy Policy</a></p>
            </div>
            <div>
                <h3>How your data is used</h3>
                <p>Any information you provide will only be used to:</p>
                <ul class="list-disc list-inside">
                    <li>Respond to your message</li>
                    <li>Maintain the security and performance of the website</li>
                </ul>
            </div>
            <div>
                <h3>Data retention</h3>
                <p>semmetje.dev and Cloudflare will retain your personal data for as long as necessary for the purposes
                    described in this privacy policy or to the extent necessary to comply with legal obligations.</p>
            </div>
            <div>
                <h3>How your data is secured</h3>
                <p>semmetje.dev takes the security of your personal data very seriously. I therefore implement
                    appropriate measures to protect your data from unauthorized access and misuse. These include:</p>
                <ul class="list-disc list-inside">
                    <li>Our servers are well-secured and regularly updated.</li>
                    <li>Access to personal data is limited to authorized personnel.</li>
                </ul>
            </div>
            <div>
                <h3>Your rights</h3>
                <p>You have the right to access, rectify, delete, and port your personal data, and to object to its
                    processing. To do so, please contact me using one of the <a href="{{ route('contact') }}"
                                                                                class="text-[--color-primary] underline">contact
                        options</a>. You can also contact me if you have any questions, comments, or complaints about
                    this privacy policy.</p>
            </div>
            <div>
                <h3>Changes to this policy</h3>
                <p>semmetje.dev reserves the right to amend this privacy policy. We will notify you of any changes by
                    publishing the new policy on semmetje.dev, which will then take effect immediately. We recommend
                    that you review this privacy policy regularly to stay informed of any changes. The date this policy
                    was last updated is listed at the top.</p>
            </div>
        </div>
    </section>
</x-default-layout>
