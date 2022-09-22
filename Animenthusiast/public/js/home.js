/*PIXABAY*/

const maxResults = 10

const img_api= 'https://pixabay.com/api/'
const img_key= '26908881-2da8efcfa7d053313d4470fa3'

function ImageJson(json){

    const risultati = json.hits
    const album = document.querySelector('#global-view')
    album.innerHTML = ''

    for(let result of risultati){
        const imageContainer = document.createElement('div')
        imageContainer.classList.add('container')
        const img = document.createElement('img')
        img.src = result.largeImageURL
        imageContainer.appendChild(img)
        album.appendChild(imageContainer)
    }
}


function onResponse(resp){
    return resp.json();
}

function sendRequest(event){
    event.preventDefault()

    const text = document.querySelector('#element').value
    const encodedText = encodeURIComponent(text)

    console.log('Sto cercando: ' +encodedText)

    const image_request = img_api + '?key=' + img_key + '&q=' + encodedText + '&per_page=' + maxResults

    console.log('URL: ' + image_request)

    fetch(image_request).then(onResponse).then(ImageJson)
}

const form = document.querySelector('#search_content')
form.addEventListener('submit', sendRequest)