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
