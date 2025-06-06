<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Assistant</title>
    <style>
        /* Estilo del icono flotante */
        #chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: url('https://cdn3d.iconscout.com/3d/premium/thumb/asistente-virtual-ai-9248620-7622100.png') no-repeat center;
            background-size: cover;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
            border: 2px solid #007bff;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        #chat-icon:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 123, 255, 0.4);
        }
        
        /* Mensaje de bienvenida flotante */
        #greeting-message {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 90px;
            background-color: #007bff;
            color: #fff;
            padding: 8px 12px;
            border-radius: 12px;
            font-size: 12px;
            white-space: nowrap;
            z-index: 1001;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.3s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Contenedor principal del chat */
        #chat-container {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 320px;
            height: 450px;
            border: 1px solid #e0e0e0;
            background: #fff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            flex-direction: column;
            overflow: hidden;
            border-radius: 12px;
            font-family: 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Encabezado del chat */
        #chat-header {
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            position: relative;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        /* Indicador de escritura */
        #typing-indicator {
            display: none;
            position: absolute;
            top: 12px;
            right: 12px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
        }
        #typing-indicator span {
            animation: blink 1s infinite;
        }
        #typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
        #typing-indicator span:nth-child(3) { animation-delay: 0.4s; }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }
        
        /* Área de mensajes */
        #chat-responses {
            flex-grow: 1;
            padding: 12px;
            overflow-y: auto;
            font-size: 13px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        /* Estilos para los mensajes */
        .user-message {
            background-color: #007bff;
            color: white;
            padding: 10px 14px;
            border-radius: 18px 18px 0 18px;
            align-self: flex-end;
            max-width: 80%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 13px;
            line-height: 1.4;
            animation: fadeInUp 0.3s;
        }
        
        .assistant-message {
            background-color: #fff;
            color: #333;
            padding: 10px 14px;
            border-radius: 18px 18px 18px 0;
            align-self: flex-start;
            max-width: 80%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            font-size: 13px;
            line-height: 1.4;
            border: 1px solid #e0e0e0;
            animation: fadeInUp 0.3s;
        }
        
        .assistant-message.location {
            background-color: #e8f4fc;
            border-left: 4px solid #007bff;
            width: 90%;
        }
        
        .place-item {
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #d0e3f2;
        }
        
        .place-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .place-name {
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 6px;
            color: #0056b3;
            margin-bottom: 4px;
        }
        
        .place-rating {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #f39c12;
            font-size: 12px;
            margin: 4px 0;
        }
        
        .place-address {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #666;
            font-size: 12px;
            margin-top: 4px;
        }
        
        /* Área de entrada */
        #chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #e0e0e0;
            background-color: #fff;
        }
        
        #user-input {
            flex-grow: 1;
            padding: 8px 12px;
            margin-right: 8px;
            font-size: 13px;
            border: 1px solid #e0e0e0;
            border-radius: 18px;
            outline: none;
            transition: border-color 0.2s;
        }
        
        #user-input:focus {
            border-color: #007bff;
        }
        
        button {
            padding: 8px 14px;
            font-size: 13px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 18px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        
        /* Animaciones */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Scrollbar personalizada */
        #chat-responses::-webkit-scrollbar {
            width: 6px;
        }
        
        #chat-responses::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }
        
        #chat-responses::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }
        
        #chat-responses::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>
