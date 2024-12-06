@extends('layouts.main')

@section('container-content')

<h2>Pre Test B. Kesejarahan</h2>
<div class="shadow bg-light rounded p-3" style="height: 40vh; ; overflow-y: auto;" id="question-container">
    <div class="question mb-3" id="questionText"></div>
    <div class="options mb-3 ms-2 form-check" id="optionsContainer"></div>
    <div class="feedback" id="feedbackContainer"></div>
    <button class="btn btn-success mt-3" id="checkBtn" onclick="checkAnswer()">Periksa</button>
        
    {{-- <form id="preTestForm" action="{{ route('simpanNilaiPretest') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
        <!-- Ganti dengan email pengguna -->
        <input type="hidden" name="nilai_akhir" id="nilaiAkhir">
        <input type="hidden" name="aspek" value="pre_test_kesejarahan">
    </form> --}}
</div>
<script>
    // Script Pre Test
    const questions = [
        {
            question: "Museum Wasaka terletak di kota mana?",
            options: ["Balikpapapan", "Samarinda", "Banjarmasin", "Palangka Raya"],
            correct: 2,
            explanation: ""
        },
        {
            question: "Arti dari “Waja Sampai Ka Puting” dalam Bahasa Banjar adalah?",
            options: ["Teguh sampai akhir", "Sejarah sampai selamanya", "Bersatu Menuju Kemenangan", "Berjuan tanpa henti"],
            correct: 0,
            explanation: ""
        },
        {
            question: "Tugu 9 November Banjarmasin memiliki bentuk seperti apa?",
            options: ["Monumen berbentuk lingkaran", "Menara yang menjulang tinggi", "Pahlawan sedang memegang bendera", "Pahlawan dengan pedang terhunus"],
            correct: 1,
            explanation: ""
        },
        {
            question: "Apa nama kerajaan sebelum menjadi Kesultanan Banjar?",
            options: ["Kerajaan Tanjungpura", "Kerajaan Daha", "Kerajaan Kutai", "Kerajaan Martapura"],
            correct: 1,
            explanation: ""
        },
        {
            question: "Apa nama masjid terbesar di Banjarmasin yang menjadi ikon kota?",
            options: ["Masjid Al-Falah", "Masjid Agung Al-Karomah", "Masjid Sabilal Muhtadin", "Masjid Jami Banjarmasin"],
            correct: 2,
            explanation: ""
        }
    ];

    let namaTest = "Pre Test B";
    let currentQuestion = 0;
    let correctCount = 0;
</script>

@endsection