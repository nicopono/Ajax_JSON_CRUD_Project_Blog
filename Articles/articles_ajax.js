

function create() {

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

xhr.open('POST','create_article.php');

var	data = new	FormData();
data.append('title1', document.getElementById('title').value);
data.append('content1', document.getElementById('content').value);

xhr.send(data);  

}