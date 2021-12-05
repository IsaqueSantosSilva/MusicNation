const form = document.getElementById("form");
const search = document.getElementById("search");
const result = document.getElementById("result");
// const more = document.getElementById("more");
const inputContent = document.getElementById("input_content");
const copy_div = document.getElementById("copy_div");

const apiURL = "https://api.lyrics.ovh";

// Search by song or artist
async function searchSongs(term) {
    const res = await fetch(`${apiURL}/suggest/${term}`);
    const data = await res.json();

    showData(data);
}

// Show song and artist in DOM
function showData(data) {
    result.innerHTML = `
    <ul class="songs">
      ${data.data.map(
          (song) => `<li>
      <span><strong>${song.artist.name}</strong> - ${song.title}</span>
      <button class="btn" data-artist="${song.artist.name}" data-songtitle="${song.title}">Ver Letra</button>
    </li>`
          )
          .join("")}
    </ul>
  `;

    // if (data.prev || data.next) {
    //     more.innerHTML = `
    //   ${data.prev ? `<button class="btn" onclick="getMoreSongs('${data.prev}')">Anterior</button>` : ""}
    //   ${data.next ? `<button class="btn" onclick="getMoreSongs('${data.next}')">Próxima</button>` : ""}
    // `;
    // } else {
    //     more.innerHTML = "";
    // }
}

// Get prev and next songs
async function getMoreSongs(url) {
    const res = await fetch(`https://cors-anywhere.herokuapp.com/${url}`);
    const data = await res.json();

    showData(data);
}

// Get lyrics for song
async function getLyrics(artist, songTitle) {
    const res = await fetch(`${apiURL}/v1/${artist}/${songTitle}`);
    const data = await res.json();

    if (data.error) {
        result.innerHTML = "Letra não encontrada";
    } else {
        const lyrics = data.lyrics.replace(/(\r\n|\r|\n)/g, "<br>");

        result.innerHTML = `
            <h2><strong>${artist}</strong> - ${songTitle}</h2>
            <span>${lyrics}</span>
        `;
    }

    // more.innerHTML = "";
}

// Event listeners
form.addEventListener("submit", (e) => {
    e.preventDefault();

    const searchTerm = search.value.trim();

    if (!searchTerm) {
        // alert("Oque você espera encontrar com isso? Alguma música do Raimundos?!?");
    } else {
        searchSongs(searchTerm);
    }
});

// Get lyrics button click
result.addEventListener("click", (e) => {
    const clickedEl = e.target;

    if (clickedEl.tagName === "BUTTON") {
        const artist = clickedEl.getAttribute("data-artist");
        const songTitle = clickedEl.getAttribute("data-songtitle");

        getLyrics(artist, songTitle);
    }
});
