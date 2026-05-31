<x-app-layout>

<div class="min-h-screen bg-gray-50">

```
<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-gray-900">
                Participants
            </h1>

            <p class="text-gray-500 mt-1">
                Manage all registered participants
            </p>

        </div>

        <a
            href="/admin"
            class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900"
        >
            Dashboard
        </a>

    </div>

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-4 text-left font-semibold">
                        Code
                    </th>

                    <th class="p-4 text-left font-semibold">
                        Name
                    </th>

                    <th class="p-4 text-left font-semibold">
                        Email
                    </th>

                    <th class="p-4 text-left font-semibold">
                        Phone
                    </th>

                    <th class="p-4 text-left font-semibold">
                        Payment
                    </th>

                    <th class="p-4 text-left font-semibold">
                        Check In
                    </th>

                    <th class="p-4 text-left font-semibold">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($participants as $participant)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4">
                            {{ $participant->registration_code }}
                        </td>

                        <td class="p-4 font-medium">
                            {{ $participant->name }}
                        </td>

                        <td class="p-4">
                            {{ $participant->email }}
                        </td>

                        <td class="p-4">
                            {{ $participant->phone }}
                        </td>

                        <td class="p-4">

                            @if($participant->payment_status == 'paid')

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                                    PAID
                                </span>

                            @else

                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">
                                    PENDING
                                </span>

                            @endif

                        </td>

                        <td class="p-4">

                            @if($participant->checkin_status)

                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                    CHECKED IN
                                </span>

                            @else

                                <span class="text-gray-400">
                                    -
                                </span>

                            @endif

                        </td>

                        <td class="p-4">

                            <a
                                href="/admin/participants/{{ $participant->id }}"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="7"
                            class="p-8 text-center text-gray-500"
                        >
                            No participants found.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $participants->links() }}

    </div>

</div>
```

</div>

</x-app-layout>
