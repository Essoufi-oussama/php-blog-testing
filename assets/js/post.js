document.querySelector(".comment-container").addEventListener("click", function (event){
    if (event.target.id === "reply-button") {
        event.preventDefault(); 
        let commentContainer = event.target.closest(".comment-elements");
        let replyInputField = commentContainer.querySelector(".input-container");

        if (replyInputField.style.display === "none") {
            replyInputField.style.display = "flex";
        } else {
            replyInputField.style.display = "none";
        }
    } else if (event.target.id === "like") {
        event.preventDefault();
        
        if (event.target.style.color === "red") {
            event.target.style.color = "black";
        } else {
            event.target.style.color = "red";
        }
    }
});