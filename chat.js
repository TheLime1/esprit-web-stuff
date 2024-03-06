var chatElementRef = document.querySelector("deep-chat");
function getIP(callback) {
  // Using a free service to get the IP address
  fetch("https://api.ipify.org?format=json")
    .then((response) => response.json())
    .then((data) => {
      callback(data.ip);
    })
    .catch((error) => {
      console.error("Error fetching IP address:", error);
      callback(null);
    });
}

let clientIP;

getIP((ip) => {
  clientIP = ip;
});

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

    // Add hover effect
    link.onmouseover = function () {
      this.style.backgroundColor = "#FFD700"; // Change to a different color on hover
    };
    link.onmouseout = function () {
      this.style.backgroundColor = "#FFFF00"; // Change back to the original color
    };

    this.appendChild(link);
  }
}

customElements.define("link-button", LinkButton);

window.onload = function () {
  chatElementRef.messageStyles = {
    html: {
      shared: {
        bubble: {
          backgroundColor: "unset",
          padding: "0px",
          width: "100%",
          textAlign: "left",
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

  chatElementRef.initialMessages = [
    {
      text: "By accessing this website, you agree to the Terms of Service",
      role: "ai",
    },
    {
      html: '<link-button href="file:terms.html" text="Terms of Service "></link-button>',
      role: "ai",
    },
    { files: [{ src: "images/chat.jpg", type: "image" }], role: "ai" },
    { text: "agree ?", role: "huh" },
    {
      html: '<div class="deep-chat-temporary-message"><button class="deep-chat-button deep-chat-suggestion-button" style="border: 3px solid green; margin-right: 5px;">Yes</button><button class="deep-chat-button deep-chat-suggestion-button" style="border: 3px solid #d80000">No</button></div>',
      role: "user",
    },
  ];

  chatElementRef.demo = {
    response: (message) => {
      const userResponse = message.text?.toLowerCase();
      let response;
      if (userResponse === "yes") response = "Thank you";
      else if (userResponse === "no")
        response = "adding " + clientIP + " to the blacklist :)";
      else response = "Please respond with either Yes or No";
      return { text: response };
    },
  };

  Object.assign(chatElementRef.style, {
    borderRadius: "10px",
    position: "fixed",
    bottom: "0px",
    right: "7%",
    zIndex: "1",
  });

  chatElementRef.stream = true;
};
