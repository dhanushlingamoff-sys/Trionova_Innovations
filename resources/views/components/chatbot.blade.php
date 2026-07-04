{{-- =========================================================
   TRIONOVA AI — PREMIUM CHATBOT UI
   ONLY HTML + CSS UPDATED
   JS FUNCTIONS REMAIN SAME
========================================================= --}}

{{-- =========================================================
   LAUNCHER
========================================================= --}}

<div class="tn-launcher-container">

    <button id="tn-launcher" onclick="TNChat.toggle()" aria-label="Open Chat">

        <div class="tn-ai-launcher">

            <div class="tn-ai-ring"></div>

            <div class="tn-ai-ring tn-ai-ring-2"></div>

            <div class="tn-ai-core">

                <video class="cyber-video" autoplay muted loop playsinline>

                    <source src="{{ asset('images/logo-animation4.webm') }}" type="video/webm">

                </video>

            </div>

        </div>

        <div class="tn-ai-label">

            <span>✨ Trionova AI</span>

        </div>

    </button>

</div>


{{-- =========================================================
   CHAT WINDOW
========================================================= --}}

<div id="tn-window" role="dialog" aria-modal="true" aria-label="Trionova AI Assistant">

    {{-- BACKGROUND FX --}}
    <div class="tn-bg-orb tn-bg-orb-1"></div>
    <div class="tn-bg-orb tn-bg-orb-2"></div>
    <div class="tn-grid"></div>

    {{-- =====================================================
       HEADER
    ===================================================== --}}

    <div class="tn-header">

        <div class="tn-header-left">

            <div class="tn-avatar tn-avatar-lg">
                T
            </div>

            <div class="tn-header-info">

                <span class="tn-header-name">
                    Trionova AI
                </span>

                <span class="tn-header-sub">
                    <i class="tn-dot tn-dot-green"></i>
                    AI Assistant · Online
                </span>

            </div>

        </div>

        <div class="tn-header-actions">

            <button onclick="TNChat.reset()" title="New conversation">

                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">

                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                    <path d="M3 3v5h5" />

                </svg>

            </button>

            <button onclick="TNChat.close()" title="Close">

                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">

                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />

                </svg>

            </button>

        </div>

    </div>


    {{-- =====================================================
       MESSAGES
    ===================================================== --}}

    <div id="tn-messages"></div>


    {{-- =====================================================
       SUGGESTIONS
    ===================================================== --}}

    <div id="tn-suggestions"></div>


    {{-- =====================================================
       INPUT
    ===================================================== --}}

    <div class="tn-input-wrap">

        <div class="tn-input-inner">

            <svg class="tn-input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">

                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />

            </svg>

            <input type="text" id="tn-input" placeholder="Ask Trionova AI anything..." autocomplete="off"
                maxlength="500"
                onkeydown="if(event.key==='Enter'&&!event.shiftKey){event.preventDefault();TNChat.send();}">

            <button id="tn-mic-btn" type="button" aria-label="Voice input">

                <i class="bi bi-mic-fill"></i>

            </button>

            <button id="tn-send-btn" onclick="TNChat.send()">

                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.5">

                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>

                </svg>

            </button>

        </div>

        <p class="tn-footer-note">

            Powered by Trionova AI ·

            <a href="https://trionova.in/contact" target="_blank">
                Talk to a human
            </a>

        </p>

    </div>

</div>


{{-- ============================================================
     JAVASCRIPT
     ============================================================ --}}
