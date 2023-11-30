var json = [];
var komments = [];

async function getComs() {
    const data = await fetch("http://localhost/wordpressOSKAR/wp-json/wp/v2/posts");
    const json = await data.json();
    json.reverse()
    console.log(json);

    const data_kom = await fetch("http://localhost/wordpressOSKAR/wp-json/wp/v2/comments");
    const komments = await data_kom.json();
    console.log(komments);

    for (let i in komments) {


        const div = document.createElement("div");
        div.setAttribute("class", "kom");
        div.setAttribute("name", i);

        const div_title = document.createElement("div");
        div_title.setAttribute("class", "post");
        // Pobierz ID posta, do którego odnosi się komentarz
        const postID = komments[i].post;

        // Znajdź odpowiedni post na podstawie ID
        const relatedPost = json.find(post => post.id === postID);

        if (relatedPost) {
            div_title.innerHTML = relatedPost.title.rendered;
        }


        const div_who = document.createElement("div");
        div_who.setAttribute("class", "komentator");
        div_who.innerHTML = komments[i].author_name;

        const clear1 = document.createElement("p");
        clear1.setAttribute("style", "clear:both");

        const div_text = document.createElement("div");
        div_text.setAttribute("class", "tresc");
        div_text.innerHTML = komments[i].content.rendered;



        div.appendChild(div_title);
        div.appendChild(div_who);
        div.appendChild(clear1);
        div.appendChild(div_text);



        if (komments[i].content.rendered.includes("kupa")) {
            div_text.style.backgroundColor = "#cc4a45";
            div_text.style.height = "150px"

            const div_delete = document.createElement("div");
            div_delete.setAttribute("class", "divDelete");
            div_delete.setAttribute("name", i);

            const div_delete_button = document.createElement("div");
            div_delete_button.setAttribute("class", "divDeleteButton");
            div_delete_button.setAttribute("name", i);

            const div_delete_answer = document.createElement("div");
            div_delete_answer.setAttribute("class", "divDeleteAnswer");
            div_delete_answer.setAttribute("name", i);

            const deleteButton = document.createElement("button");
            deleteButton.setAttribute("class", "deleteButton")
            deleteButton.textContent = "Delete";
            deleteButton.addEventListener("click", () => {

                div.remove();

            });

            const answerButton = document.createElement("button");
            answerButton.setAttribute("class", "deleteButton")
            answerButton.textContent = "Odpowiedz";
            answerButton.addEventListener("click", () => {

                const id = 123; // Zmień to na ID komentarza, na który chcesz odpowiedzieć
                const answer = "Twoja odpowiedź na komentarz.";

                answerAPI(id, answer)

            });

            div_delete.appendChild(div_delete_button);
            div_delete_button.appendChild(deleteButton);
            div_delete.appendChild(div_delete_answer);
            div_delete_answer.appendChild(answerButton);
            div.appendChild(div_delete);

        }

        document.getElementById("cointainer1").appendChild(div);
    }
}

getComs();


async function answerAPI() {

    const url = new URL(`http://localhost/wordpressOSKAR/wp-json/wp/v2/posts/${id}`)

    const params = {
        id: id,
        answer: answer
    }

    for (let i in params) {
        url.searchParams.append(i, params[i])
    }

    console.log(url)

    const data = await fetch(url, {
        method: "POST",
        headers: {
            authorization: `Basic ${btoa("oskar:OsK13579.")}`

        }
    })

}
