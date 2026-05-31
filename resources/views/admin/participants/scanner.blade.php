<x-app-layout>

<div class="py-12">

    <div class="max-w-4xl mx-auto">

        <h1 class="text-3xl font-bold mb-6">
            QR Check-In Scanner
        </h1>

        <div
            id="reader"
            class="bg-white p-4 rounded shadow"
        ></div>

        <div
            id="result"
            class="mt-6 text-xl font-bold"
        ></div>

    </div>

</div>

<script
src="https://unpkg.com/html5-qrcode">
</script>

<script>

function onScanSuccess(decodedText)
{
    fetch(
        '/admin/scanner/checkin',
        {
            method: 'POST',

            headers: {

                'Content-Type':
                'application/json',

                'X-CSRF-TOKEN':
                '{{ csrf_token() }}'
            },

            body: JSON.stringify({

                token: decodedText

            })
        }
    )
    .then(response => response.json())
    .then(data => {

        let result =
        document.getElementById(
            'result'
        );

        if(data.success)
        {
            result.innerHTML =
            `
            <div class="text-green-600">

            ✓ Check-In Success

            <br>

            ${data.name}

            <br>

            ${data.code}

            </div>
            `;
        }
        else
        {
            result.innerHTML =
            `
            <div class="text-red-600">

            ${data.message}

            </div>
            `;
        }

    });
}

const html5QrCode =
new Html5Qrcode(
    "reader"
);

Html5Qrcode.getCameras()
.then(devices => {

    if(devices.length)
    {
        html5QrCode.start(

            devices[0].id,

            {
                fps: 10,
                qrbox: 250
            },

            onScanSuccess

        );
    }

});

</script>

</x-app-layout>