// const toggle = document.getElementById("chat-toggle");
// const box = document.getElementById("chatbot-box");
// const closeBtn = document.getElementById("close-chat");

// toggle.onclick = () => box.style.display = "flex";
// closeBtn.onclick = () => box.style.display = "none";

// function quickAsk(msg) {
//   document.getElementById("chat-input").value = msg;
//   sendMessage();
// }

// function appendMessage(text, type) {
//   let div = document.createElement("div");
//   div.className = type + "-msg";
//   div.innerText = text;
//   document.getElementById("chat-messages").appendChild(div);
// }

// function sendMessage() {
//   let input = document.getElementById("chat-input");
//   let msg = input.value.trim();

//   if (!msg) return;

//   appendMessage(msg, 'user');
//   input.value = '';

//   appendMessage("Typing...", 'bot');

//   fetch('/chat', {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//       'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
//     },
//     body: JSON.stringify({
//       message: msg
//     })
//   })

//     .then(res => res.json())
//     .then(data => {
//       let messages = document.getElementById("chat-messages");
//       messages.lastChild.remove();

//       appendMessage(
//         data.choices[0].message.content,
//         'bot'
//       );
//     });
// }