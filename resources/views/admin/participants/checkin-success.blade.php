<x-app-layout>

<div class="py-12">

    <div class="max-w-4xl mx-auto">

        <div class="bg-white p-8 rounded shadow">

            <h1 class="text-3xl font-bold text-green-600">

                Check-In Success

            </h1>

            <p class="mt-4">

                {{ $participant->name }}

            </p>

            <p>

                {{ $participant->registration_code }}

            </p>

        </div>

    </div>

</div>

</x-app-layout>