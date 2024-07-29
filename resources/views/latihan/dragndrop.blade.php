@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .soal {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            background-color: #fff;
            justify-content: center;
        }

        .jawaban {
            width: 200px;
            height: 150px;
            cursor: pointer;
            text-align: center;
            border: 2px solid transparent;
            transition: border-color 0.3s;
        }

        .jawaban:hover {
            border-color: #007BFF;
        }

        .jawaban img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .kotakJawaban {
            border: 2px dashed #aaa;
            padding: 20px;
            margin: 20px 0;
            min-height: 200px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            background-color: #f0f0f0;
            border-radius: 10px;
            position: relative;
            transition: background-color 0.3s;
        }

        .kotakJawaban.dragover {
            background-color: #d0ffd0;
        }

        .result {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #007BFF;
            color: white;
        }

        .reset-button {
            background-color: #DC3545;
            color: white;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .modal .ok-button {
            background-color: #28A745;
            color: white;
        }

        .modal .cancel-button {
            background-color: #DC3545;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Manakah 5 objek wisata yang ada di Kalimantan Selatan</h1>
        <div class="soal">
            <div class="jawaban" draggable="true" id="jawaban1" data-correct="true">
                <img src="img/1.jpg" alt="Gambar 1">
            </div>
            <div class="jawaban" draggable="true" id="jawaban2" data-correct="true">
                <img src="img/2.jpg" alt="Gambar 2">
            </div>
            <div class="jawaban" draggable="true" id="jawaban3" data-correct="true">
                <img src="img/3.jpg" alt="Gambar 3">
            </div>
            <div class="jawaban" draggable="true" id="jawaban4" data-correct="true">
                <img src="img/4.jpg" alt="Gambar 4">
            </div>
            <div class="jawaban" draggable="true" id="jawaban5" data-correct="true">
                <img src="img/5.jpg" alt="Gambar 5">
            </div>
            <div class="jawaban" draggable="true" id="jawaban6" data-correct="false">
                <img src="img/6.jpg" alt="Gambar 6">
            </div>
            <div class="jawaban" draggable="true" id="jawaban7" data-correct="false">
                <img src="img/7.jpeg" alt="Gambar 7">
            </div>
            <div class="jawaban" draggable="true" id="jawaban8" data-correct="false">
                <img src="img/8.jpeg" alt="Gambar 8">
            </div>
            <div class="jawaban" draggable="true" id="jawaban9" data-correct="false">
                <img src="img/9.jpeg" alt="Gambar 9">
            </div>
            <div class="jawaban" draggable="true" id="jawaban10" data-correct="false">
                <img src="img/10.jpg" alt="Gambar 10">
            </div>
        </div>

        <div class="kotakJawaban" id="kotakJawaban"></div>

        <div class="button-container">
            <button class="submit-button" onclick="checkResults()">Submit</button>
            <button class="reset-button" onclick="resetGame()">Reset</button>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="modal-text"></p>
            <button class="ok-button" onclick="closeModal()">OK</button>
        </div>
    </div>

    <!-- Reset Modal -->
    <div id="resetModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeResetModal()">&times;</span>
            <p>Apakah Anda yakin ingin mereset permainan?</p>
            <button class="ok-button" onclick="confirmReset()">Ya</button>
            <button class="cancel-button" onclick="closeResetModal()">Tidak</button>
        </div>
    </div>

    <script>
        const jawabanElements = document.querySelectorAll('.jawaban');
        const kotakJawaban = document.getElementById('kotakJawaban');
        const modal = document.getElementById('myModal');
        const modalText = document.getElementById('modal-text');
        const resetModal = document.getElementById('resetModal');
        let correctAnswers = 0;
        let totalAnswers = 0;

        jawabanElements.forEach(jawaban => {
            jawaban.addEventListener('dragstart', (e) => {
                e.dataTransfer.setData('text/plain', jawaban.id);
            });
        });

        kotakJawaban.addEventListener('dragover', (e) => {
            e.preventDefault();
            kotakJawaban.classList.add('dragover');
        });

        kotakJawaban.addEventListener('dragleave', () => {
            kotakJawaban.classList.remove('dragover');
        });

        kotakJawaban.addEventListener('drop', (e) => {
            e.preventDefault();
            kotakJawaban.classList.remove('dragover');

            const jawabanId = e.dataTransfer.getData('text/plain');
            const jawabanElement = document.getElementById(jawabanId);
            const isCorrect = jawabanElement.dataset.correct === 'true';

            if (kotakJawaban.childElementCount >= 5) {
                showModal('Anda hanya bisa menaruh 5 jawaban.');
                return;
            }

            kotakJawaban.appendChild(jawabanElement);
            jawabanElement.draggable = false;

            if (isCorrect) {
                correctAnswers++;
            }
            totalAnswers++;
        });

        function checkResults() {
            showModal(`Skor Anda: ${correctAnswers} dari 5`);
        }

        function resetGame() {
            resetModal.style.display = "block";
        }

        function confirmReset() {
            resetModal.style.display = "none";
            // Reset game variables
            correctAnswers = 0;
            totalAnswers = 0;

            // Reset kotakJawaban
            kotakJawaban.innerHTML = '';
            kotakJawaban.style.backgroundColor = '#f0f0f0';

            // Enable dragging for all jawaban elements
            jawabanElements.forEach(jawaban => {
                jawaban.draggable = true;
                document.querySelector('.soal').appendChild(jawaban);
            });
        }

        function showModal(message) {
            modalText.innerText = message;
            modal.style.display = "block";
        }

        function closeModal() {
            modal.style.display = "none";
        }

        function closeResetModal() {
            resetModal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == resetModal) {
                resetModal.style.display = "none";
            }
        }
    </script>
</body>

</html>
@endsection