<script>
    (function() {
        'use strict';

        const ROUTE = '{{ route('chatbot.chat') }}';
        const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        // GLOBAL SESSION ID
        function generateUUID() {
            if (window.crypto && crypto.randomUUID) {
                return crypto.randomUUID();
            }
            return 'tn-' + Date.now() + '-' + Math.random().toString(16).slice(2);
        }

        let sessionId = localStorage.getItem("tn_session_id");

        if (!sessionId) {
            sessionId = generateUUID();
            localStorage.setItem("tn_session_id", sessionId);
        }

        const INITIAL_SUGGESTIONS = [
            'What services do you offer?',
            'Tell me about mobile app development',
            'What is your pricing?',
        ];
        const FOLLOWUP_SUGGESTIONS = [
            'How do I get started?',
            'Can I see past projects?',
            'Contact your team',
        ];

        let history = []; // [{role, content}, ...]
        let isBusy = false;

        /* ── DOM refs ── */
        const $win = () => document.getElementById('tn-window');
        const $bubble = () => document.getElementById('tn-bubble');
        const $msgs = () => document.getElementById('tn-messages');
        const $sugg = () => document.getElementById('tn-suggestions');
        const $input = () => document.getElementById('tn-input');
        const $send = () => document.getElementById('tn-send-btn');

        const $container = () => document.querySelector(".tn-launcher-container");

        /* ── Public API ── */
        window.TNChat = {
            toggle() {
                $win().classList.contains('tn-open') ? this.close() : this.open();
                $container().style.display = "none";
            },
            open() {
                $win().classList.add('tn-open');
                $container().style.display = "none";
                if (history.length === 0) {
                    _addBot(
                        "Hello! 👋 Welcome to <strong>Trionova Technologies</strong>.<br>How can I help you today? Whether it's mobile apps, web development, AI solutions or anything else — I'm here for you."
                    );
                    _showSugg(INITIAL_SUGGESTIONS);
                }
                setTimeout(() => $input()?.focus(), 350);
            },
            close() {
                $win().classList.remove('tn-open');
                $container().style.display = "block";
            },
            reset() {
                history = [];
                $msgs().innerHTML = '';
                $sugg().innerHTML = '';
                _addBot("Chat reset! How can I help you? 😊");
                _showSugg(INITIAL_SUGGESTIONS);
            },
            send(text) {
                _send(text);
            },
        };


        /* ── Internal helpers ── */
        function _addBot(html) {
            const row = document.createElement('div');
            row.className = 'tn-msg-row tn-bot';
            row.innerHTML = `
            <div class="tn-avatar">T</div>
            <div class="tn-msg-body">
                <span class="tn-msg-name">AI Assistant</span>
                <div class="tn-msg-bubble">${html}</div>
            </div>`;
            $msgs().appendChild(row);
            setTimeout(() => {
                _scroll();
            }, 80);
            // Only push plain text to history
            history.push({
                role: 'assistant',
                content: html.replace(/<[^>]+>/g, '')
            });
        }

        function _addUser(text) {
            const row = document.createElement('div');
            row.className = 'tn-msg-row tn-user';
            row.innerHTML = `<div class="tn-msg-bubble">${_esc(text)}</div>`;
            $msgs().appendChild(row);
            setTimeout(() => {
                _scroll();
            }, 30);
            history.push({
                role: 'user',
                content: text
            });
        }

        function _showTyping() {
            const row = document.createElement('div');
            row.className = 'tn-msg-row tn-bot';
            row.id = 'tn-typing';
            row.innerHTML =
                `<div class="tn-avatar">T</div><div class="tn-msg-bubble tn-typing"><span></span><span></span><span></span></div>`;
            $msgs().appendChild(row);
            setTimeout(() => {
                _scroll();
            }, 30);
        }

        function _removeTyping() {
            document.getElementById('tn-typing')?.remove();
        }

        function _showSugg(items) {
            const el = $sugg();
            el.innerHTML = '';
            items.forEach(text => {
                const btn = document.createElement('button');
                btn.className = 'tn-sugg';
                btn.textContent = text;
                btn.onclick = () => {
                    el.innerHTML = '';
                    _send(text);
                };
                el.appendChild(btn);
            });
        }

        function _scroll(force = false) {

            requestAnimationFrame(() => {

                const el = $msgs();

                if (!el) return;

                const extraBottomSpace = 0;

                el.scrollTo({
                    top: el.scrollHeight + extraBottomSpace,
                    behavior: force ? 'auto' : 'smooth'
                });

            });

        }

        function _esc(str) {
            return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
        }

        function _setBusy(state) {
            isBusy = state;
            const btn = $send();
            const inp = $input();
            if (btn) btn.disabled = state;
            if (inp) inp.disabled = state;
        }

        async function _send(overrideText) {
            if (isBusy) return;
            const inp = $input();
            const text = (overrideText || inp.value).trim();
            if (!text) return;

            inp.value = '';
            $sugg().innerHTML = '';
            _addUser(text);
            _setBusy(true);
            _showTyping();

            try {
                const res = await fetch(ROUTE, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        message: text,
                        session_id: sessionId
                    }),
                });

                _removeTyping();

                if (!res.ok) throw new Error('Network response was not ok');

                const data = await res.json();

                if (!data.reply) throw new Error("Invalid response");

                // Convert markdown-like **bold** and newlines to HTML
                let reply = data.reply
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
                // .replace(/\n/g, '<br>');

                _addBot(reply);
                _showSugg(FOLLOWUP_SUGGESTIONS);

            } catch (err) {
                _removeTyping();
                _addBot(
                    "Sorry, I'm having trouble right now. Please try again or <a href='https://trionova.in/contact' target='_blank'>contact us directly</a>. 🙏"
                );
            } finally {
                _setBusy(false);
                setTimeout(() => $input()?.focus(), 100);
            }
        }

    })();
