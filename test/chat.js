// using JavaScript for a simplified example
var chatElementRef = document.getElementById("myChat");

chatElementRef.initialMessages = [
  { text: "Can I monitor your diet?", role: "ai" },
  { text: "Yes", role: "user" },
  { text: "Have you drank water?", role: "ai" },
  {
    html: `
      <div class="deep-chat-temporary-message">
        <button class="deep-chat-button deep-chat-suggestion-button" style="border: 1px solid green">Yes</button>
        <button class="deep-chat-button deep-chat-suggestion-button" style="border: 1px solid #d80000">No</button>
      </div>`,
    role: "user",
  },
];

chatElementRef.messageStyles = {
  html: {
    shared: {
      bubble: {
        backgroundColor: "unset",
        padding: "0px",
        width: "100%",
        textAlign: "right",
      },
    },
  },
};

chatElementRef.textInput = {
  disabled: true,
  placeholder: { text: "Use buttons to respond" },
};

chatElementRef.submitButtonStyles = {
  disabled: { container: { default: { opacity: 0, cursor: "auto" } } },
};

chatElementRef.demo = {
  response: {
    text: "What about now?",
    html: `
      <div class="deep-chat-temporary-message">
        <button class="deep-chat-button deep-chat-suggestion-button" style="border: 1px solid green">Yes</button>
        <button class="deep-chat-button deep-chat-suggestion-button" style="border: 1px solid #d80000">No</button>
      </div>`,
  },
};

Object.assign(chatElementRef.style, { height: "370px", borderRadius: "8px" });
