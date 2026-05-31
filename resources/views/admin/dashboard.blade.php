<x-app-layout>

    <div class="min-h-screen bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 py-8">

            <div class="mb-8">

                <h1 class="text-3xl font-bold text-gray-900">
                    International Yoga Festival 2026
                </h1>

                <p class="text-gray-500 mt-1">
                    Administration Dashboard
                </p>

            </div>

            <div class="grid md:grid-cols-5 gap-6">

                <div class="bg-white rounded-xl shadow p-6">

                    <div class="text-gray-500 text-sm">
                        Total Participants
                    </div>

                    <div class="text-4xl font-bold mt-2">
                        {{ $totalParticipants }}
                    </div>

                </div>

                <div class="bg-green-50 border border-green-200 rounded-xl shadow p-6">

                    <div class="text-green-700 text-sm">
                        Paid Participants
                    </div>

                    <div class="text-4xl font-bold mt-2 text-green-700">
                        {{ $paidParticipants }}
                    </div>

                </div>

                <div class="bg-yellow-50 border border-yellow-200 rounded-xl shadow p-6">

                    <div class="text-yellow-700 text-sm">
                        Pending Payment
                    </div>

                    <div class="text-4xl font-bold mt-2 text-yellow-700">
                        {{ $pendingParticipants }}
                    </div>

                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-xl shadow p-6">

                    <div class="text-blue-700 text-sm">
                        Checked In
                    </div>

                    <div class="text-4xl font-bold mt-2 text-blue-700">
                        {{ $checkinParticipants }}
                    </div>

                </div>

                <div class="bg-purple-50 border border-purple-200 rounded-xl shadow p-6">

                    <div class="text-purple-700 text-sm">
                        Revenue
                    </div>

                    <div class="text-2xl font-bold mt-2 text-purple-700">
                        Rp {{ number_format($revenue, 0, ',', '.') }}
                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>