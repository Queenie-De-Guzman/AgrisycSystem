<style>



#chat-widget {
  position: fixed;
  bottom: 200px; /* Adjusted to 10px from 100px */
  right: 10px;
  top: auto; /* Remove top property */
  right: -350px;
  transform: translateY(0); /* Remove translateY property */
  width: 350px;
  z-index: 9999;
  transition: right 0.5s;
}

#chat-widget.visible {
  right: 0;
}

#chat-container {
  height: 500px;
  bottom: 500px; /* Adjusted to 10px from 100px */
  right: 10px;
  border-radius: 10px;
  background-color: #f8f8f8;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  color: #333333;
  

  
}

  #chat-title {
  padding: 10px;
  font-weight: bold;
  background-color: #284269;
  color: #ffffff;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  }
  
  #chat-messages {
  height: 350px;
  overflow-y: scroll;
  padding: 10px;
  }
  
  .chat-message-container {
  margin-bottom: 10px;
  }
  
  .chat-message-header {
  font-weight: bold;
  }
  
  .chat-message-body {
  margin-top: 5px;
  }
  
  #chat-input-container {
  display: flex;
  align-items: center;
  padding: 10px;
  border-top: 1px solid #d9d9d9;
  }
  
  #chat-input {
  flex: 1;
  padding: 5px;
  border: none;
  border-radius: 5px;
  margin-right: 5px;
  }
  
  #chat-send {
  font-family: "Open Sans", sans-serif;
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  background-color: #284269;
  color: #ffffff;
  cursor: pointer;
  }
  

  #chat-toggle {
  font-family: "Open Sans", sans-serif;
  position: fixed;
  bottom: 100px; /* Adjusted to 10px from 100px */
  right: 20px;
  z-index: 9999;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  background-color: #2D2926;
  box-shadow: 0px 0px 0px #284269;
  color: white;
  font-weight: lighter;
  font-size: 11px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  opacity: 0.95;
  transition: background-color 0.3s ease-in-out;
}

#chat-toggle:hover {
  transform: scale(1.2);
  transition: transform 0.3s ease-in-out;
}

#chat-toggle i {
  font-size: 30px;
  line-height: 60px;
}
  #loading {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: 9999;
  }
  
  .spinner {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 5px solid #ccc;
    border-top-color: #666;
    animation: spin 1s infinite linear;
    margin: 0 auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
  .message {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translateX(-50%);
    font-size: 16px;
    color: #666;
  }
  
 </style>      
 <button id="chat-toggle"><i class="far fa-comment"></i></button>
  <div id="chat-widget">
    <div id="chat-container">
      <div id="chat-title">Sync AI</div>
      <div id="chat-messages"></div>
      <div id="chat-input-container">
        <input id="chat-input" type="text" placeholder="Write your message">
        <button id="chat-send">Send</button>
        <div id="loading">
          <div class="spinner"></div>
          <div class="message">Loading...</div>
        </div>        
      </div>
    </div>
  </div>

  

  <script>
const cache = {};

const OPENAI_API_KEY = "";
const OPENAI_API_ENDPOINT = "https://api.openai.com/v1/engines/text-davinci-003/completions";

const chatToggle = document.getElementById('chat-toggle');
const chatWidget = document.getElementById("chat-widget");
const chatContainer = document.getElementById("chat-container");
const chatMessages = document.getElementById("chat-messages");
const chatInput = document.getElementById("chat-input");
const chatSendButton = document.getElementById("chat-send");

let chatVisible = false;
let introMessageSent = false;

chatToggle.addEventListener('click', () => {
chatVisible = !chatVisible;
chatWidget.classList.toggle('visible', chatVisible);
chatToggle.innerText = chatVisible ? 'Close' : 'Open Chat';
});

chatInput.addEventListener('keydown', (event) => {
if (event.key === 'Enter') {
event.preventDefault();
const userInput = chatInput.value.trim();
if (userInput) {
addChatMessage("You", userInput);
sendChatMessage(userInput);
chatInput.value = "";
}
}
});

chatSendButton.addEventListener("click", () => {
const userInput = chatInput.value.trim();
if (userInput) {
addChatMessage("You", userInput);
sendChatMessage(userInput);
chatInput.value = "";
}
});

function addChatMessage(sender, message) {
const messageContainer = document.createElement("div");
messageContainer.classList.add("chat-message-container");
const messageHeader = document.createElement("div");
messageHeader.classList.add("chat-message-header");
messageHeader.textContent = sender + ":";
const messageBody = document.createElement("div");
messageBody.classList.add("chat-message-body");
messageBody.textContent = message;
messageContainer.appendChild(messageHeader);
messageContainer.appendChild(messageBody);
chatMessages.appendChild(messageContainer);
chatContainer.scrollTop = chatContainer.scrollHeight;
}

function sendChatMessage(message) {
  if (!introMessageSent) {
    addChatMessage("Sync AI", "Hello! I'm Sync AI. I'm constantly improving and for that reason, from time to time I may not provide a very accurate answer! Please enter your message below.");
    introMessageSent = true;
  }

  const loadingElement = document.getElementById("loading");
  loadingElement.style.display = "block";

  fetch(OPENAI_API_ENDPOINT, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${OPENAI_API_KEY}`,
    },
    body: JSON.stringify({
      prompt: `Q: ${message}\nA: `,
      max_tokens: 600,
      temperature: 0.6,
      stop: ["\n"],
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      const chatbotResponse = data.choices[0].text.trim();
      addChatMessage("Chat IA", chatbotResponse);
      loadingElement.style.display = "none";
    })
    .catch((error) => {
      console.error(error);
      addChatMessage("Sync AI", "Sorry, I was unable to process your request.");
      loadingElement.style.display = "none";
    });
}





  </script>
