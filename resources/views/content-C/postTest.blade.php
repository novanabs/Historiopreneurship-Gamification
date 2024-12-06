@extends('layouts.main')

@section('container-content')

<h2>Post Test C. KWU dan Kepariwisataan</h2>
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
            question: "Siapakah pendiri Kesultanan Banjar?",
            options: ["Sultan Adam", "Sultan Suriansyah", "Pangeran Antasari", "Pangeran Hidayatullah"],
            correct: 1,
            explanation: "Sultan Suriansyah adalah pendiri Kesultanan Banjar dan raja pertama yang memeluk Islam."
        },
        {
            question: "Perang Banjar terjadi pada tahun?",
            options: ["1860-1865", "1859-1905", "1845-1862", "1870-1885"],
            correct: 1,
            explanation: "Perang Banjar dimulai pada tahun 1859 dan berlangsung hingga 1905 melawan kolonial Belanda."
        },
        {
            question: "Siapa yang memimpin Perang Banjar setelah Pangeran Antasari?",
            options: ["Sultan Adam", "Pangeran Hidayatullah", "Pangeran Diponegoro", "Sultan Suriansyah"],
            correct: 1,
            explanation: "Pangeran Hidayatullah melanjutkan kepemimpinan Perang Banjar setelah Pangeran Antasari wafat."
        },
        {
            question: "Apa nama kerajaan sebelum menjadi Kesultanan Banjar?",
            options: ["Kerajaan Tanjungpura", "Kerajaan Daha", "Kerajaan Kutai", "Kerajaan Martapura"],
            correct: 1,
            explanation: "Kerajaan Daha adalah kerajaan Hindu yang kemudian menjadi Kesultanan Banjar setelah Sultan Suriansyah memeluk Islam."
        },
        {
            question: "Pahlawan nasional dari Kalimantan Selatan adalah?",
            options: ["Pangeran Diponegoro", "Cut Nyak Dien", "Pangeran Antasari", "Sultan Hasanuddin"],
            correct: 2,
            explanation: "Pangeran Antasari adalah pahlawan nasional dari Kalimantan Selatan yang memimpin Perang Banjar."
        }
    ];

    let namaTest = "Post Test C";
    let currentQuestion = 0;
    let correctCount = 0;
</script>

@endsection