</script>

<script>
    const CSRF = document.querySelector('meta[name="csrf-token"]')
        ?.getAttribute('content');
</script>

<script>
    document.addEventListener('submit', async function(e) {

        if (e.target.id !== 'tnLeadForm') return;

        e.preventDefault();

        const form = e.target;
        const btn = form.querySelector('button');

        btn.disabled = true;
        btn.innerText = 'Sending...';

        const formData = new FormData(form);

        try {

            const res = await fetch('{{ route('contact.submit') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': CSRF,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: formData
            });

            const data = await res.json();

            if (!res.ok) {

                console.log(data);

                alert(data.message || 'Validation failed');

                btn.disabled = false;
                btn.innerText = 'Submit';

                return;
            }

            form.reset();

            form.querySelector('.tn-chat-success').style.display = 'block';

            btn.innerText = 'Submitted';

        } catch (err) {

            console.log(err);

            btn.disabled = false;
            btn.innerText = 'Submit';

            alert('Something went wrong.');

        }

    });
</script>

<script>
    (() => {

        const micBtn = document.getElementById('tn-mic-btn');
        const input = document.getElementById('tn-input');

        if (!micBtn || !input) return;

        let mediaRecorder = null;
        let audioChunks = [];
        let recording = false;

        let audioContext = null;
        let analyser = null;
        let stream = null;
        let source = null;

        let silenceStart = null;

        const SILENCE_TIME = 2000;
        const THRESHOLD = 0.02;

        async function startRecording() {

            // ✅ ALWAYS reset state before start
            audioChunks = [];
            silenceStart = null;

            stream = await navigator.mediaDevices.getUserMedia({
                audio: true
            });

            mediaRecorder = new MediaRecorder(stream);
            mediaRecorder.start();

            recording = true;
            micBtn.classList.add('tn-mic-active');

            // audio context (fresh every time)
            audioContext = new AudioContext();
            source = audioContext.createMediaStreamSource(stream);

            analyser = audioContext.createAnalyser();
            analyser.fftSize = 2048;

            source.connect(analyser);

            const dataArray = new Uint8Array(analyser.fftSize);

            function checkSilence() {

                if (!recording) return;

                analyser.getByteTimeDomainData(dataArray);

                let sum = 0;

                for (let i = 0; i < dataArray.length; i++) {
                    let v = (dataArray[i] - 128) / 128;
                    sum += v * v;
                }

                let rms = Math.sqrt(sum / dataArray.length);

                if (rms < THRESHOLD) {
                    if (!silenceStart) {
                        silenceStart = Date.now();
                    } else if (Date.now() - silenceStart > SILENCE_TIME) {
                        stopRecording();
                        return;
                    }
                } else {
                    silenceStart = null;
                }

                requestAnimationFrame(checkSilence);
            }

            checkSilence();

            mediaRecorder.ondataavailable = (e) => {
                audioChunks.push(e.data);
            };

            mediaRecorder.onstop = async () => {

                recording = false;
                micBtn.classList.remove('tn-mic-active');

                let sessionId = localStorage.getItem("tn_session_id");

                // 🧹 STOP STREAM PROPERLY
                if (stream) {
                    stream.getTracks().forEach(t => t.stop());
                }

                // 🧹 CLOSE AUDIO CONTEXT PROPERLY
                if (audioContext) {
                    await audioContext.close();
                }

                analyser = null;
                source = null;
                audioContext = null;
                stream = null;
                mediaRecorder = null;

                const blob = new Blob(audioChunks, {
                    type: 'audio/webm'
                });

                const formData = new FormData();
                formData.append('audio', blob, 'voice.webm');
                formData.append('session_id', sessionId);

                const res = await fetch('{{ route('voice.to.text') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': CSRF,
                        'Accept': 'application/json',
                    },
                    body: formData
                });

                const data = await res.json();

                if (data.success) {
                    input.value = data.text;
                    input.focus();
                }
            };
        }

        function stopRecording() {
            if (mediaRecorder && recording) {
                mediaRecorder.stop();
            }
        }

        micBtn.addEventListener('click', async () => {

            if (recording) {
                stopRecording();
                return;
            }

            try {
                await startRecording();
            } catch (err) {
                console.error(err);
                alert('Mic permission denied');
            }
        });

    })();
</script>
