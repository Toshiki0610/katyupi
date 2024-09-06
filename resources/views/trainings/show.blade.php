@extends('layouts.app')

@section('content')
    <h1>胸のトレーニングメニュー</h1>

    <ul>
        <li>
            <h3>プッシュアップ</h3>
            <p>標準的な腕立て伏せで胸を鍛える。</p>
            <!-- タイマーの表示 -->
            <p id="timer-pushup">00:00:00</p>
            <button onclick="startTimer('pushup')">[スタート]</button>
            <button onclick="stopTimer('pushup')">[ストップ]</button>
        </li>
        <li>
            <h3>ベンチプレス</h3>
            <p>ベンチプレスで胸の筋肉を強化する。</p>
            <!-- タイマーの表示 -->
            <p id="timer-benchpress">00:00:00</p>
            <button onclick="startTimer('benchpress')">[スタート]</button>
            <button onclick="stopTimer('benchpress')">[ストップ]</button>
        </li>
        <li>
            <h3>チェストフライ</h3>
            <p>ダンベルを使用してチェストフライで胸筋を伸ばす。</p>
            <!-- タイマーの表示 -->
            <p id="timer-chestfly">00:00:00</p>
            <button onclick="startTimer('chestfly')">[スタート]</button>
            <button onclick="stopTimer('chestfly')">[ストップ]</button>
        </li>
    </ul>

    <!-- タイマー用のJavaScript -->
    <script>
        let timers = {};
        let intervals = {};

        function startTimer(exercise) {
            if (timers[exercise]) return; // 既にタイマーが動いている場合は無視
            timers[exercise] = 0;
            intervals[exercise] = setInterval(function () {
                timers[exercise]++;
                document.getElementById('timer-' + exercise).innerText = formatTime(timers[exercise]);
            }, 1000); // 1秒ごとに加算
        }

        function stopTimer(exercise) {
            clearInterval(intervals[exercise]);
            intervals[exercise] = null;
            // ここでタイムを保存する処理を後で追加できます
        }

        function formatTime(seconds) {
            const hrs = Math.floor(seconds / 3600);
            const mins = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            return `${hrs.toString().padStart(2, '0')}:${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
        }
    </script>
@endsection
