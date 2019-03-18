

//*! ------------CREATE------------ */

function createArticle() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {

       if (xhr.readyState == 4 && xhr.status == 200) {
            // alert("alert");

        var child = document.createElement ("p");
            child.innerHTML = document.getElementById("title").value + "--" + document.getElementById("content").value;
            
        var parent = document.getElementById ("parentNewArticle");
            parent.appendChild(child);
        }
    };

xhr.open('POST','./controllers/create_article.php');

var	data = new	FormData();
data.append('title1', document.getElementById('title').value);
data.append('content1', document.getElementById('content').value);

xhr.send(data);  
 
}

//*! ------------READ------------ */

function readArticle($identity) {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {

       if (xhr.readyState == 4 && xhr.status == 200) {

        var art = JSON.parse(xhr.responseText);
        document.getElementById("id_article").value = art.id;
        document.getElementById("title").value = art.title;
        document.getElementById("content").value = art.content;
        }
    };

xhr.open('POST','./controllers/read_article.php');


var data = new FormData();
data.append('id', $identity);

xhr.send(data);
}












//*! ------------UPDATE------------ */

function update() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {

       if (xhr.readyState == 4 && xhr.status == 200) {



}

    }
}

