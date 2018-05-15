var view;
//avar content = "TEST <li>List Item</li>";

function loadContent(section) {
    THREE.Cache.enabled = true;

    var plane = document.getElementById("info");

    var loader = new THREE.FileLoader();

    loader.load(
        "../html/" + section + ".html",
        function(data) {
            plane.setAttribute("text", {value: data, color: "red"});
            //console.log(data);
        }
    );
}
