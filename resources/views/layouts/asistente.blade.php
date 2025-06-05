<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Assistant</title>
    <style>
        #chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: url('https://consultoria-consultores.es/files/media/image/articles/2021/02/original/5782seidor.png') no-repeat center;
            background-size: cover;
            cursor: pointer;
            z-index: 1000;
            border: 2px solid #ccc; /* Fallback border if image fails to load */
        }
        #chat-icon:hover {
            opacity: 0.8; /* Slight hover effect */
        }
        #chat-container {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 250px;
            height: 300px;
            border: 1px solid #ccc;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            flex-direction: column;
            overflow: hidden;
            border-radius: 8px;
        }
        #chat-header {
            background-color: #ffd700; /* Yellow header */
            color: #000;
            padding: 8px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }
        #chat-responses {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
            font-size: 12px;
        }
        #chat-input {
            display: flex;
            padding: 8px;
            border-top: 1px solid #ccc;
        }
        #user-input {
            flex-grow: 1;
            padding: 5px;
            margin-right: 5px;
            font-size: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 5px 8px;
            font-size: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="chat-icon" onclick="toggleChat()"></div>
    <div id="chat-container">
        <div id="chat-header">Chat Assistant</div>
        <div id="chat-responses"></div>
        <div id="chat-input">
            <input type="text" id="user-input" placeholder="Escribe algo...">
            <button onclick="sendQuestion()">Enviar</button>
        </div>
    </div>

    <script>
        let chatOpen = false;

        function toggleChat() {
            const chat = document.getElementById('chat-container');
            chatOpen = !chatOpen;
            chat.style.display = chatOpen ? 'flex' : 'none';
        }

        async function sendQuestion() {
            const input = document.getElementById('user-input').value;
            if (input.trim()) {
                const responses = document.getElementById('chat-responses');
                responses.innerHTML += `<p><strong>Tú:</strong> ${input}</p>`;
                try {
                    const response = await fetch('/pagina/public/ask', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({ question: input })
                    });
                    const data = await response.json();
                    responses.innerHTML += `<p><strong>Asistente:</strong> ${data.answer}</p>`;
                } catch (error) {
                    responses.innerHTML += `<p><strong>Asistente:</strong> Lo siento, hubo un error. Intenta de nuevo.</p>`;
                }
                document.getElementById('user-input').value = '';
                responses.scrollTop = responses.scrollHeight;
            }
        }

        // Allow sending message with Enter key
        document.getElementById('user-input').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendQuestion();
        });
    </script>
</body>
</html>