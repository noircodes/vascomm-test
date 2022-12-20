<body>
    <div>
        <div class="text-center">
            <h1>Riwayat Pekerjaan</h1>
        </div>
        <h3>{{ $satu }}</h3>
        @foreach ($jobdesk1 as $jd1)
            <ul>
                <li>{{ $jd1 }}</li>
            </ul>
        @endforeach
        <h3>{{ $dua }}</h3>
        @foreach ($jobdesk2 as $jd2)
            <ul>
                <li>{{ $jd2 }}</li>
            </ul>
        @endforeach
        <h3>{{ $tiga }}</h3>
        @foreach ($jobdesk3 as $jd3)
            <ul>
                <li>{{ $jd3 }}</li>
            </ul>
        @endforeach
    </div>
</body>
