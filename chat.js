class LinkButton extends HTMLElement {
  constructor() {
    super();
    const link = document.createElement("a");
    link.href = this.getAttribute("href");
    link.textContent = this.getAttribute("text");
    link.target = "_blank";
    link.style.display = "inline-block";
    link.style.padding = "10px 20px";
    link.style.color = "#000";
    link.style.backgroundColor = "#FFFF00";
    link.style.textDecoration = "none";
    link.style.borderRadius = "5px";
    this.appendChild(link);
  }
}

customElements.define("link-button", LinkButton);

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
