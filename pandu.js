document.addEventListener("DOMContentLoaded", function () {
    const sendBtn = document.getElementById("send-btn");
    const userInput = document.getElementById("user-input");
    const chatBox = document.getElementById("chat-box");

    // Replace with your actual Gemini Chatbot API key
  const API_KEY = "AIzaSyC5YjXmO4FtSBDxGe07Uha4j3I44o9sgE0";

  // Replace with the correct Gemini Chatbot API endpoint
  const API_ENDPOINT = "https://api.gemini.com/v1/chatbot"; // (Double-check the version)

    // Function to send message
    function sendMessage() {
        const message = userInput.value.trim();
        if (message !== "") {
            // Display user message in chat box
            const userMessage = document.createElement("div");
            userMessage.className = "chat-message user-message";
            userMessage.textContent = message;
            chatBox.appendChild(userMessage);

            // Clear the input field
            userInput.value = "";

            // Scroll chat box to the bottom
            chatBox.scrollTop = chatBox.scrollHeight;

            // Simulate bot response
            setTimeout(function () {
                const botMessage = document.createElement("div");
                botMessage.className = "chat-message bot-message";
                botMessage.textContent = "This is a bot response to: " + message;
                chatBox.appendChild(botMessage);

                // Scroll chat box to the bottom
                chatBox.scrollTop = chatBox.scrollHeight;
            }, 1000);
        }
    }

    // Event listener for send button
    sendBtn.addEventListener("click", sendMessage);

    // Event listener for Enter key
    userInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
            sendMessage();
        }
    });
});
