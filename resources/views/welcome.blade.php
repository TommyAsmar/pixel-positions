<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="I'm Looking for..."
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Laravel</x-tag>
                <x-tag>Vue.js</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>Full Stack</x-tag>
                <x-tag>Remote</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Web Development</x-tag>
                <x-tag>Software Engineering</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>Cloud Computing</x-tag>
                <x-tag>Agile</x-tag>
                <x-tag>Scrum</x-tag>
                <x-tag>CI/CD</x-tag>
                <x-tag>Open Source</x-tag>
                <x-tag>Community</x-tag>
                <x-tag>Tech Jobs</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>
    </div>

</x-layout>