<body>
    <div id="chat-icon" onclick="toggleChat()"></div>
    <div id="greeting-message">Hola, soy Multi. ¿En qué puedo ayudarte?</div>
    <div id="chat-container">
        <div id="chat-header">Asistente Virtual
            <div id="typing-indicator"><span>.</span><span>.</span><span>.</span></div>
        </div>
        <div id="chat-responses"></div>
        <div id="chat-input">
            <input type="text" id="user-input" placeholder="Escribe tu mensaje..." autocomplete="off">
            <button onclick="sendQuestion()">Enviar</button>
        </div>
    </div>

    <script>
        let chatOpen = false;
        let greetingCount = 0;
        let firstInteraction = true;

        function toggleChat() {
            const chat = document.getElementById('chat-container');
            chatOpen = !chatOpen;
            chat.style.display = chatOpen ? 'flex' : 'none';
            
            if (chatOpen && firstInteraction) {
                // Mostrar mensaje de bienvenida cuando se abre por primera vez
                displayMessage("¡Hola! Soy Multi, tu asistente virtual. ¿En qué puedo ayudarte hoy?", 'assistant');
                firstInteraction = false;
            }
        }

        function showGreeting() {
            const greeting = document.getElementById('greeting-message');
            if (greetingCount < 3) {
                greeting.style.display = 'block';
                setTimeout(() => {
                    greeting.style.display = 'none';
                }, 3000);
                greetingCount++;
                if (greetingCount < 3) {
                    setTimeout(showGreeting, 10000);
                }
            }
        }

        // Mostrar saludo después de 5 segundos
        setTimeout(showGreeting, 5000);

        async function sendQuestion() {
    const inputElement = document.getElementById('user-input');
    const input = inputElement.value.trim();

    if (input) {
        const typingIndicator = document.getElementById('typing-indicator');

        // Mostrar mensaje del usuario con el diseño personalizado
        displayMessage(input, 'user');
        inputElement.value = '';

        // Mostrar indicador de escritura
        typingIndicator.style.display = 'block';

        try {
            // Llamada real a tu API
            const response = await fetch('/pagina/public/ask', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ question: input })
            });

            const data = await response.json();

            // Mostrar respuesta del asistente con diseño
            displayMessage(
                data.answer, 
                'assistant', 
                data.is_location || false // Asegura que siempre exista este valor
            );

        } catch (error) {
            displayMessage("Lo siento, hubo un error al procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.", 'assistant');
            console.error("Error:", error);
        } finally {
            typingIndicator.style.display = 'none';
        }

        // Hacer scroll automático hacia el final del chat
        const responses = document.getElementById('chat-responses');
        responses.scrollTop = responses.scrollHeight;
    }
}


        function displayMessage(text, sender, isLocation = false) {
            const container = document.getElementById('chat-responses');
            const messageDiv = document.createElement('div');
            
            messageDiv.className = sender === 'user' ? 'user-message' : 
                                isLocation ? 'assistant-message location' : 'assistant-message';
            
            if (isLocation) {
                // Procesar mensajes de ubicación
                const parts = text.split('\n\n');
                parts.forEach(part => {
                    if (part.trim() === '') return;
                    
                    const partDiv = document.createElement('div');
                    partDiv.className = 'place-item';
                    
                    // Formatear líneas individuales
                    const lines = part.split('\n');
                    lines.forEach(line => {
                        if (line.startsWith('🏷️')) {
                            const nameDiv = document.createElement('div');
                            nameDiv.className = 'place-name';
                            nameDiv.innerHTML = line.replace('🏷️', '📍');
                            partDiv.appendChild(nameDiv);
                        } else if (line.startsWith('⭐')) {
                            const ratingDiv = document.createElement('div');
                            ratingDiv.className = 'place-rating';
                            ratingDiv.textContent = line;
                            partDiv.appendChild(ratingDiv);
                        } else if (line.startsWith('📍')) {
                            const addressDiv = document.createElement('div');
                            addressDiv.className = 'place-address';
                            addressDiv.textContent = line;
                            partDiv.appendChild(addressDiv);
                        } else {
                            const textDiv = document.createElement('div');
                            textDiv.textContent = line;
                            partDiv.appendChild(textDiv);
                        }
                    });
                    
                    messageDiv.appendChild(partDiv);
                });
            } else {
                // Mensaje normal
                messageDiv.textContent = text;
            }
            
            container.appendChild(messageDiv);
            container.scrollTop = container.scrollHeight;
        }

        // Función para simular respuestas (solo para demostración)
        function getMockResponse(input) {
            const lowerInput = input.toLowerCase();
            
            if (lowerInput.includes('hola') || lowerInput.includes('buenos días') || lowerInput.includes('buenas tardes')) {
                return "¡Hola! ¿En qué puedo ayudarte hoy?";
            } else if (lowerInput.includes('restaurante') || lowerInput.includes('comer')) {
                return `🏷️ Restaurante La Terraza
⭐ 4.5/5 (Excelente)
📍 Calle Principal 123, Ciudad

🏷️ Café del Mar
⭐ 4.2/5 (Muy bueno)
📍 Avenida Costera 45, Ciudad

Ambos son excelentes opciones para comer. ¿Te gustaría reservar en alguno?`;
            } else if (lowerInput.includes('hotel') || lowerInput.includes('alojamiento')) {
                return `🏷️ Hotel Plaza
⭐ 4.7/5 (Excepcional)
📍 Calle Central 500, Ciudad

🏷️ Boutique Hotel Mar
⭐ 4.3/5 (Muy bueno)
📍 Paseo Marítimo 78, Ciudad

¿Necesitas ayuda con reservas o más información sobre estos hoteles?`;
            } else if (lowerInput.includes('gracias')) {
                return "¡De nada! ¿Hay algo más en lo que pueda ayudarte?";
            } else if (lowerInput.includes('adiós') || lowerInput.includes('chao') || lowerInput.includes('hasta luego')) {
                return "¡Hasta luego! No dudes en volver si necesitas más ayuda. ¡Que tengas un buen día!";
            } else {
                return "Entendido. Estoy aquí para ayudarte con cualquier consulta que tengas. ¿Podrías darme más detalles sobre lo que necesitas?";
            }
        }

        // Permitir enviar mensajes con Enter
        document.getElementById('user-input').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendQuestion();
        });
    </script>
</body>
</html>