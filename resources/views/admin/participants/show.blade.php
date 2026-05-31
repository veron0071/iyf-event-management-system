<x-app-layout>

<div class="min-h-screen bg-gray-50">

```
<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-gray-900">
                Participant Detail
            </h1>

            <p class="text-gray-500">
                {{ $participant->registration_code }}
            </p>

        </div>

        <a
            href="/admin/participants"
            class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900"
        >
            Back
        </a>

    </div>

    <div class="grid lg:grid-cols-3 gap-6">

        <div class="lg:col-span-2">

            <div class="bg-white rounded-xl shadow p-6">

                <h2 class="text-xl font-semibold mb-6">
                    Participant Information
                </h2>

                <div class="grid md:grid-cols-2 gap-4">

                    <div>
                        <div class="text-gray-500 text-sm">
                            Full Name
                        </div>

                        <div class="font-semibold">
                            {{ $participant->name }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            Email
                        </div>

                        <div class="font-semibold">
                            {{ $participant->email }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            Phone
                        </div>

                        <div class="font-semibold">
                            {{ $participant->phone }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            Gender
                        </div>

                        <div class="font-semibold">
                            {{ ucfirst($participant->gender) }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            Birth Date
                        </div>

                        <div class="font-semibold">
                            {{ $participant->birth_date }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            City
                        </div>

                        <div class="font-semibold">
                            {{ $participant->city }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            Emergency Contact
                        </div>

                        <div class="font-semibold">
                            {{ $participant->emergency_contact_name }}
                        </div>
                    </div>

                    <div>
                        <div class="text-gray-500 text-sm">
                            Emergency Phone
                        </div>

                        <div class="font-semibold">
                            {{ $participant->emergency_contact_phone }}
                        </div>
                    </div>

                </div>

                <hr class="my-6">

                <div>

                    <div class="text-gray-500 text-sm mb-2">
                        Medical Notes
                    </div>

                    <div>
                        {{ $participant->medical_notes ?: '-' }}
                    </div>

                </div>

            </div>

        </div>

        <div>

            <div class="bg-white rounded-xl shadow p-6">

                <h2 class="text-xl font-semibold mb-4">
                    Registration Status
                </h2>

                <div class="space-y-4">

                    <div>

                        <div class="text-gray-500 text-sm">
                            Payment Status
                        </div>

                        @if($participant->payment_status == 'paid')

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                                PAID
                            </span>

                        @else

                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">
                                PENDING
                            </span>

                        @endif

                    </div>

                    <div>

                        <div class="text-gray-500 text-sm">
                            Check In Status
                        </div>

                        @if($participant->checkin_status)

                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                CHECKED IN
                            </span>

                        @else

                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium">
                                NOT CHECKED IN
                            </span>

                        @endif

                    </div>

                    @if($participant->paid_at)

                        <div>

                            <div class="text-gray-500 text-sm">
                                Paid At
                            </div>

                            <div class="font-medium">
                                {{ $participant->paid_at }}
                            </div>

                        </div>

                    @endif

                    @if($participant->checkin_at)

                        <div>

                            <div class="text-gray-500 text-sm">
                                Check In At
                            </div>

                            <div class="font-medium">
                                {{ $participant->checkin_at }}
                            </div>

                        </div>

                    @endif

                </div>

                @if($participant->payment_status == 'pending')

                    <form
                        action="/admin/participants/{{ $participant->id }}/verify-payment"
                        method="POST"
                        class="mt-6"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg"
                        >
                            Verify Payment
                        </button>

                    </form>

                @endif

            </div>

            <div class="bg-white rounded-xl shadow p-6 mt-6 text-center">

                <h2 class="text-xl font-semibold mb-4">
                    QR Code
                </h2>

                <div class="flex justify-center">

                    {!! QrCode::size(220)->generate($participant->portal_token) !!}

                </div>

                <div class="mt-4 text-xs text-gray-500 break-all">
                    {{ $participant->portal_token }}
                </div>

            </div>

        </div>

    </div>

</div>
```

</div>

</x-app-layout>
